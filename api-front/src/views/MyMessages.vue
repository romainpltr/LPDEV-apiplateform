<template>
  <div class="container mx-auto sm:px-6 lg:px-8">
      <h1 class="text-center my-2">Liste de mes messages</h1>
      <div class="flex flex-row justify-center">
        <Card v-for="(message,index) in messages" :key="index" class="mx-2">
              <template v-slot:title>
                {{ message.title }}
              </template>
              <template v-slot:body>
                {{ message.message }}
                <p>{{ formatDate(moment(message.publishedAt).format('DD/MM/YYYY'))[0] }} à {{ formatDate(moment(message.publishedAt).format('LLLL'))[4] }}</p>
                Auteur : {{ user[2] }}
              </template>
        </Card>
      </div>
  </div>
</template>

<script>
import { deleteMessage } from '../api/message'
import moment from 'moment'
import { getUserIdAndMsg } from '../api/user'
// import { getCategorie } from '../api/categorie'
import Card from '../components/Card'

export default {
  name: 'Message',
  components: {
    Card
  },
  mounted () {
    this.actualiseMessages()
  },
  data () {
    return {
      messages: [],
      user: null
    }
  },

  methods: {
    async actualiseMessages () {
      this.user = await getUserIdAndMsg().then(async (response) => {
        return response.data
      })

      await this.user[1].forEach(async (msg) => {
        this.messages.push(msg)
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

    async supprimerMessage (id) {
      await deleteMessage(id).then(() => {
        this.actualiseMessages()
      })
    }

  }

}
</script>
