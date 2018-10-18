
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
        input[type="number"] {
  width: 50px;
}
label {
  font-weight: bold;
  margin-left: 10px;
}
div.item {
  border: 1px solid black;
  padding: 10px;
  margin: 5px;
}
div.item1 {
  border: 1px solid black;
  padding: 10px;
  margin: 5px;
}
        </style>
    </head>
    <body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<form action="cadastro.php" method="post" id="formulario">
  <input type="button" id="novoProd" value="Novo produto" />
  <input type="submit" value="enviar" />
  <div id="item" class="item">
    <label>Selecione o produto:</label>
    <select name="hotdogId[]">
      <option value="6">6-Lofe Kids</option>
      <option value="8">8-Lofe artesanal </option>
      <option value="9">9-Lofe Mix</option>
      <option value="9">9-Cheddar Artesanal </option>
      <option value="10">10-Cheddar mix </option>
    </select>
    <label>Quantidade:</label>
    <input type="number" name="quant[]" />
  </div>
<div id="formulario1">
    <input type="button" id="novoProd1" value="Novo produto" />
    <input type="submit" value="enviar" />
  <div id="item1" class="item1">
    <label>Selecione o produto:</label>
    <select name="bebidasId[]">
      <option value="2">2-Agua sem gás</option>
      <option value="3">3-Agua com gás</option>
      <option value="4">4-Refrigerante lata</option>
      <option value="3">3-Refrigerante 210ml </option>
      <option value="5">5-Suco natural </option>
    </select>
    <label>Quantidade:</label>
    <input type="number" name="quant1[]" />
  </div>
</div>
</form>

    <script>
$(document).ready(function() {
      $("#novoProd").click(function() {
      var novoItem = $("#item").clone().removeAttr('id'); // para não ter id duplicado
      novoItem.children('input').val(''); //limpa o campo quantidade
      $("#formulario").append(novoItem);
    });
  });  
 $(document).ready(function() {
      $("#novoProd1").click(function() {
      var novoItem = $("#item1").clone().removeAttr('id'); // para não ter id duplicado
      novoItem.children('input').val(''); //limpa o campo quantidade
      $("#formulario1").append(novoItem);
    });
  });  
            
            
    </script>        
    </body>
</html>
