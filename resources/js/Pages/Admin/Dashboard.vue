<template>
  <app-layout>
    <div class="py-12 w-full">
      <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-2 text-2xl text-center">
              Selamat Datang Kembali, Admin!
            </div>              
            <div class="flex justify-around space-x-4 overscroll-auto mt-2">
              <div class="container bg-gray-400 sm:rounded-lg w-1/3 h-48 text-center">
                <article class="">{{ data.jml_permintaan }}</article>
                <label for="jml_permintaan">Jumlah Permintaan</label>
              </div>
              <div class="container bg-blue-400 sm:rounded-lg w-1/3 h-48 text-center">
                <article class="">{{ data.jml_bantuan }}</article>
                <label for="jml_permintaan">Jenis Sembako</label>
              </div>
            </div>
            <div class="flex justify-around overscroll-auto mt-4">
              <div class="container bg-blue-400 sm:rounded-lg w-1/3 h-48 text-center">
                <article class="">{{ data.jml_berita }}</article>
                <label for="jml_permintaan">Jenis Berita</label>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";

export default {
  components: {
    AppLayout,
    Welcome,
  },

  props: ["data", "errors"],
};
</script>