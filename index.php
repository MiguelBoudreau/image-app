<?php
require('CONFIG.php');
require_once('includes/functions.php');
require('includes/header.php');
?>
	<main class="content">
		
	<?php //1. write it 2. get all published posts, newest first 
		$result = $DB->prepare('SELECT image, title, body, date
								FROM posts
								WHERE is_published = 1
								ORDER BY date DESC
								'); 
		//run it					
		$result->execute();
		//check it - did we find any posts?
		if( $result->rowCount() >= 1 ){		
			//loop it - once per row
			while( $row = $result->fetch() ){	
	?>
		<div class="one-post">
			<img src="<?php echo $row['image']; ?>">
			<h2><?php echo $row['title']; ?></h2>
			<p><?php echo $row['body']; ?></p>
			<span class="date"><?php echo time_ago($row ['date'] ); ?></span>
		</div>

		<?php 
			} // end while loop
		}else{ ?>
			<div class="message">
				<h2>Sorry</h2>
				<p>BODY</p>
				<span class="date">DATE</span>
		<?php } ?>
	</main>
	<?php
	require('includes/aside.php');
	require('includes/footer.php');
	?>
