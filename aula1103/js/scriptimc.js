function calcular() {
    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);

    var calculo = numero1 / numero2 * numero2;

    document.getElementById("resultado").innerText = "Imc: " + calculo;
}