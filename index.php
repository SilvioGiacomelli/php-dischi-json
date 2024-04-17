<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>PHP Dischi JSON</title>
</head>

<body>
  <div id="app">
    <h1> {{title}} </h1>
    <div v-for="(album, index) in list" :key=index class="card" style="width: 18rem;">
      <img class="card-img-top" :src="album.poster" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{album.title}}</h5>
        <p class="card-text">{{album.author}}</p>
        <p class="card-text">{{album.genre}}</p>
        <p class="card-text">{{album.year}}</p>
      </div>
    </div>
  </div>
  <script src="script.js">
  </script>
</body>

</html>