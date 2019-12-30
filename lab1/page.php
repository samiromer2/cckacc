<?php
//print_r($_POST);
$id       = $_POST['id'];
$itemname = $_POST['itemname'];
$marka    = $_POST['marka'];
$size     = $_POST['itemsize'];
$color    = $_POST['color'];
$type     = $_POST['itemtype'];

//print_r display all elements inside my array
// $ to declare a variable

?>
<table border = "2">
<tr>
<td>id</td>
<td>Name</td>
<td>Marka</td>
<td>Size</td>
<td>Color</td>
<td>Type</td>
</tr>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $itemname;?></td>
<td><?php echo $marka;?></td>
<td><?php echo $size;?></td>
<td><?php echo $color;?></td>
<td><?php echo $type;?></td>

</tr>
</table>