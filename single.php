<?php
require('CONFIG.php');
require_once('includes/functions.php');
require('includes/header.php');

//which post are we trying to view?
//url will be like single.php?post_id=X
if( isset($_GET['post_id']) ){
$post_id = filter_var($_GET['post_id'], FILTER_SANITIZE_NUMBER_INT );
//make sure its safe
if( '' == $post_id ){
    $post_id = 0;   
    }
}else{
    $post_id = 0;
}


?>
	<main class="content">

	<?php //1. write it 2. get all published posts, newest first 
		$result = $DB->prepare('SELECT posts.post_id, posts.image, posts.title, posts.body, posts.date, users.username, categories.name, users.profile_pic
								FROM posts, users, categories
								WHERE posts.is_published = 1
								AND users.user_id = posts.user_id
								AND categories.category_id = posts.category_id
                                AND posts.post_id = ?
								ORDER BY posts.date DESC
                                LIMIT 1');
		//run it					
		$result->execute( array( $post_id) );
		//check it - did we find any posts?
		if( $result->rowCount() >= 1 ){		
			//loop it - once per row
			while( $row = $result->fetch() ){	
	?>
		<div class="one-post">
			<img src="<?php echo $row['image']; ?>">

            <?php show_profile_pic( $row['profile_pic'] ); ?>
					<?php echo $row['username']; ?>
				</span>

			<h2><?php echo $row['title']; ?></h2>
			<p><?php echo $row['body']; ?></p>

				<span class="category">NAME</span>

			<span class="date"><?php echo time_ago($row ['date'] ); ?></span>

			<span class="comment-count"><?php count_comments( $row['post_id'] ); ?></span>

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
