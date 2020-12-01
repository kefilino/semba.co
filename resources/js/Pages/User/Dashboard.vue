<template>
  <app-layout>
    <div class="py-12 w-full">
      <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-2 text-2xl">
              Permintaan Anda
            </div>              
            <div class="flex justify-start space-x-4 overscroll-auto mt-2">
              <div class="container bg-gray-400 sm:rounded-lg w-48 h-48 text-center">
                Permintaan 1
              </div>
              <div class="container bg-blue-400 sm:rounded-lg w-48 h-48 text-center">
                Permintaan 2
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:mt-8 sm:rounded-lg w-full">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-2 text-2xl">
              Berita Semba.co
            </div>              
            <div class="flex justify-start space-x-4 overscroll-auto mt-2">
              <div class="container bg-yellow-400 sm:rounded-lg w-48 h-48 text-center">
                Berita 1
              </div>
              <div class="container bg-red-400 sm:rounded-lg w-48 h-48 text-center">
                Berita 2
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
};
</script>
