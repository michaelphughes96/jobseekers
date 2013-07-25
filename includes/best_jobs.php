<div class="job_container">
		<div class="search_results">
		<?php
		$postcode_one = $_POST['postcode_one'];
		$desired_distance = $_POST['desired_distance'];
		settype($desired_distance, int);
		$desired_title = $_POST['desired_title'];

		if(!empty($desired_title) && !empty($postcode_one)){
		$resulto = mysql_query("SELECT * FROM jobs WHERE title LIKE '%$desired_title%'");
		while($mow = mysql_fetch_assoc($resulto)){
		$post = $mow['Pcode'];
		$calculated = calc_postcode_seperation($postcode_one, $post);

		if($calculated <= $desired_distance){
		?>
	<div class="job">
		<h3><a href="#" title="<?php echo $mow['title']; ?>" style="text-decoration:none;"><?php echo $mow['title']; ?></a></h3> 
	<ul class="job_info">
		<li><?php echo $mow['Pcode']; ?></li>
		<li><?php echo $calculated . ' miles away'; ?></li>
	</ul>
		<p class="job_description"><?php echo $mow['description']; ?></p>
			</div>
		<?php
		} elseif(!mysql_num_rows > 1){
		?>
<p>No results from what you gave us!</p>
	<?php
	}
	}
	}
	?>
</div>
<?php
include "mini_login_box.php";
?>

</div>