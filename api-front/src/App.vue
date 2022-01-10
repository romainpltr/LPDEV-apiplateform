<template>
  <div>
  <header class="sticky top-0 bg-indigo-800 shadow-md sticky">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
      <div class="w-full py-6 flex items-center justify-between border-b border-indigo-300 lg:border-none">
        <div class="flex items-center">
          <div class="hidden ml-10 space-x-8 lg:block">
            <router-link to="/" class="text-base font-medium text-white hover:text-indigo-50" key="Solutions">Accueil</router-link>
            <router-link v-if="logged && isLogged()" class="text-base font-medium text-white hover:text-indigo-50" to="/categorie">Categories</router-link>
            <router-link v-if="logged && isLogged()" class="text-base font-medium text-white hover:text-indigo-50"  to="/messages">Tous les Messages</router-link>
            <router-link v-if="logged && isLogged()" class="text-base font-medium text-white hover:text-indigo-50" to="/my-messages">Mes messages</router-link>
          </div>
        </div>
        <div class="ml-10 space-x-4">
          <div v-if="isLogged()">
            <router-link v-if="logged && isLogged()" @click.native="logoutUser" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75" to="/login">Déconnexion</router-link>
          </div>
          <router-link v-if="!isLogged()" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75" to="/login">Connexion</router-link>
          <router-link v-if="!isLogged()" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75" to="/signin">Inscription</router-link>
        </div>
      </div>
    </nav>
  </header>
  <router-view/>
  </div>
</template>

<script>
// import ListNote from './components/ListNote.vue'
import { logout } from './api/user'

export default {
  // components: { ListNote },
  name: 'App',
  data () {
    return {
      logged: false
    }
  },
  methods: {
    async logoutUser () {
      this.logged = false
      await logout()
    },
    isLogged () {
      this.logged = true
      return !!localStorage.token
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

.link {
  margin: 3px;
}
</style>
