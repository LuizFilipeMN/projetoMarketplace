<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CADASTRO</title>
</head>
<body>
    <div id="login">
        <div class="caixa">

            <img src="{{ asset('img/logo/u-removebg-preview.png') }}" alt="">
            <h1>CRIAR CONTA</h1>

            <form method="post" action="{{ route('cadastro.store') }}">
                @csrf

                <div class="nome">
                    <input type="text" name="nome" placeholder="Nome Completo">
                </div>

                <div class="endereco">
                    <input type="text" name="endereco" placeholder="Endereço">
                </div>

                <div class="cidade">
                    <input type="text" name="cidade" placeholder="Cidade">
                </div>

                <div class="estado">
                    <input type="text" name="estado" placeholder="Estado">
                </div>

                <div class="telefone">
                    <input type="text" name="telefone" placeholder="Telefone/WhatsApp" id="telefoneInput" oninput="onlyNumbers(this)">
                </div>

                <div class="email">
                    <input type="email" name="email" placeholder="E-mail">
                </div>

                <div class="cnpj">
                    <input type="text" name="cnpj" placeholder="CNPJ">
                </div>

                <div class="senha">
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <div class="entrar">
                    <input type="submit" value="Cadastrar">
                    <p>Já possui uma conta?<a href="{{ route('login') }}"> Clique aqui </a></p>
                </div>
            </form>

        </div>
    </div>

    <script>
        function onlyNumbers(input){
            input.value = input.value.replace(/\D/g, '');
        }

        function formatPhoneNumber(input){
            const numbersOnly = input.value.replace(/\D/g, '');
            if (numbersOnly.length >= 9) {
                const phoneNumber = numbersOnly.substring(2);
                input.value = `(${numbersOnly.substring(0, 2)}) ${phoneNumber.substring(0, 5)}-${phoneNumber.substring(5, 9)}`;
            } else {
                input.value = numbersOnly;
            }
        }
    </script>
</body>
</html>