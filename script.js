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
    addAlbum() {
      let data = new FormData();
      data.append('title', this.newAlbum.title);
      data.append('author', this.newAlbum.author);
      data.append('year', this.newAlbum.year);
      data.append('genre', this.newAlbum.genre);
      data.append('poster', this.newAlbum.poster);
    
      axios.post(this.apiUrl, data)
      .then(result => {
        console.log(result.data);
      }) 
    }
  },
  mounted() {
    this.getApi();
    this.addAlbum();
  }
}).mount('#app');