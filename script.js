  const { createApp } = Vue

  createApp({
    data() {
      return {
          message: 'Hello Vue!',
          dati: [],
          userTask: {
              text: "",
              done:"",
          },
          
      }
      },
      methods: {
          getData() {
              axios.get('./server.php').then((res) => {
                  
                    console.log(res)
                  this.dati = res.data
                  console.log(this.dati)
             
                  
            })    
          },
          addTask() {
           
              console.log(this.userTask.text)
              
              let data = new FormData();
              data.append('text', this.userTask.text)
              axios.post('./server.php', data).then((res) => {
                  console.log(res.data)
              })
          },
      },
      mounted() {
          this.getData();
      },
  }).mount('#app')