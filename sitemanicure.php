<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Lari Manicure</title>
    <script type="text/javascript">
      var nome;
      nome = prompt("Qual é o seu nome?");
      var telefone;
      nome = prompt("Qual é o seu Telefone?");
      alert("Olá, " + nome + "Seja bem-vindo ao Lari Manicure ")
      </script>


</head>"
    
<body bgcolor="#a854e8">
    <br><br><center><h1>Lari Manicure</h1>
   <br><br>
   <center>
   <form method="get" action="forma de pagamento.php"> 
      <br>
    <br><br><center><h1>Escolha a opção que deseja</h1>
   <br><br>
   <center>
   <select name="opcao">   
                <option value="Selecionar">Selecionar</option> 
                <option value="mãos r$">mãos</option>
                <option value="pes">pes</option>
                <option value="mãos e pe">mãos e pes</option>
            </select>       
      <br>
    <br><br><center><h1>Horario</h1>
    <table border="2px">
      <tr>
        <td>Segunda</td>
        <td>Terça</td>
        <td>Quarta</td>
        <td>Quinta</td>
        <td>Sexta</td>
      </tr>
      <tr>
        <td>9:00</td>
        <td>9:30</td>
        <td>9:00</td>
        <td>10:00</td>
        <td>10:30</td>
      </tr>
      <tr>
        <td>10:00</td>
        <td>10:30</td>
        <td>10:00</td>
        <td>11:00</td>
        <td>11:30</td>
      </tr>
      <tr>
        <td>10:30</td>
        <td>11:00</td>
        <td>11:00</td>
        <td>11:30</td>
        <td>13:00</td>
      </tr>
      <tr>
        <td>11:30</td>
        <td>13:00</td>
        <td>12:00</td>
        <td>12:00</td>
        <td>13:30</td>
      </tr>
      <tr>
        <td>12:00</td>
        <td>13:30</td>
        <td>13:00</td>
        <td>13:30</td>
        <td>14:00</td>
      </tr>
      <tr>
        <td>13:00</td>
        <td>14:00</td>
        <td>14:00</td>
        <td>14:30</td>
        <td>15:00</td>
      </tr>
      <tr>
        <td>13:30</td>
        <td>14:30</td>
        <td>15:00</td>
        <td>15:30</td>
        <td>16:00</td>
      </tr>
      <tr>
        <td>15:00</td>
        <td>16:00</td>
        <td>17:00</td>
        <td>16:30</td>
        <td>17:00</td>
      </tr>
    </table>
  
   <select name="dia">   
                <option value="Selecionar">Selecionar</option> 
                <option value="Segunda">Segunda</option>
                <option value="Terça">Terça</option>
                <option value="Quarta">Quarta</option>
                <option value="Quinta">Quinta</option>
                <option value="Sexta">Sexta</option>
     descreva: <input type="text" name="descreva" placeholder="selecione o horario"><br><br>
            </select>  

       <center>
    <br><br><center><h1>Alguma observação?</h1>
   <center>
   
  <select name="qst">   
                <option value="Selecionar">Selecionar</option> 
                <option value="Sim">Sim</option>
                <option value="não">não</option>
     descreva: <input type="text" name="descreva" placeholder="Se sim.Qual?"><br><br>
            </select>  
            <input type="submit" value="Proximo">
            </form><br> 
    <a href="sitemanicure.php">Voltar</a>  
</body>
</html>