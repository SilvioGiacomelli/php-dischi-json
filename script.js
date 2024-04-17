const { createApp } = Vue;
createApp({
  data() {
    return {
      title: 'PHP Dischi JSON',
      apiUrl: 'server.php'
    }
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl)
      .then(result => {
        console.log(result.data);
      })
    }
  },
  mounted() {
    this.getApi();
  }
}).mount('#app');