import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Categorie from '../views/Categorie.vue'
import Message from '../views/Message.vue'
import CategorieMessage from '../components/CategorieMessage.vue'
import NouvelleCategorie from '../components/NouvelleCategorie.vue'
import NouveauMessage from '../components/NouveauMessage.vue'
import Login from '../components/Login.vue'
import MyMessages from '../views/MyMessages'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: 'ajouter_categorie',
    name: 'ajouter_categorie',
    component: NouvelleCategorie,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: 'modifier_categorie/:id',
    name: 'modifier_categorie',
    component: NouvelleCategorie,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/categorie',
    name: 'Categorie',
    component: Categorie,
    children: [
      {
        path: ':id',
        name: 'categorie_message',
        component: CategorieMessage,
        meta: {
          requiresAuth: true
        }
      }
    ]
  },
  {
    path: '/messages',
    name: 'Messages',
    component: Message,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/my-messages',
    name: 'MyMessages',
    component: MyMessages,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/ajouter_message',
    name: 'ajouter_message',
    component: NouveauMessage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: 'modifier_message/:id',
    name: 'modifier_message',
    component: NouveauMessage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/login',
    name: 'login',
    component: Login
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
