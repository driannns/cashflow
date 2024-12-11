<x-app-layout>
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-screen flex flex-col gap-y-10">
        <div class="overflow-hidden sm:rounded-lg">
            <div class="p-6 text-center text-3xl font-black text-[#212C5F]">
                Laporan Keuangan Rumahku Kos
            </div>
        </div>
        <div class="flex justify-around items-center">
            <div class="w-4/12 bg-white rounded-md p-3">
                <h1 class="text-center text-lg font-medium">Laporan Keuangan</h1>
                <form class="mt-4">
                    <div class="mb-6 flex items-center">
                        <label for="tanggalMasuk" class="block mb-2 font-medium text-gray-900 w-2/3 text-sm">Tanggal Awal</label>
                        <input type="date" id="tanggalMasuk" name="tanggalMasuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div class="mb-6 flex items-center">
                        <label for="tanggalMasuk" class="block mb-2 font-medium text-gray-900 w-2/3 text-sm">Tanggal Akhir</label>
                        <input type="date" id="tanggalMasuk" name="tanggalMasuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div class="flex justify-center">
                        <button class="flex items-center gap-2 py-2 px-4 rounded-md bg-[#CED5FC] text-bold">Cetak <img src="{{ asset('assets/cetak.png') }}" alt="Cetak"></button>
                    </div>
                </form>
            </div>
            <div class="w-4/12 bg-white rounded-md p-3 h-full">
                <h1 class="text-center text-lg font-medium">Laporan Keuangan Tahunan</h1>
                <form class="mt-4">
                    <div class="mb-6 flex items-center">
                        <label for="tanggalMasuk" class="block mb-2 font-medium text-gray-900 w-2/3 text-sm">Tahun</label>
                        <select id="tanggalMasuk" name="tanggalMasuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button class="flex items-center gap-2 py-2 px-4 rounded-md bg-[#CED5FC] text-bold">Cetak <img src="{{ asset('assets/cetak.png') }}" alt="Cetak"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
