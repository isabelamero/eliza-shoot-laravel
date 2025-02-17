<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ElizaShoot</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <div class="container-form">
        <header>
            <img src="img/elizashootwhite.png" alt="Logo ElizaShoot" class="logo-admin">
            <h1>Login</h1>
        </header>
        <section>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </section>
        <footer>
            <p>&copy; 2025 ElizaShoot. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>
</html>
