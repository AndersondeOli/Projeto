<!DOCTYPE html>
<html>
    
<head>
    <title>ACE</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"  />
</head>
<body class>
    

    <form class="signup-form" name="cadastro_Usuario" method="post" 
        <!-- form header -->
        <fieldset>

            <div class="form-header">
                <h1> Identifica��o</h1>
            </div>
            <!-- form body -->
            <div class="form-body">

                <!-- Dados Pessoais -->

                <div class="form-group left">
                    <label class="label-title">Nome*:  <input type="text" name="nome" id="id_nome" class="form-input" placeholder="Insira seu nome completo" required></label>

                    <label class="label-title">CPF*: <input type="text" name="cpf" id="id_CPF" class="form-input" size="20" maxlength="11" min="0" placeholder="Somente n�meros" required></label>

                    <label class="label-title">Celular*: <input type="text" name="Celular" id="id_celular" class="form-input" size="12" maxlength="12" placeholder="Insira o DDD+num" required></label>
                    <br />

                </div>

               

                    <div class="form-group">
                        <br />
                        <label class="label-title">Data de nascimento*: <input type="date" name="data" class="label-title" required</label>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label class="label-title">E-mail*: <input type="email" name="email" id="id_e-mail" class="form-input" placeholder="Informe seu e-mail" size="20" maxlength="40" required></label>
                    </div>
                    <br />
                    <!-- Criar e confirmar senha -->
                    <div class="horizontal-group">
                        <div class="form-group left">
                            <label for="id-senha" class="label-title">Senha *</label>
                            <input type="password" id="id_Senha" name="Senha" class="form-input" placeholder="Escolha Senha" required="required">
                        </div>
                        <div class="form-group right">
                            <label for="id_conf_senha" class="label-title">Confirmar Senha *</label>
                            <input type="password" name="Confirmar_senha" class="form-input" id="id_Conf_Senha" placeholder="Repita sua senha" required="required">
                        </div>
                    </div>

                    <br />
                    <!-- Informar g�nero-->
                    <div class="label-title">
                        <legend>G�nero*:</legend>




                        <label class="form-group left"><input type="radio" value="Masculino" name="Genero" checked>Masculino</label>
                        <label class="form-group right"><input type="radio" value="Feminino" name="Genero">Feminino</label>
                    </div>





                   
                    <!-- form-footer (bot�o)-->
                    <div class="form-footer">
                        <span>* Obrigat�rio</span>

                        <button type="submit" class="btn">Enviar</button>
                        <button type="reset" class="btn">Limpar escolhas</button>
                        
                    </div>
                    

        </fieldset>
    </form>







</body>
</html>