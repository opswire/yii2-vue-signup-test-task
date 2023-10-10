<script>
import axios from "axios";

export default {
  data() {
    return {
      user: {
        email: '',
        password: '',
        last_name: '',
        first_name: '',
      },
      registrationMessage: '',
      registrationError: '',
    };
  },
  methods: {
    registerUser() {
      axios.post('http://localhost:8080/users', this.user)
          .then(() => {
            this.registrationMessage = "success!";
          })
          .catch(error => {
            this.registrationMessage = error;
            console.error(error);
          });
    },
  },
};
</script>

<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="text-center text-3xl font-extrabold text-gray-900">
          Sign Up
        </h2>
      </div>
      <form class="mt-8 space-y-6" @submit.prevent="registerUser">
        <div class="shadow-sm -space-y-px">
          <div>
            <label for="email" class="sr-only">Email</label>
            <input
                v-model="user.email"
                id="email"
                name="email"
                type="email"
                autocomplete="email"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Email"
            />
          </div>
          <div>
            <label for="email" class="sr-only">Password</label>
            <input
                v-model="user.password"
                id="password"
                name="password"
                type="password"
                autocomplete="password"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Password"
            />
          </div>
          <div>
            <label for="last_name" class="sr-only">Last Name</label>
            <input
                v-model="user.last_name"
                id="last_name"
                name="last_name"
                type="text"
                autocomplete="last_name"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Last Name"
            />
          </div>
          <div>
            <label for="first_name" class="sr-only">First Name</label>
            <input
                v-model="user.first_name"
                id="first_name"
                name="first_name"
                type="text"
                autocomplete="first_name"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="First Name"
            />
          </div>
        </div>

        <div>
          <button
              type="submit"
              class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            Register
          </button>
        </div>
      </form>
      <div v-if="registrationMessage" class="mt-3 text-center text-green-500">{{ registrationMessage }}</div>
      <div v-if="registrationError" class="mt-3 text-center text-red-500">{{ registrationError }}</div>
    </div>
  </div>
</template>
