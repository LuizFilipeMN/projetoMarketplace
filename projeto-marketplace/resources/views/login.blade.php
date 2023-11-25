<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ENTRAR</title>
</head>
<body>
    <div id="login">
        <div class="caixa">

            <img src="{{ asset('img/logo/u-removebg-preview.png') }}" alt="">
            <h1>LOGIN</h1>

            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="nome">
                    <input type="text" name="nome" placeholder="Nome">
                </div>

                <div class="senha">
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <div class="entrar">
                    <p>Ainda não possui uma conta?<a href="{{ route('cadastro.create') }}"> Clique aqui</a></p>
                    <button type="submit">Entrar</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>