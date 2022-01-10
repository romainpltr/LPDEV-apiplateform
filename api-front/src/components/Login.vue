<template
>
    <div
      v-if="!isLogged()">
      <div class="flex justify-center items-center h-screen ">
        <div class="shadow-md p-2 border m-auto border-gray-200 content-center rounded-md w-1/3">
        <h2>Se connecter</h2>
          <div class="container mx-auto sm:px-10 lg:px-10">
            <label for="email" class="block text-sm text-left font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm p-2 border border-gray-300 rounded-md" v-model="email" placeholder="you@example.com">
            </div>
          </div>
          <div class="container mx-auto sm:px-10 lg:px-10 mt-2">
            <label for="password" class="block text-sm text-left font-medium text-gray-700">Password</label>
            <input name="password" placeholder="password" type="password" v-model="password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm p-2 border border-gray-300 rounded-md" />
          </div>
          <div class="block align-center justify-center ">
            <p v-if="message" class="bg-red-500 inline-block rounded-md py-1 px-3 text-white my-2 shadow-sm">{{ message }}</p>
            </div>
            <button type="button" class="m-2 inline-flex items-center px-4 py-2 border border-transparent text-md font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="loginUser">Connexion</button>
          </div>
        </div>
      </div>
</template>
<script>
import { login } from '../api/user'

export default {
  name: 'Note',
  data () {
    return {
      email: '',
      password: '',
      message: ''
    }
  },
  methods: {
    async loginUser () {
      await login(this.email, this.password).then((response) => {
        if (localStorage.token) {
          this.message = 'Vous êtes connecté'
        } else {
          this.message = 'Vous n\'êtes pas connecté'
        }
      })
    },
    isLogged: () => {

    }
  }
}
</script>
<style scoped>
</style>
