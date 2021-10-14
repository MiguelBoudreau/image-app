<aside class="sidebar">

    <?php //get up tp 5 users, newest first
    $result = $DB->prepare('SELECT profile_pic, username
                            FROM users
                            ORDER BY user_id DESC
                            LIMIT 5');
    //run it
    $result->execute();
    // check it
    if( $result->rowCount() >= 1 ){
    ?>
    <section class="users">
        <h3>Newest Users</h3>
        <ul>
            <?php while( $row = $result->fetch() ){ ?>
            <li class="user">
                <img src="<?php echo $row['profile_pic']; ?>" width="50" height="50">
                <?php echo $row['username']; ?>
                USERNAME
            </li>
            <?php } ?>
        </ul>
    </section>
    <?php } //end if users ?>

    <?php 
    $result = $DB->prepare('SELECT category_id, name
                            FROM categories
                            ORDER BY name ASC
                            LIMIT 20');

    // run it
    $result->execute();
    //check it
    if( $result->rowCount() >= 1){
    ?>
    <section class="categories">
    <h3>Categories</h3>
        <ul>
            <?php while( $row = $result->fetch() ){ ?>
            <li>
                <?php echo $row['name']; ?>
            </li>
        <?php } ?>
        </ul>
    </section>
    <?php } ?>
    <?php 
    $result = $DB->prepare('SELECT tag_id, name
                            FROM categories
                            ORDER BY name ASC
                            LIMIT 20');

    // run it
    $result->execute();
    //check it
    if( $result->rowCount() >= 1){
    ?>
    <section class="tags">
    <h3>Tags</h3>
        <ul>
            <?php while( $row = $result->fetch() ){ ?>
            <li>
                <?php echo $row['name']; ?>
            </li>
        <?php } ?>
        </ul>
    </section>
    <?php } ?>
</aside>