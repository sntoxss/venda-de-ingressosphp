<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Login</title>
    </head>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .login-container {
                display: flex;
                flex-direction: column;
                background-color: #fff;
                padding: 30px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                justify-content: center;
                width: 300px;
            }
            h2 {
                text-align: center;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .form-group label {
                display: block;
                margin-bottom: 5px;
            }
            .form-group input {
                width: 100%;
                padding: 10px 1px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .btn {
                width: 100%;
                padding: 10px;
                background-color: black;
                color: #fff;
                border: none;
                border-radius: 7px;
                cursor: pointer;
                border: 1px solid white;
            }
            .btn:hover {
            background-color: transparent;
            transition: ease 1s;
            border: 1px solid black;
            color: black;
            }
        </style>
    
    <body>
        <div class="login-container">
            <h2>Entrada</h2>
            <form action="../index/index.php" method="POST">
                <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </form>
        </div>
    </body>
</html>