<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['flash_message'])){
    echo '<div class="alert alert-danger alert-dismissible" style="position:fixed; bottom: 20px; right: 20px;"><span>'.$_SESSION['flash_message'].'</span><button  type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button></div>';

    unset($_SESSION['flash_message']);
}


?>



