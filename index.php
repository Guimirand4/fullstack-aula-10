<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Requisição Assíncrona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #resultado {
            border: 1px solid #17a2b8;
            background-color: #e9f7fa;
            color: #0c5460;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            max-width: 400px;
            margin: 20px auto 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Requisição Assíncrona</h1>

        <div class="row mb-3">
            <div class="col-lg-4 col-md-12 col-sm-12">  
                <label for="a" class="form-label">Valor de a</label>
                <input type="text" name="a" id="a" class="form-control">
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12"> 
                <label for="b" class="form-label">Valor de b</label>
                <input type="text" name="b" id="b" class="form-control">
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <label for="c" class="form-label">Valor de c</label>
                <input type="text" name="c" id="c" class="form-control">
            </div>
        </div>

        <div class="row mt-4">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button onclick="calcularDelta();" class="btn btn-outline-info">Calcular</button>
            </div>
        </div>

        <p id="resultado" class="text-center mt-4"></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function calcularDelta(){
            const a = document.getElementById("a").value;
            const b = document.getElementById("b").value;
            const c = document.getElementById("c").value;

            const payload = { a, b, c };
            const json = JSON.stringify(payload);

            fetch('/processar.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: json
            })
            .then(resposta => resposta.json())
            .then(dados => {
                const campo = document.getElementById("resultado");
                campo.innerHTML = "O resultado do cálculo é: " + dados.delta;
            })
            .catch(error => {
                const campo = document.getElementById("resultado");
                campo.innerHTML = "Erro ao calcular: " + error.message;
            });
        }
    </script>
</body>
</html>
