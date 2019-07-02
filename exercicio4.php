<!DOCTYPE html>
<html>

<head>
<title>Exercício 4</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css"> 
</head>

<body>

<div class="quadrado">
<h1> Insira seus dados: </h1>
<form>
    <p>Nome: <input type="text" name="nome"></p>
    <p>Endereço: <input type="text" name="endereco"></p>
    <p>CEP: <input type="text" name="cep"></p>

    <p>Cidade:  <select name="cidade">
        <option value="florianopolis"> Florianópolis </option>
        <option value="joinville"> Joinville </option>
        <option value="blumenau"> Blumenau </option>
        <option value="chapeco"> Chapecó </option>
        <option value="araquari"> Araquari </option>        

    </select></p>

    <p>Sexo: <br>
        <input type="radio" name="gender" value="masc"> Masculino<br>
        <input type="radio" name="gender" value="femi"> Feminino<br>
    </p>

    <table style="text-align: left;">
    <td><p>Cartão de crédito: <br>
        <input type="checkbox" name="credicardzero"> Credicard Zero <br>
        <input type="checkbox" name="santanderfree"> Santander Free <br>
        <input type="checkbox" name="bancointer"> Banco Inter <br>
        <input type="checkbox" name="nubank"> Nubank <br>
        <input type="checkbox" name="digio"> Digio <br>
        <input type="checkbox" name="neon"> Neon <br>
        <input type="checkbox" name="bancooirignal"> Banco Original <br>
        <input type="checkbox" name="bmg"> BMG <br>
        <input type="checkbox" name="saraiva"> Saraiva <br>
        <input type="checkbox" name="mastercard"> Mastercard <br>    
    </p></td>

    <td><p>Número do cartão: <br>
        <input type="number" name="credicardzero" placeholder="Nº do cartão"><br>
        <input type="number" name="santanderfree" placeholder="Nº do cartão"><br>
        <input type="number" name="bancointer" placeholder="Nº do cartão"><br>
        <input type="number" name="nubank" placeholder="Nº do cartão"><br>
        <input type="number" name="digio" placeholder="Nº do cartão"><br>
        <input type="number" name="neon" placeholder="Nº do cartão"><br>
        <input type="number" name="bancooirignal" placeholder="Nº do cartão"><br>
        <input type="number" name="bmg" placeholder="Nº do cartão"><br>
        <input type="number" name="saraiva" placeholder="Nº do cartão"><br>
        <input type="number" name="mastercard" placeholder="Nº do cartão"><br>
    </p></td>  
    </table>  

<button type="submit" style="border-radius:5px; bottom: 0px;"> Enviar </button>
</form>
</div>

</body>

</html>
