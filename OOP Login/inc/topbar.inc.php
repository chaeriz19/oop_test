<div class="layout-containerall">
    <div class="layout-toptop">
        <a href="/info">Info</a>
        <a href="/shop">Shop</a>
        <a href="/contact">Contact</a>
    </div>
    <div class="layout-topbar">
        <div class="layout-title">
           <a class="layout-title" href="https://chrisouboter.com/home">Website</a>
        </div>
        <div class="layout-topbar-buttons">
            <a class="
            
            <?php 
            
                if ($active == "gallery") {
                    echo 'active'; }
            ?>
            
            
            
            
            " href="/gallery">Gallery</a>
            <a href="<?php if ($_SESSION['is-loggedin']) {
                echo "user/{$_SESSION['username-loggedin']}";
            } ?>"><?php if ($_SESSION['is-loggedin']) {
                echo 'Profile';
            } else { echo '';}?></a>
            <a class="layout-logout-a" href="<?php if ($_SESSION['is-loggedin']) {
            echo '/logout';
            } else {
            echo '/login';} ?>">
            <?php if ($_SESSION['is-loggedin']) {
            echo 'Logout';
            } else {
            echo 'Login';} ?></a>


        </div>
            
    </div>

</div>
