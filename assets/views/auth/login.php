<?php self::extends('layouts/header.php'); ?>


<section class="container" style="margin: 150px auto;">
    <div class="login mx-auto" style="width: 500px;">
        <form action="" class="form-group card shadow p-3">
            <h2 class="display-5 text-center border p-2 shadow rounded d-block">Login Form</h2>
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Type In your Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Type In your password">
            </div>

            <button class="btn btn-primary">Login</button>
        </form>
    </div>
</section>



<?php self::extends('layouts/footer.php'); ?>