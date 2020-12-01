<template>
  <app-layout>
    <div class="py-12 w-full">
      <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-2 text-2xl text-center">
              Berita Sembaco
            </div>
            <article v-for="row in data">
              <h2>{{ row.judul}} </h2>
              <!-- <img src="{{ row.foto_path }}" alt="Foto Berita"> -->
              <h4>Oleh {{row.penulis}} </h4>
              <h6> {{row.timestamp}} </h6>
              <p>{{ row.isi}} </p>
            </article>
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