<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Penyewa;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        Carbon::setLocale('id');
        $penyewa = Penyewa::all();
        $totalPemasukan = Pemasukan::sum('nominal');
        $totalPengeluaran = Pengeluaran::sum('jumlah');
        $currentYear = Carbon::now()->year;

        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $pemasukanMonths = ['Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0];
        $pengeluaranMonths = ['Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0];
        $pemasukan = Pemasukan::whereYear('tanggalPembayaran', $currentYear)->get();
        $pengeluaran = Pengeluaran::whereYear('tanggalPengeluaran', $currentYear)->get();

        foreach($months as $month){
            foreach($pemasukan as $data){
                $bulan = Carbon::parse($data->tanggalPembayaran);
                $monthName = $bulan->translatedFormat('F');
                if($month == $monthName){
                    $pemasukanMonths[$month] += $data->nominal;
                }
            }
            foreach($pengeluaran as $data){
                $bulan = Carbon::parse($data->tanggalPengeluaran);
                $monthName = $bulan->translatedFormat('F');
                if($month == $monthName){
                    $pengeluaranMonths[$month] += $data->jumlah;
                }
            }
        }
        $pemasukanValues = array_values($pemasukanMonths);
        $pengeluaranValues = array_values($pengeluaranMonths);

        $lastYear = Carbon::now()->subYear()->year;
        $pemasukanLastYear = (int) Pemasukan::whereYear('tanggalPembayaran', $lastYear)->sum('nominal');
        $pemasukanThisYear = (int) Pemasukan::whereYear('tanggalPembayaran', $currentYear)->sum('nominal');
        $netBalanceLastYear = 0;
        $netBalance = $totalPemasukan - $totalPengeluaran;
        
        return view ('dashboard', compact('penyewa', 'totalPemasukan', 'totalPengeluaran', 'pemasukanValues', 'pengeluaranValues', 'netBalance', 'netBalance', 'months' , 'pemasukanLastYear', 'pemasukanThisYear', 'netBalanceLastYear'));
    }

    public function laporan(){
        Carbon::setLocale('id');

        $currentYear= Carbon::now()->year;
        $currentMonth= Carbon::now()->month;
        $lastMonth = Carbon::now()->subMonth()->month;
        $nextMonth = Carbon::now()->addMonths()->month;
        $nextTwoMonths = Carbon::now()->addMonths(2)->month;

        $currentMonthName = Carbon::now()->translatedFormat('F');
        $lastMonthName = Carbon::now()->subMonth()->translatedFormat('F');
        $nextMonthName = Carbon::now()->addMonths()->translatedFormat('F');
        $nextTwoMonthsName = Carbon::now()->addMonths(2)->translatedFormat('F');

        $pemasukanCurrentMonth = Pemasukan::whereMonth('tanggalPembayaran', $currentMonth)->sum('nominal');
        $pengeluaranCurrentMonth = Pengeluaran::whereMonth('tanggalPengeluaran', $currentMonth)->sum('jumlah');
        
        $pemasukanLastMonth = Pemasukan::whereMonth('tanggalPembayaran', $lastMonth)->sum('nominal');
        $pengeluaranLastMonth = Pengeluaran::whereMonth('tanggalPengeluaran', $lastMonth)->sum('jumlah');

        $pemasukanNextMonth = Pemasukan::whereMonth('tanggalPembayaran', $nextMonth)->sum('nominal');
        $pengeluaranNextMonth = Pengeluaran::whereMonth('tanggalPengeluaran', $nextMonth)->sum('jumlah');

        $pemasukanNextTwoMonths = Pemasukan::whereMonth('tanggalPembayaran', $nextTwoMonths)->sum('nominal');
        $pengeluaranNextTwoMonths = Pengeluaran::whereMonth('tanggalPengeluaran', $nextTwoMonths)->sum('jumlah');

        return view('laporan.index', compact('currentYear', 'currentMonthName', 'lastMonthName', 'nextMonthName', 'nextTwoMonthsName','pemasukanCurrentMonth', 'pengeluaranCurrentMonth', 'pemasukanLastMonth', 'pengeluaranLastMonth', 'pemasukanNextMonth', 'pengeluaranNextMonth', 'pemasukanNextTwoMonths', 'pengeluaranNextTwoMonths'));
    }

    public function print(Request $request, String $month){
        Carbon::setLocale('id');
        $months = [
            'Januari' => [],
            'Februari' => [],
            'Maret' => [],
            'April' => [],
            'Mei' => [],
            'Juni' => [],
            'Juli' => [],
            'Agustus' => [],
            'September' => [],
            'Oktober' => [],
            'November' => [],
            'Desember' => [],
        ];
        if($month){
            $bulan = [
                'Januari' => 1,
                'Februari' => 2,
                'Maret' => 3,
                'April' => 4,
                'Mei' => 5,
                'Juni' => 6,
                'Juli' => 7,
                'Agustus' => 8,
                'September' => 9,
                'Oktober' => 10,
                'November' => 11,
                'Desember' => 12
            ];
            $monthNumber = isset($bulan[$month]) ? $bulan[$month] : null;
            Carbon::setLocale('en');
            $year = Carbon::now()->year;
            $startDate = Carbon::createFromFormat('Y-m-d', $year . '-' . $monthNumber . '-01');
            $endDate = $startDate->copy()->endOfMonth();
        }
        elseif($request->filterTahun){
            $startDate = Carbon::parse($request->filterTahun . '-01-01');
            $endDate = Carbon::parse($request->filterTahun . '-12-31');
        }else{
            $startDate = Carbon::parse($request->tanggalAwal);
            $endDate = Carbon::parse($request->tanggalAkhir);
        }
        $allDates = [];

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            $allDates[] = $date->toDateString();
        }

        foreach ($allDates as $date) {
            $carbonDate = Carbon::parse($date);
            $monthName = $carbonDate->translatedFormat('F');

            $pemasukan = Pemasukan::whereDate('tanggalPembayaran', $date)->get();
            foreach ($pemasukan as $entry) {
                $entry->type = 'Pemasukan';
                $months[$monthName][] = $entry;
            }

            $pengeluaran = Pengeluaran::whereDate('tanggalPengeluaran', $date)->get();
            foreach ($pengeluaran as $entry) {
                $entry->type = 'Pengeluaran';
                $months[$monthName][] = $entry;
            }
        }

        $months = array_filter($months, function ($value) {
            return !empty($value);
        });

        $tanggalAwal =$request->tanggalAwal;
        $tanggalAkhir =$request->tanggalAkhir;
        
        $monthSums = [];
        $totalPemasukan = 0;
        $totalPengeluaran = 0;
        foreach ($months as $monthName => $entries) {

            $entriesCollection = collect($entries);
            $sumPemasukan = $entriesCollection->where('type', 'Pemasukan')->sum('nominal');
            $sumPengeluaran = $entriesCollection->where('type', 'Pengeluaran')->sum('jumlah');
            $totalPemasukan += $sumPemasukan;
            $totalPengeluaran += $sumPengeluaran;
            $monthSums[$monthName] = [
                'pemasukan' => $sumPemasukan,
                'pengeluaran' => $sumPengeluaran,
                'net_balance' => $sumPemasukan - $sumPengeluaran,
            ];
        }
        
        return view('laporan.print', compact('months', 'tanggalAwal', 'tanggalAkhir', 'monthSums', 'totalPemasukan', 'totalPengeluaran'));
    }
}
