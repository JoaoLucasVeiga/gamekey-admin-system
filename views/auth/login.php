<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - GameKey Admin</title>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        body {
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:#111;
            color:white;
        }
        .login-box {
            background:#1e1e1e;
            padding:30px;
            border-radius:8px;
            width:300px;
            text-align:center;
        }
        input {
            width:100%;
            padding:8px;
            margin-bottom:10px;
        }
        button {
            width:100%;
            padding:8px;
            background:#4CAF50;
            color:white;
            border:none;
            cursor:pointer;
        }
        .erro {
            color:red;
            margin-top:10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login Administrativo</h2>

    <form method="POST" action="index.php?action=processar_login">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>

    <?php if (!empty($erro)): ?>
        <div class="erro"><?= $erro ?></div>
    <?php endif; ?>
</div>

</body>
</html>