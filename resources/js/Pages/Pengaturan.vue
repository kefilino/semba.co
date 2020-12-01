<template>
  <app-layout>
    <div class="py-12 w-full">
      <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-2 text-2xl text-center">
              Pengaturan
            </div>
            <div class="flex flex-col">
              <div class="flex justify-between mt-4">
                <label for="lang">Bahasa (Language)</label>
                <select name="lang" id="lang">
                  <option value="ID">Indonesia</option>
                  <option value="EN">English</option>
                </select>
              </div>
              <div class="flex justify-between mt-4">
                <label for="subscription">Berlangganan Email</label>
                <input type="checkbox" name="subscription" value="subscribed">
              </div>
              <div class="flex justify-between mt-4">
                <label for="notification">Notifikasi</label>
                <input type="checkbox" name="notification" value="notified">
              </div>
              <div class="flex justify-between mt-4" v-if="!$page.user.is_admin">
                <label for="delete_account">Hapus Akun</label>
                <button id="delete_account" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
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