new Vue({
  el: '#app',
  data: {
    discs: [],
    urlApi: location.href + 'api/discs.php',
    urlGenres: location.href + 'api/genres.php',
    genre: 'all',
    genres: [],
  },
  created() {
    axios.get(this.urlApi)
    .then(axResult => this.discs = axResult.data);

    axios.get(this.urlGenres)
      .then(axResult => this.genres = axResult.data);
  },
  methods: {
    getList() {
      axios
        .get(this.urlApi, {
          params: {
            genre: this.genre,
          },
        })
        .then((axResult) => {
          console.log(axResult.data);
          this.discs = axResult.data;
        });
    },
  },
}); 