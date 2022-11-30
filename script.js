  const { createApp } = Vue

  createApp({
    data() {
      return {
          message: 'Hello Vue!',
          dati: [],
          userTask: {
              text: "",
              done:"",
          }
          
      }
      },
      methods: {
          getData() {
              axios.get('./server.php').then((res) => {
                  
                    console.log(res.data)
                  this.dati = res.data
                  console.log(this.dati)
             
                  
            })    
          },
          addTask() {
              console.log(this.userTask.text)
              axios.post('./server.php', this.userTask.text, { Headers: { 'Content-Type' :  'multipart/form-data' } }).then((res) => {
                  console.log(res.data)
              })
          },
mounted() {
    getData() 
          },
created() {
    getData() 
},

      },
  }).mount('#app')