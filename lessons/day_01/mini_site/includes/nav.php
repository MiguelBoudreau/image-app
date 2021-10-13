
            <nav class="menu">
                <ul>

                    <li <?php
                    if(current_page == 'home' ){
                        echo 'class="current"';
                    }
                    ?>><a href="index.php">Home</a></li>
                    <li <?php
                    if(current_page == 'about' ){
                        echo 'class="current"';
                    }
                    ?>><a href="about.php">About</a></li>
                    <li <?php
                    if(current_page == 'gallery' ){
                        echo 'class="current"';
                    }
                    ?>><a href="gallery.php">Gallery</a></li>
                    <li <?php
                    if(current_page == 'contact' ){
                        echo 'class="current"';
                    }
                    ?>><a href="contact.php">Contact</a></li>
                </ul>
            </nav>