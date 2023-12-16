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
            <h3>Cadastre-se</h3>
            <form method="POST" action="{{ route('cadastro.store') }}">
                @csrf
                <div class="tipo-usuario">
                    <label for="tipo_usuario" id="tipo_usuario_label">Tipo de Usuário:</label>
                    <br>
                    <select name="tipo_usuario" id="tipo_usuario">
                        <option value="cliente">Sou Cliente</option>
                        <option value="vendedor">Sou Vendedor</option>
                    </select>
                </div>
                <div class="nome">
                    <input type="text" name="nome" placeholder="Nome Completo" required>
                </div>
                <div class="endereco">
                    <input type="text" name="endereco" placeholder="Endereço" required>
                </div>
                <div class="cidade">
                    <input type="text" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="estado">
                    <input type="text" name="estado" placeholder="Estado" required>
                </div>
                <div class="telefone">
                    <input type="text" name="telefone" placeholder="Telefone/WhatsApp" id="telefoneInput" oninput="onlyNumbers(this)" required>
                </div>
                <div class="email">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="cnpj" style="display: none;">
                    <input type="text" name="cnpj" placeholder="CNPJ" class="vendedor">
                </div>
                <div class="cpf" style="display: none;">
                    <input type="text" name="cpf" placeholder="CPF" class="cliente">
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
        document.getElementById('tipo_usuario').addEventListener('change', function() {
            var tipoUsuario = this.value;
            if (tipoUsuario === 'vendedor') {
                document.querySelector('.cnpj').style.display = 'block';
                document.querySelector('.cpf').style.display = 'none';
                document.querySelector('.numero').style.display = 'none';
            } else if (tipoUsuario === 'cliente') {
                document.querySelector('.cnpj').style.display = 'none';
                document.querySelector('.cpf').style.display = 'block';
                document.querySelector('.numero').style.display = 'block';
            }
        });
    </script>
</body>
</html>
