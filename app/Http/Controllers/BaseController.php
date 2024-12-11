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
        
        return view('laporan.index');
    }
}
