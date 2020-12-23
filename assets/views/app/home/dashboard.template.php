<?php self::extends('layouts/appHeader'); ?>

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-2">
            <?php self::extends('app/home/mainContent'); ?>
        </div>


        <div class="col-lg-3 p-2">
            <?php self::extends('app/home/Category'); ?>
        </div>
    </div>
</section>

<?php self::extends('error/message'); ?>


<?php self::extends('layouts/appFooter'); ?>