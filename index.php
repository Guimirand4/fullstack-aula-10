<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Requisição assíncrona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Requisição assíncrona</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">  
            <label for="a" class="form-label">a</label>
            <input type="text" name="a" id="a" class="form-control">
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12"> 
            <label for="b" class="form-label">b</label>
            <input type="text" name="b" id="b" class="form-control">
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
            <label for="b" class="form-label">c</label>
            <input type="text" name="c" id="c" class="form-control">
            </div>
        </div>

        <div class="row mt-5">
            <div class="d-grid gap-2 col-6 mx-auto" >
                 <button class="btn btn-outline-info">Calcular</button>
            </div>
        </div>

        <p id="resultado"></p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>