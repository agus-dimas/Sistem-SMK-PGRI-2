<x-app-layout>
    <x-slot name="title">
        Data Personal Siswa
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Personal Siswa') }}
        </h2>
    </x-slot>

           <!-- End of Navbar -->

           <div class="container mx-auto my-5 p-5">
               <div class="md:flex no-wrap md:-mx-2 ">
                   <!-- Left Side -->
                   <div class="w-full md:w-3/12 md:mx-2">
                       <!-- Profile Card -->
                       <div class="bg-white p-3 border-t-4 border-green-400">
                           <div class="image overflow-hidden">
                               <img class="h-auto w-full mx-auto"
                                   src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                   alt="">
                           </div>
                           <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Ajie Pangestu</h1>
                           <h3 class="text-gray-600 font-lg text-semibold leading-6">Siswa SMK 2 PGRI DENPASAR</h3>
                           <ul
                               class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                               <li class="flex items-center py-3">
                                   <span>Status</span>
                                   <span class="ml-auto"><span
                                           class="bg-green-500 py-1 px-2 rounded text-white text-sm">Aktif</span></span>
                               </li>
                               <li class="flex items-center py-3">
                                   <span>Angkatan</span>
                                   <span class="ml-auto">2017</span>
                               </li>
                           </ul>
                       </div>
                       <!-- End of profile card -->
                       <div class="my-4"></div>
                       <!-- Friends card -->

                       <!-- End of friends card -->
                   </div>
                   <!-- Right Side -->
                   <div class="w-full md:w-9/12 mx-2 h-64">
                       <!-- Profile tab -->
                       <!-- About Section -->
                       <div class="bg-white p-3 shadow-sm rounded-sm ">
                           <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                               <span clas="text-green-500">
                                   <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                   </svg>
                               </span>
                               <span class="tracking-wide">About</span>
                           </div>
                           <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Nama Depan</div>
                                    <div class="px-4 py-2">Ajie</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Nama Belakang</div>
                                    <div class="px-4 py-2">Pangestu</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                                    <div class="px-4 py-2">Laki-laki</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">No Telpn Wali.</div>
                                    <div class="px-4 py-2">081 *** *** ***</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Alamat</div>
                                    <div class="px-4 py-2">Aokigahara</div>
                                </div>

                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto:ajie@gmail.com">ajie@egmail.com</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Tanggal Lahir</div>
                                    <div class="px-4 py-2">14-11-1998</div>
                                </div>
                                <div class="grid grid-cols-2">
                                 <div class="px-4 py-2 font-semibold">Total Poin</div>
                                 <div class="px-4 py-2">40</div>

                             </div>
                            </div>
                           <button
                               class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-400 hover:shadow-xs p-3 my-4">Cetak Laporan</button>
                            </div>
                       <!-- End of about section -->

                       <div class="my-4"></div>

                       <!-- Experience and education -->
                 </div>

                    <div class=" bg-white p-3 shadow-sm rounded-sm">
                        <div class="grid grid-cols-2">
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-1">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Data Pelanggaran</span>
                                </div>
                                <table class="table-auto bg-white border-collapse w-full">
                                    <thead>
                                      <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                                        <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">No</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Tanggal</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">NIS</th>

                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Semester</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Kode Pelanggaran</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Jenis Pelanggaran</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Poin</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Sanksi</th>
                                        <th class="px-4 py-2 " style="background-color:#f8f8f8">Opsi</th>


                                      </tr>
                                    </thead>
                                    <tbody class="text-sm font-normal text-gray-700">
                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                        <td class="px-4 py-4">1</td>
                                        <td class="px-4 py-4">9/7/2021</td>
                                        <td class="px-4 py-4">884001</td>
                                        <td class="px-4 py-4">Semester Genap</td>
                                        <td class="px-4 py-4">I ( Pelecehan Seksual )</td>
                                        <td class="px-4 py-4">Ngentod</td>
                                        <td class="px-4 py-4">20</td>
                                        <td class="px-4 py-4">Pemanggilan Orang Tua</td>
                                        <td class="px-4 py-4">
                                        <button
                                        class="bg-yellow-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
                                        @click="showModal1 = true"> SMS </button>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                        <td class="px-4 py-4">2</td>
                                        <td class="px-4 py-4">9/7/2021</td>
                                        <td class="px-4 py-4">884001</td>
                                        <td class="px-4 py-4">Semester Genap</td>
                                        <td class="px-4 py-4">I ( Pelecehan Seksual )</td>
                                        <td class="px-4 py-4">Ngentod</td>
                                        <td class="px-4 py-4">20</td>
                                        <td class="px-4 py-4">Pemanggilan Orang Tua</td>
                                        <td class="px-4 py-4">
                                        <button
                                        class="bg-yellow-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
                                        @click="showModal1 = true"> SMS </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>


