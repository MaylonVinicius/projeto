function mudaTipoPessoa() {

    if(document.querySelector('#ehJuridica:checked')){
        pessoaJuridica();
    }else{
        pessoaFisica();
    }

}
function pessoaFisica() {
    document.getElementById("input-cpf").style.display = "inline";
    document.getElementById("input-cnpj").style.display = "none";

    document.getElementById("input-sobrenome").style.display = "inline";
    document.getElementById("input-fantasia").style.display = "none";

    document.getElementById("input-telefoneResidencial").style.display = "inline";
    document.getElementById("input-celularPessoal").style.display = "inline";

    document.getElementById("input-dataNascimento").style.display = "inline";
    document.getElementById("input-dataFundacao").style.display = "none";
}
function pessoaJuridica() {
    document.getElementById("input-cnpj").style.display = "inline";
    document.getElementById("input-cpf").style.display = "none";

    document.getElementById("input-sobrenome").style.display = "none";
    document.getElementById("input-fantasia").style.display = "inline";

    document.getElementById("input-telefoneResidencial").style.display = "none";
    document.getElementById("input-celularPessoal").style.display = "none";

    document.getElementById("input-dataFundacao").style.display = "inline";
    document.getElementById("input-dataNascimento").style.display = "none";
}