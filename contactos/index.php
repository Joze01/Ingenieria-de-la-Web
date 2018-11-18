<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agenda Test</title>
    <?php
        require "imports/head.html";
    ?>
</head>
<body class="bg-change">
    <div class="container">
        <div class="forms center">
            <header class="page-header">
                <h2>Contact Street</h2>
            </header>
            <form class="col-md-4 col-md-offset-4" id="form-login" role="form" method="POST" action="config/login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" value="Submit" class="btn btn-primary btn-lg btn-total">Entrar</button>
                <label class="pull-right">
                    <a href="config/addinvitado.php">Sin iniciar Sesision</a>
                </label>
            </form>
        </div>
    </div>
    <footer>
        <div id="line-footer"></div>
    </footer>

    <?php
        require "imports/js_imports.html";
    ?>
</body>

</html>
