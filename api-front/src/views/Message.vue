<template>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
    <div class="text-left">
      <label for="search" class="block text-md my-2 mx-2 font-medium text-gray-700">Rechercher :</label>
      <div class="mt-1 mx-2">
        <input name="search" v-model="search" id="search" class="py-2 p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="T....">
        <button type="button" v-on:click="find" class="mx-auto my-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Rechercher
        </button>
        <button type="button" v-on:click="actualiseMessages" class="mx-2 my-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Afficher tous les messages
        </button>
      </div>
    </div>
    <h1 class="text-center my-2 ">Liste des messages</h1>
    <router-link :to="{name: 'ajouter_message'}">
      <button type="button" class="mx-2 my-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Ajouter un message
      </button>
    </router-link>
    <div class="flex">
      <Card v-for="message in messages" :key="message.id" class="m-2 shadow-md rounded-lg">
        <template v-slot:title>
          {{message.title}}
        </template>
        <template v-slot:body>
          <p>{{message.message}}</p>
          <div v-if="message.category.data">Catégorie : {{message.category.data.libelle}}</div>
        </template>
        <template v-slot:footer>
            Publié le {{ formatDate(moment(message.publishedAt).format('LLLL'))[0] }}
            {{ formatDate(moment(message.publishedAt).format('LLLL'))[1] }}
            {{ formatDate(moment(message.publishedAt).format('LLLL'))[2] }}
            {{ formatDate(moment(message.publishedAt).format('LLLL'))[3] }}
            à
            {{ formatDate(moment(message.publishedAt).format('LLLL'))[4] }}
            par
          <div v-if="message.author.data">{{ message.author.data.username }}</div>
          <button
            type="button"
            class="inline-flex mx-2 my-2 items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            @click="supprimerMessage(message.id)">
            Supprimer
          </button>
          <button type="button" class="mx-2 my-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <router-link style="text-decoration: none;" :to="{name:'modifier_message', params: {id: message.id}}">
              Modifier
            </router-link>
          </button>
        </template>
        </Card>
    </div>
  </div>
</template>

<script>
import { deleteMessage, getMessages, getMessageSearch } from '../api/message'
import { getUser } from '../api/user'
import moment from 'moment'
import Card from '../components/Card'
import { getCategorie } from '../api/categorie'

export default {
  name: 'Message',
  components: {
    Card
  },
  data () {
    return {
      messages: null,
      search: null
    }
  },
  async mounted () {
    this.actualiseMessages()
  },
  methods: {
    async actualiseMessages () {
      this.messages = await getMessages().then((response) => {
        const data = response.data['hydra:member']
        data.forEach(async (message) => {
          if (message.author) {
            message.author = await getUser(message.author.slice((message.author.lastIndexOf('/') - message.author.length) + 1))
          }
          if (message.category) {
            message.category = await getCategorie(message.category.slice((message.category.lastIndexOf('/') - message.category.length) + 1))
          }
        })
        return data
      })
    },
    moment (date) {
      moment.locale('fr')
      return moment(date)
    },
    formatDate (date) {
      const newDate = date.split(' ')
      return newDate
    },
    async find () {
      this.messages = await getMessageSearch(this.search).then((response) => {
        const data = response.data['hydra:member']
        data.forEach(async (message) => {
          if (message.author) {
            message.author = await getUser(message.author.slice((message.author.lastIndexOf('/') - message.author.length) + 1))
          }
          if (message.category) {
            message.category = await getCategorie(message.category.slice((message.category.lastIndexOf('/') - message.category.length) + 1))
          }
        })
        return data
      })
    },
    async supprimerMessage (id) {
      await deleteMessage(id).then(() => {
        this.actualiseMessages()
      })
    }

  }

}
</script>
