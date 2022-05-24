<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row bg-dark text-white pt-2 pb-2 border-bottom border-secondary border-5 text-center" >
            <div>
                    <h5 class="form-signin-heading">Cadastro de Carros</h5>
            </div>
                <div class="form-group">            
                    <form method = "post" action ="{{route('carros_novo')}}">
                    @csrf
                    <label>Marca</label>
                    <input type = "text" name = "marca"><br>
                    <label>Modelo</label>
                    <input type = "text" name = "modelo"><br>
                    <label>Preço</label>
                    <input type = "text" name = "preco"><br>

                    <button type="submit" class="btn btn-success" style="margin-top: 20px">Enviar</button>
                </div>		


                </form>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>