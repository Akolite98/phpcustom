<section class="container-fluid bg-white p-2">
    <div class="card p-2">
        <p class="lead center">Welcome Back <?php self::auth('name'); ?></p>  
        <p>We miss you! What are you looking to purchase today!</p>
    </div>

    <div class="card p-2 home-image-container">
        <div class="card-header d-lg-flex justify-content-around align-items-center">
            <img src="<?php self::assets('img/01.jpg'); ?>" alt="" class="img-thumbnail" style="width: 200px;">

            <img src="<?php self::assets('img/02.jpg'); ?>" alt="" class="img-thumbnail" style="width: 200px;">

            <img src="<?php self::assets('img/03.jpg'); ?>" alt="" class="img-thumbnail" style="width: 200px;">
        </div>

        <div class="card-body">
            <marquee behavior="slow">Purchase High Quality Products From Victor's Store</marquee>
        </div>
    </div>
</section>