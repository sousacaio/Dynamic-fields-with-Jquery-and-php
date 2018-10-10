<?php
$quantidade = $_POST['quant'];
$produto = ($_POST['produtoId']);
 json_encode($produto);
foreach ($_POST['produtoId'] as $key=> $value):?>
<form action="dapreco.php" method="POST">
<input type="text" value="<?php echo$value; ?>">
X
<input type="text" value="<?php echo $_POST['quant'][$key];?>">
=
<input type="text" value="<?php echo  $resultado =  ($value * $_POST['quant'][$key]);?>" name="resultado[]">
<br>
   <?php
endforeach;?>
<input type="submit">
</form>
<?php
/*
 echo array_sum($produto)."<br>";
 echo array_sum($quantidade)."<br>";*/
