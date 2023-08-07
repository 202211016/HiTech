<?php
session_start();
$connect=mysql_connect("localhost","root","","product");
$query="SELECT *FROM product ORDER BY id  ASC";
if(mysql_num_rows($result)>0)
{
	while ($rows = mysql_fetch_array($result))
		
}
?>
<div class="col-ad-3">
<form method="post" action="product.html?action=addid=<?php echo $row["id"]?>">
<div class="product">
<img src="<?php echo $row ['image']?>" class="img-responsive">
<h5 class="text-info"><?php $row['pname'];?></h5>
<h5 class="text-danger"><?php $row['pprice'];?></h5>
<input type="text"name="Quantity"class="form-control" value="1">
<input type="text"name="



</div>
</form>