
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
        </style>
    </head>
    <body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<form action="cadastro.php" method="post" id="formulario">
  <input type="button" id="novoProd" value="Novo produto" />
  <input type="submit" value="enviar" />
  <div id="item" class="item">
    <label>Selecione o produto:</label>
    <select name="produtoId[]">
      <option value="1">Produto 1</option>
      <option value="2">Produto 2</option>
      <option value="3">Produto 3</option>
    </select>
    <label>Quantidade:</label>
    <input type="number" name="quant[]" />
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
            
            
    </script>        
    </body>
</html>
