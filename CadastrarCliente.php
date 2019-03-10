<html>
    <head>
    <meta name="ZUKO" content="Loja Virtual">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styler.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
         //   document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
           // document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
               // document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>
    <body>
<div class="container">
    <div class="row">

    <div class="col-xs-12">
        <div class="page-header">
            <h1>Dados Pessoas</h1>
        </div>
        <form method="POST" action="adm/processo/cadastro_usuario.php" class="form-inline">
		<div class="form-group">
			<label>Seu Nome</label>
			<input type="text" class="form-control" name="nome" placeholder="Digite o nome completo" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="Digite o Email" required>
		</div>
		<div class="form-group">
			<label>Confirmação de Email</label>
			<input type="email" class="form-control" name="ConfirEmail" placeholder="Digite o Email" required>
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input type="password" class="form-control" name="senha" placeholder="Digite a senha" required>
		</div>
		<div class="form-group">
			<label>Confirmação de Senha</label>
			<input type="password" class="form-control" name="ConfirSenha" placeholder="Digite a senha" required>
		</div>
		<br>
		<br>


    </div>

        <div class="col-xs-12">

                <div class="page-header">
                    <h1>Sua Localização</h1>
                </div>
                    <!-- Inicio do formulario -->
                   
                        <div class="form-group">
                            <label for="email">CEP</label>
                            <input name="cep" class="form-control" placeholder="XXXXXXXXX" type="text" id="cep" value="" size="10" maxlength="9"
                                    onblur="pesquisacep(this.value);" />
                        </div>
                        <div class="form-group">
                            <label >Nome da Rua </label>
                            <input name="rua" type="text" id="rua" class="form-control" size="60" />
                        </div>
                        <div class="form-group">
                            <label for="pwd">Bairro </label>
                            <input name="bairro" type="text" class="form-control" id="bairro" size="40" />
                        </div>
                        <div class="form-group">
                            <label for="pwd">Complemento </label>
                            <input name="complemento" type="text" class="form-control" id="" />
                        </div>
                        <div class="form-group">
                            <label for="pwd">Cidade</label>
                            <input name="cidade" type="text" id="cidade" size="40" class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Estado</label>
                            <input name="uf" type="text" id="uf" class="form-control" size="2" disabled />
                        </div>

                        <button type="submit" class="btn btn-default">Cadastrar</button>
                        <br><br><br>
          <!--        <input name="ibge" type="text" id="ibge" size="8" /></label><br />-->
                    </form>
        </div>
       
    </div>
</div>
   
    </body>
</html>