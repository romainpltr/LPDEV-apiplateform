<template>
  <div class="container mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center">
      <router-link :to="{name: 'ajouter_categorie'}">
        <button type="button" class=" mx-auto my-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Ajouter une catégorie
        </button>
      </router-link>
    </div>
    <h1 class="text-center">Liste des categories : </h1>
      <div class="flex justify-center">
          <Card v-for="categorie in categories" :key="categorie.id" class="m-2 shadow-md rounded-lg">
            <template v-slot:title>
              {{ categorie.libelle }}
            </template>
            <template v-slot:body>
              Nombre de message  : {{ categorie.messages.length }}
              <CategorieMessage :categorie="categorie"/>
            </template>
            <template v-slot:footer>
                <router-link :to="{name:'modifier_categorie', params: {id: categorie.id}}">
                  <button
                    type="button"
                    class="inline-flex mx-2 my-2 items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >Modifier</button>
                </router-link>
              <button  type="button"
                       class="mx-2 my-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       @click="supprimerCategorie(categorie.id)">
                Supprimer
              </button>
            </template>
          </Card>
      </div>

  </div>
</template>

<script>
import { deleteCategorie, getCategories } from '../api/categorie'
import { deleteMessage } from '../api/message'
import Card from '../components/Card'
import CategorieMessage from '../components/CategorieMessage.vue'

export default {
  name: 'Categorie',
  components: {
    Card,
    CategorieMessage
  },
  data () {
    return {
      categories: null
    }
  },
  mounted () {
    this.actualiseCategories()
  },
  methods: {
    async supprimerCategorie (id) {
      await this.categories.forEach(async categorie => {
        if (categorie.id === id) {
          if (categorie.messages) {
            const messages = categorie.messages

            messages.forEach(message => {
              if (message) {
                deleteMessage(message.id).then(() => {
                  deleteCategorie(id)
                  this.actualiseCategories()
                })
              }
            })
          }
          await deleteCategorie(id)
          await this.actualiseCategories()
        }
      })
    },

    async actualiseCategories () {
      this.categories = await getCategories().then((response) => {
        return response.data['hydra:member']
      })
    }
  }

}
</script>
