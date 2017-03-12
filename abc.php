<?php 



?>
<form method="post">
<table width="100%" border="1px solid silver">
<tr>
	<td>Query</td>
	<td>:</td>
	<td><input type="text" name="query" value=""/></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="btn_submit" value="Submit"/></td>
</tr>
<?php 
if(isset($_POST["btn_submit"])){
if($_POST["btn_submit"]=="Submit")
	{	
		$sql=$_POST["query"];
		$q=mysql_query($sql);
		while($row=mysql_fetch_array($q))
		{
?>
<tr>
<?php 
 for($i=0;$i<mysql_num_fields($q);$i++)
 {
?>
<td><?php echo $row[$i] ;?></td>
<?php }?>
</tr>
<?php	
}}
}
?>

</table>
</form>