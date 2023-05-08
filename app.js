
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
  methods: {
    addTask() {
        console.log('add');
        const data = {
            newTask: this.newTask
        }
        axios.post(
            'postTasks.php',
             data,
              {
                headers: {'Content-Type': 'multipart/form-data'}
              })
              .then(response => {
                console.log(response)
                this.tasks = response.data
              })
              .catch(error => {
                console.error(error.message)
              })
    }
  },
  mounted(){
    axios
    .get(this.api_url)
    .then(response => {
       console.log(response)
       this.tasks = response.data 
    })
    .catch(error => {
        console.error(error.message)
    })
  }
}).mount('#app')