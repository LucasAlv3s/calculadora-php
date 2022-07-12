<?php
  $nro1 = 0;
  $nro2 = 0;
  $resultado = 0;
  $calcular = 'somar'; 

  if(isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])) {
    $nro1 = $_GET['nro1'];
    $nro2 = $_GET['nro2'];
    $calcular = $_GET['calcular'];

    switch($calcular) {
      case 'somar':
        $resultado = $nro1 + $nro2;
        break;
      case 'subtrair':
        $resultado = $nro1 - $nro2;
        break;
      case 'multiplicar':
        $resultado = $nro1 * $nro2;
        break;
      case 'dividir':
        $resultado = $nro1 / $nro2;
        break;
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
  </head>
  <body>
    <form>
      <h1>Primeiro Número</h1>
      <input type="number" name="nro1" placeholder="Digite o primeiro número" value=<?= $nro1 ?> required/><br />
      <h1>Segundo Número</h1>
      <input type="number" name="nro2" placeholder="Digite o segundo número" value=<?= $nro2 ?> required/><br />
      <br />
      <select name="calcular">
        <option value="somar" <?= ($calcular == 'somar')?'Selected':''; ?>>Somar</option>
        <option value="subtrair" <?= ($calcular == 'subtrair')?'Selected':''; ?>>Subtrair</option>
        <option value="multiplicar" <?= ($calcular == 'multiplicar')?'Selected':''; ?>>Multiplicar</option>
        <option value="dividir" <?= ($calcular == 'dividir')?'Selected':''; ?>>Dividir</option>
      </select><br /><br />
      <input type="submit" value="calcular" />
      <br />
      <h3>O resultado é <?= $resultado ?> </h3>
    </form>
  </body>
</html>