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
                  
                    console.log(res.data)
                  this.dati = res.data
                  console.log(this.dati)
             
                  
            })    
          },
          addTask(string) {
              console.log(string)
              axios.post('./server.php', string, { Headers: { 'Content-Type' :  'multipart/form-data' } }).then((res) => {
                  console.log('fatto')
              })
          },
mounted() {
    getData() 
},

      },
  }).mount('#app')