<?php self::extends('layouts/header'); ?>


<section class="container" style="margin: 100px auto;">
    <div class="auth mx-auto" style="width: 500px;">
        <form action="/register" class="form-group card shadow p-3" method="POST">
            <h2 class="display-5 text-center border p-2 shadow rounded d-block">Register Form</h2>

            <div class="form-group mt-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Type in your name" required value="<?php self::get('name'); ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Type In your Email" required value="<?php self::get('email'); ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Type In your password" required >
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Type In your password again" required>
            </div>

            <div class="form-group text-center">
                <input type="checkbox" name="agreement" id="agreement" value="1" required>
                <label for="agreement">I agree to all <a href="">Terms and conditions</a> of using Viceo store</label>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <p class="lead text-center mt-2">Already have an account? <a href="/auth/login">Login Here</a></p>
        </form>
    </div>
</section>

<?php self::extends('error/message'); ?>



<?php self::extends('layouts/footer'); ?>