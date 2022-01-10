import axios from 'axios'

const BASE_URL = 'http://localhost:8888/APILP/public/api/messages'

async function getMessages () {
  return await axios.get(BASE_URL)
}

async function getMessageSearch (search) {
  return await axios.get(`${BASE_URL}?title=${search}`)
}

function postMessage (data) {
  if (data.title !== null) {
    return axios.post(BASE_URL, data, {
      headers: {
        Authorization: 'Bearer ' + localStorage.getItem('token')
      }
    })
  }
}

async function deleteMessage (id) {
  await axios.delete(BASE_URL + '/' + id)
}

async function updateMessage (id, data) {
  return axios({
    method: 'patch',
    url: BASE_URL + '/' + id,
    data: data,
    headers: { 'Content-Type': 'application/merge-patch+json' }
  })
}

async function getMessage (id) {
  return await axios.get(BASE_URL + '/' + id)
}

export { getMessages, deleteMessage, postMessage, updateMessage, getMessage, getMessageSearch }
