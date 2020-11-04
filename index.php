<!doctype html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <title>Cadastro de Funcionarios</title>

        <!-- Link Css Bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- Favicon do Sistema -->
		<link rel="shortcut icon" href="assets/media/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="assets/media/favicon/favicon.ico" type="image/x-icon">
    </head>

    <body>

        <div class="container">
            <div class="row mt-5 justify-content-md-center">
                <div class="col-md-10">

                    <h4 class="mb-3">Cadastro de Funcionario</h4>

                    <form id="frm-regfuncionario">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nomeCompleto">Nome Completo</label>
                                <input type="text" class="form-control" name="nomeCompleto" maxlength="80" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="dtNascimento">Nascimento</label>
                                <input type="date" class="form-control" name="dtNascimento" min="<?php echo date("Y-m-d", strtotime('-100 year', strtotime(date("Y-m-d")))); ?>" max="<?php echo date("Y-m-d"); ?>" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="genero">Sexo</label>
                                <select class="custom-select d-block w-100" name="genero" required>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option> 
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="estadoCivil">Estado Civil</label>
                                <select class="custom-select d-block w-100" name="estadoCivil" required>
                                    <option value="Solteiro">Solteiro</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Separado">Separado</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Viúco">Viúvo</option>
                                    <option value="Amasiado">Amasiado</option>
                                </select>
                            </div>	
                            <div class="col-md-3 mb-3">
                                <label for="nascionalidade">Nacionalidade</label>
                                <input type="text" class="form-control" name="nascionalidade" maxlength="25" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="naturalidade">Naturalidade</label>
                                <input type="text" class="form-control" name="naturalidade" maxlength="25" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="escolaridade">Escolaridade</label>
                                <select class="custom-select d-block w-100" name="escolaridade" required>
                                    <option value="FUND-IN">Fundamental - Incompleto</option>
                                    <option value="FUND-CO">Fundamental - Completo</option> 
                                    <option value="MEDI-IN">Médio - Incompleto</option> 
                                    <option value="MEDI-CO">Médio - Completo</option> 
                                    <option value="SUPE-IN">Superior - Incompleto</option> 
                                    <option value="SUPE-CO">Superior - Completo</option> 
                                    <option value="POSG-IN">Pós-graduação - Incompleto</option> 
                                    <option value="POSG-CO">Pós-graduação - Completo</option> 
                                    <option value="MEST-IN">Mestrado Incompleto</<option>
                                    <option value="MEST-CO">Mestrado - Completo</option> 
                                    <option value="DOUT-IN">Doutorado - Incompleto</option> 
                                    <option value="DOUT-CO">Doutorado - Completo</option> 
                                    
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nomeMae">Nome Mãe</label>
                                <input type="text" class="form-control" name="nomeMae" maxlength="80">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nomePai">Nome Pai</label>
                                <input type="text" class="form-control" name="nomePai" maxlength="80">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="telResidencial">Telefone Residencial</label>
                                <input data-mask="phone" type="text" class="form-control" name="telResidencial" maxlength="14">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="telCelular">Telefone Celular</label>
                                <input data-mask="celular" type="text" class="form-control" name="telCelular" maxlength="15" required>
                            </div>	
                            <div class="col-md-3 mb-3">
                                <label for="docRG">RG</label>
                                <input data-mask="rg" type="text" class="form-control" name="docRG" maxlength="14" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="docCPF">CPF</label>
                                <input data-mask="cpf" type="text" class="form-control" name="docCPF" max="14" required>
                            </div>					
                        </div>

                        <hr class="mb-4">
                            
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label for="cep">CEP</label>
                                <input onkeyup="buscaCEP()" data-mask="cep" type="text" class="form-control" name="cep" maxlength="9" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="endereco">Endereco</label>
                                <input type="text" class="form-control" name="endereco" maxlength="80" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="numero">Nº</label>
                                <input data-mask="numero" type="text" class="form-control" name="numero" maxlength="5" required>
                            </div>	
                            <div class="col-md-3 mb-3">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" maxlength="15">
                            </div>	
                            <div class="col-md-5 mb-3">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" name="bairro" maxlength="30" required>
                            </div>	
                            <div class="col-md-5 mb-3">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" maxlength="30" required>
                            </div>	
                            <div class="col-md-2 mb-3">
                                <label for="uf">UF</label>
                                <input type="text" class="form-control" name="uf" max="2" required>
                            </div>				
                        </div>

                        <hr class="mb-4">	
                            
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cnhNumero">CNH</label>
                                <input data-mask="cnh" type="text" class="form-control" name="cnhNumero" maxlength="11">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cnhCategoria">Categoria</label>
                                <select class="custom-select d-block w-100" name="cnhCategoria">
                                    <option value=""></option>
                                    <option value="ACC">Categoria ACC</option>
                                    <option value="A">Categoria A</option> 
                                    <option value="B">Categoria B</option>
                                    <option value="AB">Categoria AB</option>
                                    <option value="C">Categoria C</option> 
                                    <option value="D">Categoria D</option> 
                                    <option value="E">Categoria E</option> 
                                    
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cnhValidade">Data Validade</label>
                                <input type="date" class="form-control" name="cnhValidade" min="<?php echo date("Y-m-d", strtotime('-10 year', strtotime(date("Y-m-d")))); ?>" min="<?php echo date("Y-m-d", strtotime('+10 year', strtotime(date("Y-m-d")))); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cnhEmissao">Data 1º Emissao</label>
                                <input  type="date" class="form-control" name="cnhEmissao" min="<?php echo date("Y-m-d", strtotime('-100 year', strtotime(date("Y-m-d")))); ?>" max="<?php echo date("Y-m-d"); ?>">
                            </div>				
                        </div>				
                            
                        <hr class="mb-4">
                                
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="ctpsPIS">PIS/PASEP</label>
                                <input data-mask="pis" type="text" class="form-control" name="ctpsPIS" maxlength="11">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="ctpsNumero">Numero</label>
                                <input data-mask="ctpsnumb" type="text" class="form-control" name="ctpsNumero" maxlength="7">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="ctpsSerie">Serie</label>
                                <input data-mask="serie" type="text" class="form-control" name="ctpsSerie" maxlength="4">
                            </div>	
                            <div class="col-md-1 mb-3">
                                <label for="ctpsUF">UF</label>
                                <input type="text" class="form-control" name="ctpsUF" maxlength="2">
                            </div>	
                            <div class="col-md-3 mb-3">
                                <label for="ctpsAdmissao">Data Admissão</label>
                                <input type="date" class="form-control" name="ctpsAdmissao" min="<?php echo date("Y-m-d", strtotime('-50 year', strtotime(date("Y-m-d")))); ?>" max="<?php echo date("Y-m-d"); ?>">
                            </div>				
                        </div>	
                                        
                        <hr class="mb-4">
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="setor">Setor de Atuação</label>
                                <select class="custom-select d-block w-100" name="setor" required>
                                    <option value="1">Setor de Financeiro</option>
                                    <option value="2">Setor Administrativo</option> 
                                    <option value="3">Setor de Recursos Humanos</option>
                                    <option value="4">Setor Comercial/Vendas</option>
                                    <option value="5">Setor Operacional</option>
                                    <option value="6">Setor de Marketing</option>
                                    <option value="7">Setor de Limpeza</option>
                                    <option value="8">Setor de Manuteção</option>
                                    <option value="9">Setor Jurídico</option>						
                                </select>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="funcao">Função Exercida</label>
                                <select class="custom-select d-block w-100" name="funcao" required>
                                    <option value="1">Auxiliar Administrativo</option>
                                    <option value="2">Auxiliar Financeiro</option> 
                                    <option value="3">Auxiliar de Vendas</option> 
                                    <option value="4">Gerente de Vendas</option>
                                    <option value="5">Estagiário</option>

                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="salario">Salário Bruto</label>
                                <input data-mask="Valor2" type="text" class="form-control text-right" name="salario" value="0.00" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="statusVR">Vale Refei.</label>
                                <select class="custom-select d-block w-100" name="statusVR">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option> 
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="valorVR">Valor VR</label>
                                <input data-mask="Valor2" type="text" class="form-control text-right" name="valorVR" value="0.00">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="statusVT">Vale Transp.</label>
                                <select class="custom-select d-block w-100" name="statusVT" required>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option> 
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="valorVR">Valor VT</label>
                                <input data-mask="Valor2" type="text" class="form-control text-right" name="valorVT" value="0.00">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="statusPSaude">Convênio Médico</label>
                                <select class="custom-select d-block w-100" name="statusPSaude">
                                    <option value="0">Sem convênio médico</option>
                                    <option value="1">Convênio XYZ</option> 
                                </select>
                            </div>				
                        </div>	
                        
                        <hr class="mb-4">
                    
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="logEmail">E-mail de Acesso</label>
                                <input type="email" class="form-control" name="logEmail" max="80" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="logSenha">Senha de Acesso</label>
                                <input type="text" class="form-control" name="logSenha" max="20" required>
                            </div>
                            <div class="col-md-4">
                                <label for="tipoConta">Tipo de Conta</label>
                                <select class="custom-select d-block w-100" name="tipoConta">
                                    <option value="1">Usuário Normal</option>
                                    <option value="2">Usuário Administrador</option> 
                                </select>
                            </div>				
                        </div>	
                        
                        <hr class="mb-4">
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="salario">Observação</label>
                                <textarea class="form-control" rows="8" name="observacao"></textarea>
                            </div>	
                        </div>
                        
                        <input type="hidden" name="Funcao" value="regFuncionario">

                        <button id="Enviar" class="btn btn-primary mb-5 btn-lg btn-block" type="submit"><small>Cadastrar novo Funcionário</small></button>

                    </form>
                </div>
            </div>

            <footer class="my-5 text-muted text-center text-small">
                <p class="mb-1">&copy; <?php echo date("Y"); ?> andcssantos | ADS::Projeto</p>
                <ul class="list-inline">
                <li class="list-inline-item"><a rel="noopener noreferrer" href="https://github.com/andcssantos/formCadastroUsuario" target="_blank">GITHUB</a></li>
                <li class="list-inline-item"><a rel="noopener noreferrer" href="https://www.linkedin.com/in/andcssantos/" target="_blank">LinkedIn</a></li>
                <li class="list-inline-item"><a href="mail:andcssantos@gmail.com">Contato</a></li>
                </ul>
            </footer>

        </div>
        
        <!-- Link JS Bootstrap 4 -->
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    </body>

</html>