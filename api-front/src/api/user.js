import axios from 'axios'
import router from '../router'

const BASE_URL = 'http://localhost:8888/APILP/public/'

async function login (email, password) {
  return await axios({
    url: BASE_URL + 'authentication_token',
    data: { email: email, password: password },
    method: 'POST'
  }) // username et password proviennent du formulaire
    .then((resp) => {
      const token = resp.data.token
      const userData = atob(resp.data.token.split('.')[1]) // on récupère les données de l'utilisateur, par défaut, login, rôles
      localStorage.setItem('user', userData)
      localStorage.setItem('token', token)
      router.push('/')
      console.info('CONNEXION SUCCESS')
      return userData
    })
    .catch((err) => {
      localStorage.removeItem('token') // if the request fails, remove any possible user token if possible
      return err
    })
}

async function logout () {
  localStorage.removeItem('token') // if the request fails, remove any possible user token if possible
}

async function getUserIdAndMsg (id) {
  return await axios.get(BASE_URL + 'api/me', {
    headers: {
      Authorization: 'Bearer ' + localStorage.getItem('token')
    }
  })
}

async function getUser (id) {
  return await axios.get(BASE_URL + 'api/users/' + id)
}

export { login, logout, getUser, getUserIdAndMsg }
