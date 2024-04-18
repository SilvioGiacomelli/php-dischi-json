const { createApp } = Vue;
createApp({
  data() {
    return {
      title: 'PHP Dischi JSON',
      apiUrl: 'server.php',
      list:[],
      newAlbum: {
        title: '',
        author: '',
        year: '',
        genre: '',
        poster: '',
      }
    }
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl)
      .then(result => {
        this.list = result.data;
      })
    },
    // funzione per rimuovere un album temopraneamente
    removeAlbum(index) {
      this.list.splice(index,1);
    },
    // funzione per aggiungere un album
    addAlbum() {
      let data = new FormData();
      data.append('title', this.newAlbum.title);
      data.append('author', this.newAlbum.author);
      data.append('year', this.newAlbum.year);
      data.append('genre', this.newAlbum.genre);
      data.append('poster', this.newAlbum.poster);
    
      // qui faccio la chiamata post
      axios.post(this.apiUrl, data)
      .then(response => {
        console.log(response.data);
        this.list.push(response.data);
        this.newAlbum = { title: '', author: '', year: '', genre: '', poster: '' };
      }) 
      .catch(error => {
        console.log(error);
      });
    }
  },
  mounted() {
    this.getApi();
  }
}).mount('#app');