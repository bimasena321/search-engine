<?php
$q = $_GET['q']
$query = "SELECT * FROM content where like "%" limit 10";
$query_exec =mysql_query($con,$query);
while ($row = mysql_fetch_array($query_exec));

?>
<div class='item'>
<div class='title'>
	<?php
	echo $row['title']
	?>
	<div class='description'></div>
		<?php
		echo $row['description']; ?></div>
		<div class='link'><?php echo $row['url'];?></div>

		
	</div>
</div>