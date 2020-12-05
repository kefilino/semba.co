<template>
  <app-layout>
    <div class="py-12">
      <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div
            class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
            role="alert"
            v-if="$page.flash.message"
          >
            <div class="flex">
              <div>
                <p class="text-sm">{{ $page.flash.message }}</p>
              </div>
            </div>
          </div>

          <button
            v-if="!$page.user.is_admin"
            @click="openModal()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3"
          >
            Buat Permintaan Baru
          </button>

          <table class="table-fixed w-full">
            <thead>
              <tr class="bg-gray-100">
                <th class="px-4 py-2 w-20">ID</th>

                <th class="px-4 py-2">Bantuan</th>

                <th class="px-4 py-2">Pesan</th>

                <th v-if="$page.user.is_admin" class="px-4 py-2">Nama Peminta</th>

                <th v-if="$page.user.is_admin" class="px-4 py-2">KK Peminta</th>

                <th v-if="!$page.user.is_admin" class="px-4 py-2">Status</th>

                <th class="px-4 py-2">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="row in data">
                <td class="border px-4 py-2 text-center">{{ row.id }}</td>

                <td class="border px-4 py-2">{{ row.nama_bantuan }}</td>

                <td class="border px-4 py-2">{{ row.pesan }}</td>

                <td v-if="$page.user.is_admin" class="border px-4 py-2">{{ row.name }}</td>

                <td v-if="$page.user.is_admin" class="border px-4 py-2">{{ row.kk }}</td>

                <td v-if="!$page.user.is_admin" class="border px-4 py-2">
                  <label for="status" v-if="row.status === 1">Diterima</label>
                  <label for="status" v-if="row.status === 0">Ditolak</label>
                  <label for="status" v-if="row.status === null">Diproses</label>
                </td>

                <td class="flex flex-wrap border px-4 py-2 sm:space-x-1 justify-center">
                  <button v-if="$page.user.is_admin && row.status === null"
                    @click="approve(row)"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                  >
                    Terima
                  </button>
                  <button v-if="$page.user.is_admin && row.status === null"
                    @click="disapprove(row)"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                  >
                    Tolak
                  </button>
                  <label for="status" v-if="$page.user.is_admin && row.status === 1">
                    Permintaan Diterima
                  </label>
                  <label for="status" v-if="$page.user.is_admin && row.status === 0">
                    Permintaan Ditolak
                  </label>

                  <button v-if="!$page.user.is_admin && row.status === null"
                    @click="edit(row)"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 rounded"
                  >
                    Edit
                  </button>
                  <button v-if="!$page.user.is_admin && row.status === null"
                    @click="deleteRow(row)"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 rounded"
                  >
                    Delete
                  </button>
                  <label for="status" v-if="!$page.user.is_admin && row.status !== null">Tidak Tersedia.</label>
                </td>
              </tr>
            </tbody>
          </table>

          <div
            class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400"
            v-if="isOpen"
          >
            <div
              class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
            >
              <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
              </div>

              <!-- This element is to trick the browser into centering the modal contents. -->

              <span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"
              ></span
              >​

              <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-headline"
              >
                <form>
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                      <div class="mb-4">
                        <label
                          for="exampleFormControlInput1"
                          class="block text-gray-700 text-sm font-bold mb-2"
                          >ID Bantuan:</label
                        >

                        <input
                          type="text"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          id="exampleFormControlInput1"
                          placeholder="Enter Title"
                          v-model="form.id_bantuan"
                        />

                        <div v-if="$page.errors.title" class="text-red-500">
                          {{ $page.errors.title[0] }}
                        </div>
                      </div>

                      <div class="mb-4">
                        <label
                          for="exampleFormControlInput2"
                          class="block text-gray-700 text-sm font-bold mb-2"
                          >Keterangan Permintaan:</label
                        >

                        <textarea
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          id="exampleFormControlInput2"
                          v-model="form.pesan"
                          placeholder="Enter Body"
                        ></textarea>

                        <div v-if="$page.errors.body" class="text-red-500">
                          {{ $page.errors.body[0] }}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                  >
                    <span
                      class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                    >
                      <button
                        wire:click.prevent="store()"
                        type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                        v-show="!editMode"
                        @click="save(form)"
                      >
                        Save
                      </button>
                    </span>

                    <span
                      class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                    >
                      <button
                        wire:click.prevent="store()"
                        type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                        v-show="editMode"
                        @click="update(form)"
                      >
                        Update
                      </button>
                    </span>

                    <span
                      class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto"
                    >
                      <button
                        @click="closeModal()"
                        type="button"
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                      >
                        Cancel
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";

import Welcome from "./../Jetstream/Welcome";

export default {
  components: {
    AppLayout,

    Welcome,
  },

  props: ["data", "errors"],

  data() {
    return {
      editMode: false,

      isOpen: false,

      form: {
        id_peminta: null,
        pesan: null,
      },
      
      count: 0,
    };
  },

  methods: {
    openModal: function () {
      this.isOpen = true;
    },

    closeModal: function () {
      this.isOpen = false;

      this.reset();

      this.editMode = false;
    },

    reset: function () {
      this.form = {
        id_peminta: null,
        pesan: null,
      };
    },

    save: function (data) {
      data.id_peminta = this.$page.user.id;
      this.$inertia.post("/permintaan", data);

      this.reset();

      this.closeModal();

      this.editMode = false;
    },

    approve: function (data) {
      data._method = "PUT";

      this.$inertia.put("/permintaan/accept/" + data.id);

      this.reset();

      this.closeModal();
    },

    disapprove: function (data) {
      data._method = "PUT";

      this.$inertia.put("/permintaan/reject/" + data.id);

      this.reset();

      this.closeModal();
    },

    edit: function (data) {
      this.form = Object.assign({}, data, data);

      this.editMode = true;

      this.openModal();
    },

    update: function (data) {
      data._method = "PUT";

      this.$inertia.post("/permintaan/" + data.id, data);

      this.reset();

      this.closeModal();
    },

    deleteRow: function (data) {
      if (!confirm("Apakah anda yakin ingin menghapus permintaan?")) return;

      data._method = "DELETE";

      this.$inertia.post("/permintaan/" + data.id, data);

      this.reset();

      this.closeModal();
    },
  },
};
</script>