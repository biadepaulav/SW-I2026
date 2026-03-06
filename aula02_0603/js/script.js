// função auxiliar para capturar o valor e exibir o alerta 
function processarvalidacao() {
    const valorInput = document.getElementById('inputcpf').value;
    const ehValido = validarCPF(valorInput);

    if (ehValido){
        alert("O CPF" + valorInput + "é valido!")
} else {
    alert("O CPF" + valorInput + "é inválido!")
    }
}

function validarCPF(cpf){
    //remove pontos e traços, deixando apenas números
    cpf = cpf.replace(/[^\d]+/g,'');

    //verifica se tem 11 dígitos ou se é uma sequência repetida conhecida
    if(cpf.length !== 11 || !!cpf.match(/(\d)\1{10}/)) {
        return false;
    }

    const digitos = cpf.split('').map(el=> +el);

    // calculo do 1° digito verificador
    let soma = 0;
    for (let i = 0; 1 < 9; i++) {
        
    }

}
//button onclick="soma()">Validar CPF</button>
function soma(){
    const ValorInput = document.getElementById('inputcpf').value;
    const ValorNome = document.getElementById('inputnome').value;
    const ValorEmail = document.getElementById('inputemail').value;
    const ValorEndereco = document.getElementById('inputenderecoS').value;
    alert("Olá " +ValorNome+", seu cpf é: "+ValorInput);

}
