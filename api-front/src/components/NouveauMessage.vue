<template>
    <div>
      <div v-if="confirm && this.$route.name === 'modifier_message'">
        Le message a bien été modifié
      </div>
      <div v-else-if="confirm && this.$route.name === 'ajouter'">
        Le nouveau message a bien été ajouté
      </div>
      <div v-if="errorMessage">
        <error-label :errorMessage="this.errorMessage" />
      </div>
        <div>
          <label for="title">Titre</label>
          <input type="text" name="title" id="title" v-model="title"/>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="" id="message" cols="30" rows="10" v-model="message">
          </textarea>
        </div>
        <label for="pet-select">Choisissez une catégorie</label>

        <select v-model="selected"  name="pets"  id="pet-select">
          <option v-for="categorie in categories" :key="categorie.id" :value="categorie.id"> {{categorie.libelle}} </option>
        </select>

        <div v-if="this.$route.name === 'modifier_message'">
          <button @click="modifierMessage">Modifier</button>
        </div>
        <div v-else>
          <button @click="ajoutMessage">Ajouter</button>
        </div>

    </div>
</template>
<script>
import { getCategorie, getCategories } from '../api/categorie'
import { postMessage, updateMessage, getMessage } from '../api/message'
import { getUser, getUserIdAndMsg } from '../api/user'
import ErrorLabel from './ErrorLabel.vue'

export default {
  components: { ErrorLabel },
  name: 'NouveauMessage',
  data () {
    return {
      title: '',
      message: '',
      author: '',
      categories: {},
      category: {},
      selected: '',
      messages: {},
      confirm: false,
      errorMessage: ''
    }
  },
  async mounted () {
    this.categories = await getCategories().then((response) => {
      return response.data['hydra:member']
    })
    if (this.$route.name === 'modifier_message') {
      this.messages = await getMessage(this.$route.params.id).then((response) => {
        return response.data
      })
      this.title = this.messages.title
      this.message = this.messages.message
      this.selected = parseInt(this.messages.category.slice(-1))
    }
  },

  methods: {
    async ajoutMessage () {
      const id = await getUserIdAndMsg()
      this.author = await getUser(id.data[0])
      await this.getCategorieWithId().then((data) => {
        postMessage({
          title: this.title,
          publishDate: new Date(),
          message: this.message,
          category: data,
          author: this.author.data['@id']
        }).then((message) => {
          this.confirm = true
          this.$router.push('/messages')
        })
      })
    },
    async modifierMessage () {
      const id = await getUserIdAndMsg()
      this.author = await getUser(id.data[0])
      await this.getCategorieWithId().then((data) => {
        updateMessage(this.$route.params.id, {
          title: this.title,
          publishedAt: new Date(),
          message: this.message,
          category: data,
          author: this.author.data['@id']
        })
      }).then(() => {
        this.confirm = true
        this.$router.push('/messages')
      })
    },

    async getCategorieWithId () {
      return await getCategorie(this.selected).then((response) => {
        return response.data['@id']
      })
    }
  }
}
</script>
<style scoped>
</style>
