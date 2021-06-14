<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
 
    <link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="http://localhost/mvcBrief5/login/loginPage" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group mt-3">
                                <label for="email" class="text-info">Login:</label><br>
                                <input type="text" name="login" id="email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                            <div><a href="http://localhost/mvcBrief5/enseignant/">creer un compte</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>