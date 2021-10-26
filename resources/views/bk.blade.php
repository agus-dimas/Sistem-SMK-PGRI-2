<x-app-layout>
    <x-slot name="title">
        Bimbingan Konseling
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bimbingan Konseling') }}
        </h2>
    </x-slot>
    <div class="py-12">

<div class="flex justify-center h-screen">
	<!--actual component start-->
	<div x-data="setup()">
		<ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs" :key="index">
				<li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
					:class="activeTab===index ? 'text-green-500 border-green-500' : ''" @click="activeTab = index"
					x-text="tab"></li>
			</template>
		</ul>

        {{-- Tab Data Siswa --}}

        <div  x-show="activeTab===0" class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200 w-full">
                <div class="bg-white pb-4 px-4 rounded-md w-full">
                    <div class="w-full flex justify-end px-2 mt-2">
                      <div class="w-full sm:w-64 inline-block relative ">
                        <div class="flex justify-between">
                            <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />
                            <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">
                            <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                            <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                            </svg>
                        </div>
                      </div>
                    </div>
                </div>
                  <div class="overflow-x-auto mt-6 w-full">
                    <div class="md:space-x-2 space-y-10 md:space-y-0">
                        <button onclick="openModal('main-modal')" class='bg-green-400 font-semibold text-white p-1 w-40 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2'>Tambah Data</button>
                    </div>

                    <table class="table-auto border-collapse w-full">
                      <thead>
                        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                          <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">No</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">NIS</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Nama Siswa</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Kelas</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Angkatan</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Tgl Lahir</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Jenis Kelamin</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Alamat</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Nama Wali</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">No Tlp</th>
                          <th class="px-4 py-2 " style="background-color:#f8f8f8">Opsi</th>
                        </tr>
                      </thead>
                      <tbody class="text-sm font-normal text-gray-700">
                        <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                          <td class="px-4 py-4">1</td>
                          <td class="px-4 py-4">884001</td>
                          <td class="px-4 py-4">Ajie</td>
                          <td class="px-4 py-4">X IPA</td>
                          <td class="px-4 py-4">2017</td>
                          <td class="px-4 py-4">14-11-98</td>
                          <td class="px-4 py-4">Laki-laki</td>
                          <td class="px-4 py-4">Aokigahara</td>
                          <td class="px-4 py-4">PP Miky</td>
                          <td class="px-4 py-4">081 *** *** ***</td>
                          <td class="px-4 py-4">
                            <div class="md:space-x-2 space-y-10 md:space-y-0">
                                <button onclick="openModal('another-modal')" class='bg-yellow-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2'>Ubah</button>
                            </div>
                          </td>

                        </tr>
                        <tr class="hover:bg-gray-100 border-b border-gray-200 py-4">
                          <td class="px-4 py-4 flex items-center">2</td>
                          <td class="px-4 py-4">884002</td>
                          <td class="px-4 py-4">Kresna</td>
                        </tr>
                        <tr class="hover:bg-gray-100  border-gray-200">
                          <td class="px-4 py-4">2</td>
                          <td class="px-4 py-4">884003</td>
                          <td class="px-4 py-4">Dimas</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                     <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">

                      <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.4">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9 12C9 12.2652 9.10536 12.5196 9.29289 12.7071L13.2929 16.7072C13.6834 17.0977 14.3166 17.0977 14.7071 16.7072C15.0977 16.3167 15.0977 15.6835 14.7071 15.293L11.4142 12L14.7071 8.70712C15.0977 8.31659 15.0977 7.68343 14.7071 7.29289C14.3166 6.90237 13.6834 6.90237 13.2929 7.29289L9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12Z" fill="#2C2C2C"/>
              </g>
              </svg>
                      <p class="leading-relaxed cursor-pointer mx-2 text-blue-600 hover:text-blue-600 text-sm">1</p>
                      <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600" >2</p>
                      <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 3 </p>
                      <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 4 </p>
                      <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M15 12C15 11.7348 14.8946 11.4804 14.7071 11.2929L10.7071 7.2929C10.3166 6.9024 9.6834 6.9024 9.2929 7.2929C8.9024 7.6834 8.9024 8.3166 9.2929 8.7071L12.5858 12L9.2929 15.2929C8.9024 15.6834 8.9024 16.3166 9.2929 16.7071C9.6834 17.0976 10.3166 17.0976 10.7071 16.7071L14.7071 12.7071C14.8946 12.5196 15 12.2652 15 12Z" fill="#18A0FB"/>
              </svg>
                </div>
                </div>

              <style>

              thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
              thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

              tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
              tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}
              </style>

            <br>

            </div>
        </div>

        {{-- Tab Data Pelanggaran --}}

             <div  x-show="activeTab===1" class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 w-full">
                    <div class="bg-white pb-4 px-4 rounded-md w-full">
                        <div class="w-full flex justify-end px-2 mt-2">
                          <div class="w-full sm:w-64 inline-block relative ">
                            <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />
                            <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                              <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                                <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                              </svg>
                            </div>
                            <div></div>
                          </div>
                        </div>
                        <div class="overflow-x-auto mt-6 w-full">

                            <div class="md:space-x-2 space-y-10 md:space-y-0">
                                <button onclick="openModal('pelanggaran-sms')" class='bg-blue-400 font-semibold text-white p-1 w-40 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2'>SMS</button>
                            </div>

                        <table class="table-auto border-collapse w-full">
                          <thead>
                            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                              <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">No</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">Tanggal</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">NIS</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">Nama Siswa</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">Kelas</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">Angkatan</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">Total Poin</th>
                              <th class="px-4 py-2 " style="background-color:#f8f8f8">Opsi</th>
                            </tr>
                          </thead>
                          <tbody class="text-sm font-normal text-gray-700">
                            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                              <td class="px-4 py-4">1</td>
                              <td class="px-4 py-4">9/7/2021</td>
                              <td class="px-4 py-4">884001</td>
                              <td class="px-4 py-4">Ajie</td>
                              <td class="px-4 py-4">X IPA</td>
                              <td class="px-4 py-4">2017</td>
                              <td class="px-4 py-4">40</td>
                              <td class="px-4 py-4">
                                <div class="md:space-x-2 space-y-10 md:space-y-2">
                                    <button onclick="openModal('pelanggaran-tambah')" class='bg-green-400 font-semibold text-white p-1 w-full rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2'>Pelanggaran</button>
                                    <button class="bg-yellow-400 font-semibold text-white p-1 w-full rounded-full hover:bg-yellow-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-5">Info</button>
                                    {{-- <button onclick="openModal('pelanggaran-edit')"  class="bg-yellow-400 font-semibold text-white p-1 w-full rounded-full hover:bg-yellow-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-5">Info</button> --}}

                               </div>
                              </td>


                            </tr>
                            <tr class="hover:bg-gray-100 border-b border-gray-200 py-4">
                              <td class="px-4 py-4 flex items-center">2</td>
                              <td class="px-4 py-4"></td>
                              <td class="px-4 py-4">884002</td>
                              <td class="px-4 py-4">Kresna</td>
                            </tr>
                            <tr class="hover:bg-gray-100  border-gray-200">
                              <td class="px-4 py-4">3</td>
                              <td class="px-4 py-4"></td>
                              <td class="px-4 py-4">884003</td>
                              <td class="px-4 py-4">Dimas</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                         <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">

                          <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.4">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 12C9 12.2652 9.10536 12.5196 9.29289 12.7071L13.2929 16.7072C13.6834 17.0977 14.3166 17.0977 14.7071 16.7072C15.0977 16.3167 15.0977 15.6835 14.7071 15.293L11.4142 12L14.7071 8.70712C15.0977 8.31659 15.0977 7.68343 14.7071 7.29289C14.3166 6.90237 13.6834 6.90237 13.2929 7.29289L9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12Z" fill="#2C2C2C"/>
                  </g>
                  </svg>
                          <p class="leading-relaxed cursor-pointer mx-2 text-blue-600 hover:text-blue-600 text-sm">1</p>
                          <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600" >2</p>
                          <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 3 </p>
                          <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 4 </p>
                          <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15 12C15 11.7348 14.8946 11.4804 14.7071 11.2929L10.7071 7.2929C10.3166 6.9024 9.6834 6.9024 9.2929 7.2929C8.9024 7.6834 8.9024 8.3166 9.2929 8.7071L12.5858 12L9.2929 15.2929C8.9024 15.6834 8.9024 16.3166 9.2929 16.7071C9.6834 17.0976 10.3166 17.0976 10.7071 16.7071L14.7071 12.7071C14.8946 12.5196 15 12.2652 15 12Z" fill="#18A0FB"/>
                  </svg>
                    </div>
                    </div>
                  <style>
                  thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
                  thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}
                  tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
                  tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}
                  </style>
                <br>
            </div>
        </div>

                {{-- jenis pelanggaran --}}
                <div  x-show="activeTab===2">
                        <div class="p-6 bg-white border-b border-gray-200 w-full">
                            <div class="bg-white pb-4 px-4 rounded-md w-full">

                            <div class="w-full flex justify-end px-2 mt-2">

                                <div class="w-full sm:w-64 inline-block relative ">
                                    <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />
                                    <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                                    <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                                        <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                                    </svg>
                                    </div>
                                    <div></div>
                                </div>
                                </div>
                                <div class="overflow-x-auto mt-6 w-full">
                                    <div class="md:space-x-2 space-y-10 md:space-y-0">
                                        <button onclick="openModal('jenis-tambah')" class='bg-green-400 font-semibold text-white p-1 w-40 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2'>Tambah Data</button>
                                    </div>
                                <table class="table-auto border-collapse w-full">
                                <thead>
                                    <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">No</th>
                                    <th class="px-4 py-2 " style="background-color:#f8f8f8">Kategori</th>
                                    <th class="px-4 py-2 " style="background-color:#f8f8f8">Nama Pelanggaran</th>
                                    <th class="px-4 py-2 " style="background-color:#f8f8f8">Poin</th>
                                    <th class="px-4 py-2 " style="background-color:#f8f8f8">Opsi</th>
                                </tr>
                                </thead>
                                <tbody class="text-sm font-normal text-gray-700">
                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                    <td class="px-4 py-4">1</td>
                                    <td class="px-4 py-4">Berpakaian</td>
                                    <td class="px-4 py-4">Tidak memasukan baju</td>
                                    <td class="px-4 py-4">5</td>
                                    <td class="px-4 py-4">
                                        <div class="md:space-x-2 space-y-10 md:space-y-0">
                                            <button onclick="openModal('jenis-edit')"  class="bg-yellow-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2">Ubah</button>
                                    </div>
                                    </td>

                                    </tr>
                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-4">
                                    <td class="px-4 py-4 flex items-center">2</td>
                                    <td class="px-4 py-4">-</td>
                                    <td class="px-4 py-4">-</td>
                                    <td class="px-4 py-4">-</td>
                                    </tr>
                                    <tr class="hover:bg-gray-100  border-gray-200">
                                    <td class="px-4 py-4">3</td>
                                    <td class="px-4 py-4">-</td>
                                    <td class="px-4 py-4">-</td>
                                    <td class="px-4 py-4">-</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">

                                <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 12C9 12.2652 9.10536 12.5196 9.29289 12.7071L13.2929 16.7072C13.6834 17.0977 14.3166 17.0977 14.7071 16.7072C15.0977 16.3167 15.0977 15.6835 14.7071 15.293L11.4142 12L14.7071 8.70712C15.0977 8.31659 15.0977 7.68343 14.7071 7.29289C14.3166 6.90237 13.6834 6.90237 13.2929 7.29289L9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12Z" fill="#2C2C2C"/>
                        </g>
                        </svg>

                                <p class="leading-relaxed cursor-pointer mx-2 text-blue-600 hover:text-blue-600 text-sm">1</p>
                                <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600" >2</p>
                                <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 3 </p>
                                <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 4 </p>
                                <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 12C15 11.7348 14.8946 11.4804 14.7071 11.2929L10.7071 7.2929C10.3166 6.9024 9.6834 6.9024 9.2929 7.2929C8.9024 7.6834 8.9024 8.3166 9.2929 8.7071L12.5858 12L9.2929 15.2929C8.9024 15.6834 8.9024 16.3166 9.2929 16.7071C9.6834 17.0976 10.3166 17.0976 10.7071 16.7071L14.7071 12.7071C14.8946 12.5196 15 12.2652 15 12Z" fill="#18A0FB"/>
                        </svg>

                                </div>
                            </div>

                        <style>

                        thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
                        thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

                        tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
                        tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}


                        </style>

                        <br>
                    </div>
                </div>

            </div>

        <div  x-show="activeTab===3">
        </div>

        <div x-show="activeTab===4">
        </div>

        <div x-show="activeTab===5">
        </div>
        	<!--actual component end-->
        </div>
    </div>

    {{-- modal tambah data siswa --}}
    <div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-700">Tambah Data Siswa</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NIS</label>
                    <input
                  type="text"
                  name="NIS"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Siswa</label>
                    <input
                  type="text"
                  name="nama siswa"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3">
                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tanggal Lahir </label>
                      <input
                      type="date"
                      name="tanggl lahir"
                      placeholder=" "
                      class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Alamat </label>
                      <input
                      type="text"
                      name="alamat"
                      placeholder=" "
                      class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Jenis Kelamin</label>
                      <select class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">No Tlpn </label>
                      <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Kelas </label>
                        <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Angkatan </label>
                        <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                   </div>
                  </div>


                  <div class="grid grid-cols-1 mt-4 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Wali </label>
                    <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                  </div>
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('main-modal')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Simpan</button>
				</div>
			</div>
		</div>
	</div>

    {{-- modal edit data siswa --}}
    <div class="another-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-700">Ubah Data Siswa</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('another-modal')">
					</div>
				</div>
				<!--Body-->
				<div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NIS</label>
                    <input
                  type="text"
                  name="NIS"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Siswa</label>
                    <input
                  type="text"
                  name="nama siswa"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3">
                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tanggal Lahir </label>
                      <input
                      type="date"
                      name="tanggl lahir"
                      placeholder=" "
                      class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Alamat </label>
                      <input
                      type="text"
                      name="alamat"
                      placeholder=" "
                      class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Jenis Kelamin</label>
                      <select class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">No Tlpn </label>
                      <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Kelas </label>
                        <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Angkatan </label>
                        <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                      </div>
                  </div>

                  <div class="grid grid-cols-1 mt-4 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Wali </label>
                    <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                  </div>

				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('another-modal')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Simpan</button>
				</div>
			</div>
		</div>
	</div>

    {{-- modal tambah data pelanggaran --}}
    <div class="pelanggaran-tambah fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-700">Tambah Data Pelanggaran</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('pelanggaran-tambah')">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="grid grid-cols-1 mt-2 mx-3">

                    <div class="block">
                        <span class="text-gray-700 pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">Berpakaian</span>
                        <div class="mt-2">
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3"checked>
                              <span class="ml-2">Tidak memasukan baju</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Tidak memakai kaos</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Tidak memakai tali pinggang</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Rambut panjang tergerai (siswa putri/putra)</span>
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">

                    <div class="block">
                        <span class="text-gray-700 pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">Belajar</span>
                        <div class="mt-2">
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3"checked>
                              <span class="ml-2">Datang terlambat lebih dari 10 menit</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Tidak membawa buku sesuai jadwal</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Merokok di sekolah</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Tidak mengerjakan tugas PR</span>
                            </label>

                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">

                    <div class="block">
                        <span class="text-gray-700 pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">Sikap / Norma</span>
                        <div class="mt-2">
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3"checked>
                              <span class="ml-2">Pelecehan Seksual</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Bertindak tidak sopan</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Merusak fasilitas sekolah</span>
                            </label>
                          </div>
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                              <span class="ml-2">Membawa benda tajam</span>
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>




				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('pelanggaran-tambah')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Simpan</button>
				</div>
			</div>
		</div>
	</div>

    {{-- modal edit data pelaggaran --}}
    <div class="pelanggaran-edit fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">Ubah Data Pelanggaran</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('pelanggaran-edit')">
					</div>
				</div>
				<!--Body-->
				<div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NIS</label>
                    <input
                  type="text"
                  name="NIS"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Siswa</label>
                    <input
                  type="text"
                  name="nama siswa"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3">
                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tanggal Lahir </label>
                      <input
                      type="date"
                      name="tanggl lahir"
                      placeholder=" "
                      class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Alamat </label>
                      <input
                      type="text"
                      name="alamat"
                      placeholder=" "
                      class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Jenis Kelamin</label>
                      <select class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>

                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">No Tlpn </label>
                      <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                    </div>
                  </div>

                  <div class="grid grid-cols-1 mt-4 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Wali </label>
                    <input class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" type="text" placeholder="" />
                  </div>
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('pelanggaran-edit')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Simpan</button>
				</div>
			</div>
		</div>
	</div>

    {{-- modal sms --}}
    <div class="pelanggaran-sms fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-700">SMS Gateway</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('pelanggaran-sms')">
					</div>
				</div>
                <div class="block">
                    <span class="text-gray-700 pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200">Poin Pelanggaran Siswa</span>
                    <div class="mt-2">
                      <div>
                        <label class="inline-flex items-center">
                          <input type="checkbox" class="form-checkbox" name="checkbox" value="3"checked>
                          <span class="ml-2">Poin 25 - 49</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                          <span class="ml-2">Poin 50 - 69</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input type="checkbox" class="form-checkbox" name="checkbox" value="3">
                          <span class="ml-2">Poin 70 - 79</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <br>
				<!--Body-->
                <span class="text-gray-700 pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"><span style="color:red">*</span>Mohon perhatikan poin pelanggaran siswa sebelum mengirimkan teguran.</span>
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('pelanggaran-sms')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Kirim</button>
				</div>
			</div>
		</div>
	</div>

    {{-- modal tambah Jenis pelanggaran --}}
    <div class="jenis-tambah fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">Tambah Jenis Pelanggaran</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('jenis-tambah')">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Kategori</label>
                    <input
                  type="text"
                  name="NIS"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Siswa</label>
                    <input
                  type="text"
                  name=""
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>

                 <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Poin</label>
                    <input
                  type="number"
                  name=""
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>


				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('jenis-tambah')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Simpan</button>
				</div>
			</div>
		</div>
	</div>

    {{-- modal edit jenis pelanggaran --}}
    <div class="jenis-edit fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">Ubah Jenis Pelanggaran</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('jenis-edit')">
					</div>
				</div>
				<!--Body-->
				<div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Kategori</label>
                    <input
                  type="text"
                  name="NIS"
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200"/>
                  </div>

                  <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nama Siswa</label>
                    <input
                  type="text"
                  name=""
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>

                 <div class="grid grid-cols-1 mt-2 mx-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Poin</label>
                    <input
                  type="number"
                  name=""
                  placeholder=" "
                  class="pt-1 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-green-200" />
                 </div>
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-4">
					<button
						class="bg-red-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="modalClose('jenis-edit')">Batal</button>
					<button
						class="bg-green-400 font-semibold text-white p-1 w-20 rounded-full hover:bg-green-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" onclick="validate_form(document.getElementById('add_caretaker_form'))">Simpan</button>
				</div>
			</div>
		</div>
	</div>

    <script>
      function setup() {
        return {
          activeTab: 0,
          tabs: [
              "Data Siswa",
              "Data Pelanggaran",
              "Jenis Pelanggaran",
          ]
        };
      };
    </script>

    {{-- scrip modal baru --}}
    <script>
        all_modals = ['main-modal', 'another-modal','pelanggaran-tambah','pelanggaran-edit','pelanggaran-sms','jenis-tambah','jenis-edit']
        all_modals.forEach((modal)=>{
            const modalSelected = document.querySelector('.'+modal);
            modalSelected.classList.remove('fadeIn');
            modalSelected.classList.add('fadeOut');
            modalSelected.style.display = 'none';
        })
        const modalClose = (modal) => {
            const modalToClose = document.querySelector('.'+modal);
            modalToClose.classList.remove('fadeIn');
            modalToClose.classList.add('fadeOut');
            setTimeout(() => {
                modalToClose.style.display = 'none';
            }, 500);
        }

        const openModal = (modal) => {
            const modalToOpen = document.querySelector('.'+modal);
            modalToOpen.classList.remove('fadeOut');
            modalToOpen.classList.add('fadeIn');
            modalToOpen.style.display = 'flex';
        }

	</script>
</x-app-layout>
