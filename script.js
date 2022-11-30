  const { createApp } = Vue

  createApp({
    data() {
      return {
          message: 'Hello Vue!',
          dati: [],
          userTask:'',
          
      }
      },
      methods: {
          getData() {
              axios.get('./server.php').then((res) => {
                  
                  this.dati = res.data
                  console.log(this.dati)
                  console.log(this.userTask)
                  
            })    
          },
          addTask(string) {
              console.log(string)
              axios.post('./server.php', this.userTask, { Headers: { 'Content-Type' :  'multipart/form-data' } }).then((res) => {
                  console.log('fatto')
              })
          },

      },
  }).mount('#app')