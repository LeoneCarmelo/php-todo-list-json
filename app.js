const { createApp } = Vue
createApp({
  data() {
    return {
      done: false,
      message: 'Todo List',
      newTask: '',//Data to send to the API
      tasks: null,//This property will receive all the data from the API Get and from the API Post
      api_url: 'API/GET/getTasks.php'//Url of the API Get
    }
  },
  methods: {
    addTask() { //To add a new task we make a post call to the API Post 
      console.log('add');
      const data = {
        newTask: this.newTask,//Data to send to the API Post
      }
      axios.post(
        'API/POST/postTasks.php',//API Post url
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        })
        .then(response => {
          console.log(response)
          this.tasks = response.data //Save the data received from API Post
        })
        .catch(error => {
          console.error(error.message)
        })
      this.newTask = ''
    },
    removeTask(index) {
      const data = {
        index: index
      }
      axios.post(
        'API/POST/postRemoveTask.php',
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }
      )
        .then(response => {
          this.tasks = response.data
        })
        .catch(error => {
          console.error(error.message)
        })
    },
    cutTask(index) {
      const data = {
        index: index
      }
      axios.post(
        'API/POST/postCutTask.php',
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }
      )
        .then(response => {
          this.tasks = response.data
        })
        .catch(error => {
          console.error(error.message)
        })
    }
  },
  mounted() {
    //Call the API Get
    axios
      .get(this.api_url)
      .then(response => {
        console.log(response)
        this.tasks = response.data //Save the data received from API Get
      })
      .catch(error => {
        console.error(error.message)
      })
  }
}).mount('#app')