new Vue({
  el: '#app',
  data: {
    discs: [],
    urlApi: location.href + 'api.php',
  },
  created() {
    axios.get(this.urlApi)
    .then(axResult => {
      console.log(axResult);
      this.discs = axResult.data
    });
  }
}) 