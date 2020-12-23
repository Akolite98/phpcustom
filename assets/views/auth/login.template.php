<?php self::extends('layouts/header'); ?>


<section class="container" style="margin: 150px auto;">
    <div class="login auth mx-auto" style="width: 500px;">
        <form action="/login" class="form-group card shadow p-3" method="post">
            <h2 class="display-5 text-center border p-2 shadow rounded d-block">Login Form</h2>
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Type In your Email" value="<?php self::get('email'); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Type In your password" required>
            </div>

            <div class="form-group text-center">
                <input type="checkbox" name="remember" id="remember" value="1">
                <label for="remember">Remember Me</label>
            </div>

            <button class="btn btn-primary">Login</button>

            <p class="lead text-center mt-2">Don't Have an account <a href="/auth/register">Register Here</a></p>
        </form>
    </div>
</section>

<?php self::extends('error/message'); ?>


<?php self::extends('layouts/footer'); ?>