import { ref } from 'vue';
const dataRetrieval = ref({});
export default function search() {
  const fetch = async (route, sortBy) => {
    let token = sessionStorage.getItem("token")

    await axios.get(route,
      {
        headers: {
          'Authorization': `Bearer ${token}`
        },
        params:
        {
          'sort': sortBy
        }
      })
      .then(res => {
        dataRetrieval.value = res.data.data
      }).catch(err => {
        console.log(err)
      })
    return { dataRetrieval }
  }
  return { fetch, dataRetrieval }
}