<!DOCTYPE html>
<!--Luis Alberto Garza Cavazos #736573-->
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Act 3.2</title>
  </head>
  <body>
    <form method="POST" action="operaciones.php">
      <label for="numero1">Ingrese el primer numero</label> <br>
      <input type="number" name="numero1"> <br>
      <label for="numero2">Ingrese el segundo numero</label> <br>
      <input type="number" name="numero2"> <br>

      <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
      </select>

      <button type="submit"> Ver Resultado</button>
    </form>
  </body>
</html>
