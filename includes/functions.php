<?php

//display any ugly timestamp as a nice looking date
function nice_date( $date ){
    $nice_date = new DateTime( $date );
    echo $nice_date->format( '1, F jS, Y' );
}

function time_ago($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}




//count the number of apporoved comments on any post
function count_comments( $id = 0 ){
    //tell the function to use the DB connection from the global scope
    global $DB;
    //write the query
    $result = $DB->prepare('SELECT COUNT(*) AS total
                            FROM comments
                            WHERE post_id = ?');
    //run it
    $result->execute( array( $id 
    ) );
    //check it
    if($result->rowCount() >= 1 ){
    //loop it
    while( $row = $result->fetch() ){
        //return the count
        echo $row['total'];
        }
    }
}

function show_profile_pic( $profile_pic, $size = 50 ){
    if( $profile_pic == '' ){
        $profile_pic = 'images/user.png';
    }
    echo "<img src='$profile_pic' width='$size' height='$size'>";
}


//no close php