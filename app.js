import axios from "axios"
const { createApp } = Vue
createApp({
  data() {
    return {
      message: 'Todo List',
      newTask:'',
      tasks: null,
      api_url: 'getTasks.php'
    }
  },
  mounted(){
    axios
    .get(this.api_url)
    .then(response => {
       console.log(response) 
    })
    .catch(error => {
        console.error(error.message)
    })
  }
}).mount('#app')