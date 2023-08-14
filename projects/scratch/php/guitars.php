
<link rel="stylesheet" href="style.css">

<?php include('guitars_data.php'); ?>

<ol class='guitar-list'>
	<?php foreach ($guitars as $guitar) { ?>
		<guitar-card>
			<h3><?=$guitar['name']; ?></h3>
			<p><?=$guitar['brand']?></p>
		</guitar-card>
	<?php } ?>
</ol>




<!-- // echo "<ol>\n";
// foreach ($guitars as $guitar) { 
// 	$name = $guitar['name'];
// 	$brand = $guitar['brand'];
// 	echo "<li><span class='name'>$name</span>: $brand</li>\n";
// }
// echo  "</ol>";
 -->

