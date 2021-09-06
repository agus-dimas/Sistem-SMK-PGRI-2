<x-app-layout>
    <x-slot name="title">
        admin
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin') }}
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
        <div  x-show="activeTab===0" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <br>
                <h2 class="text-center">Visi</h2>
                <br>
                <h4  class=" text-center fst-italic ">“Terwujudnya Sikap dan Prilaku Kewirahusahaan Melalui Penerapan Pola Manajemen Partisipatif yang Berpotensi Pada Pandayaguna <br> Teknologi Informasi yang Berakses Global“</h4>
                <br>
               <div class="border-bottom border border-light"></div>

                <br>
                <h2 class="container text-center">Misi </h2>
                <br>
                    <p class="col-md-10 ms-auto fs-6 " >
                        1.  Menumbuhkembangkan sikap kewirahusaan setiap tamatan sebagai cerminan penguasaan kompetensi untuk bekal hidup secara mandiri. <br>
                        2.  Meningkatkan kompetensi pendidikan dan tenaga kependidikan, serta seluruh peserta didik baik secara internal maupun eksternal. <br>
                        3.  Menumbuhkan penggunaan teknologi informasi yang berakses global.<br>
                    </p>


                </div>
            </div>
        </div>
			<div x-show="activeTab===1">Tambah Data User</div>
	</div>
	<!--actual component end-->
</div>

<script>
	function setup() {
    return {
      activeTab: 0,
      tabs: [
          "Data Pengguna",
          "Tambah Data Pengguna"
      ]
    };
  };
</script>
    </div>
</x-app-layout>
