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
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>PHP Dischi JSON</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="container-fluid text-center">
      <a class="navbar-brand" href="#">PHP Dischi</a>
    </div>
  </nav>
  <div id="app" class="container mt-5">
    <h1 class="text-center mb-4">{{ title }}</h1>
    <div class="text-white d-flex justify-content-center">

      <div class="d-flex flex-column mx-2">
        <label class="form-label" for="">Title</label>
        <input class="form-control" type="text" name="">
      </div>

      <div class="d-flex flex-column mx-2">
        <label class="form-label" for="">Author</label>
        <input class="form-control" type="text" name="">
      </div>

      <div class="d-flex flex-column mx-2">
        <label class="form-label" for="">Year</label>
        <input class="form-control" type="text" name="">
      </div>

      <div class="d-flex flex-column mx-2">
        <label class="form-label" for="">Genre</label>
        <input class="form-control" type="text" name="">
      </div>

      <div class=" d-flex align-items-end">
        <button class="btn btn-success ">Aggiungi</button>
      </div>
    </div>
    <div class="row">
      <div v-for="(album, index) in list" :key="index" class="col-md-4">
        <div class="card">
          <img class="card-img-top" :src="album.poster" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ album.title }}</h5>
            <p class="card-text author">{{ album.author }}</p>
            <p class="card-text">{{ album.genre }}</p>
            <p class="card-text">{{ album.year }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js">
  </script>
</body>

</html>