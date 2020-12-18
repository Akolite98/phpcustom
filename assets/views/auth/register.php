<?php self::extends('layouts/header.php'); ?>


<section class="container" style="margin: 100px auto;">
    <div class="auth mx-auto" style="width: 500px;">
        <form action="" class="form-group card shadow p-3">
            <h2 class="display-5 text-center border p-2 shadow rounded d-block">Register Form</h2>

            <div class="form-group mt-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Type In your Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Type In your password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Type In your password again">
            </div>

            <div class="form-group text-center">
                <input type="checkbox" name="agreement" id="agreement" value="1">
                <label for="agreement">I agree to all <a href="">Terms and conditions</a> of using Viceo store</label>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            <p class="lead text-center mt-2">Already have an account? <a href="/auth/login">Login Here</a></p>
        </form>
    </div>
</section>



<?php self::extends('layouts/footer.php'); ?>