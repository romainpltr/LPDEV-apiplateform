<template>
  <div v-if="categories">
      <div class="flex justify-between" v-for="message in categories.messages" :key="message.id">
        <h3 class="mr-2"> {{ message.title }} </h3>
         {{ formatDate(moment(message.publishedAt).format('DD/MM/YYYY'))[0] }}
            à
            {{ formatDate(moment(message.publishedAt).format('LLLL'))[4] }}
      </div>
    </div>
</template>
<script>
import { getCategorie } from '../api/categorie'
import moment from 'moment'

export default {
  name: 'CategorieMessage',
  props: ['categorie'],
  data () {
    return {
      categories: null
    }
  },
  watch: {
    $route () {
      this.actualiseCategorie()
    }
  },
  mounted () {
    this.actualiseCategorie()
  },
  methods: {
    async actualiseCategorie () {
      this.categories = await getCategorie(this.categorie.id).then((response) => {
        return response.data
      })
    },
    moment (date) {
      moment.locale('fr')
      return moment(date)
    },
    formatDate (date) {
      const newDate = date.split(' ')
      return newDate
    }

  }
}
</script>
<style scoped>
</style>
