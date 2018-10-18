<?php
 
foreach ($_POST['hotdogId'] as $key=> $value):?>
<form action="dapreco.php" method="POST">

<input type="text" value="<?php echo$value; ?>">
X
<input type="text" value="<?php echo $_POST['quant'][$key];?>">
=
<input type="text" value="<?php echo  $resultado =  ($value * $_POST['quant'][$key]);?>" name="resultado[]">
<br>
  <?php
endforeach;
foreach ($_POST['bebidasId'] as $key1=> $value1):?>
bebidas:<br>
<form action="dapreco.php" method="POST">

<input type="text" value="<?php echo $value1; ?>">
X
<input type="text" value="<?php echo $_POST['quant1'][$key1];?>">
=
<input type="text" value="<?php echo  $resultado =  ($value1 * $_POST['quant1'][$key1]);?>" name="resultado[]">
<br>
   <?php
endforeach;?>
<input type="submit">
</form>
<?php
/*
 echo array_sum($produto)."<br>";
 echo array_sum($quantidade)."<br>";*/
