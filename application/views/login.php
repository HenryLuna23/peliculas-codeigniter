<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso al sistemas de peliculas</title>
    <link rel="stylesheet" href="<?=base_url()?>plantillas/css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h2>Loguearse</h2>
                <form action="" method="post">
                    <div class="form-group">
                    <label for="username"></label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    </div>

                    <div class="form-group">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</body>
</html>