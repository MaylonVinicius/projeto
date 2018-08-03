<!DOCTYPE html>
<html>
    {include file = "../syshtml/Head.tpl"}
<body>
    {include file = "../sysadmin/SuperTop.tpl"}
    {include file = "../sysadmin/NavMenuAdmin.tpl"}
    <div class="container-fluid conteudo-admin">
        <br/>
        <h1>{$title}</h1>
        <br/>
        <div class="cadastro-pessoa">
            <div class="p-lg-5 p-md-5 p-sm-2 p-xs-0 font-weight-bold">
                <form method="post" style="font-size: 0.9em;">
                    <div class="mb-4">
                        <label for="ehJuridica">É jurídica?</label>
                        <input id="ehJuridica" name="ehJuridica" type="checkbox" class="mr-4" onclick="mudaTipoPessoa()">

                        <label for="active">Ativo?</label>
                        <input id="active" name="active" type="checkbox" class="mr-4">
                    </div>
                    <fieldset class="border-bottom">
                        <legend class="legend-form-inserirPessoa">Dados Pessoais</legend>
                        <div class="row">
                            <div class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="nome">Nome:</label>
                                <input required id="nome" name="nome" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-fantasia" class="input col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display:none;">
                                <label for="fantasia">Fantasia:</label>
                                <input id="fantasia" name="fantasia" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-sobrenome" class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="sobrenome">Sobrenome:</label>
                                <input id="sobrenome" name="sobrenome" type="text" class="w-100 mb-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email">E-mail:</label>
                                <input required id="email" name="email" type="email" class="w-100 mb-2">
                            </div>
                            <div id="input-cpf" class="input col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label for="cpf">CPF:</label>
                                <input id="cpf" name="cpf" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-cnpj" class="input col-lg-3 col-md-3 col-sm-3 col-xs-12" style="display: none;">
                                <label for="cnpj">CNPJ:</label>
                                <input id="cnpj" name="cnpj" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-dataNascimento" class="input col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label for="dataNascimento">Data Nascimento:</label>
                                <input id="dataNascimento" name="dataNascimento" type="date" class="w-100 mb-2" style="-webkit-appearance: textfield; -moz-appearance: textfield;">
                            </div>
                            <div id="input-dataFundacao" class="input col-lg-3 col-md-3 col-sm-3 col-xs-12" style="display: none;">
                                <label for="dataFuncacao">Data Fundação:</label>
                                <input id="dataFuncacao" name="dataFuncacao" type="date" class="w-100 mb-2" style="-webkit-appearance: textfield; -moz-appearance: textfield;">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div id="input-telefoneResidencial" class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="telefoneResidencial">Telefone Residencial:</label>
                                <input id="telefoneResidencial" name="telefoneResidencial" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-telefoneComercial" class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="telefoneComercial">Telefone Comercial:</label>
                                <input id="telefoneComercial" name="telefoneComercial" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-celularPessoal" class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="celularPessoal">Celular Pessoal:</label>
                                <input id="celularPessoal" name="celularPessoal" type="text" class="w-100 mb-2">
                            </div>
                            <div id="input-celularComercial" class="input col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="celularComercial">Celular Comercial:</label>
                                <input id="celularComercial" name="celularComercial" type="text" class="w-100 mb-2">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
{include file = "../sysadmin/Footer.tpl"}