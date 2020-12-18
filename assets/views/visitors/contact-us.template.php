<?php self::extends('layouts/header'); ?>

<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Contact Us</h1>
        <h2 class="masthead-subheading mb-0">Viceo Store Online</h2>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>


<section class="container-fluid contact ">
    <div class="row container my-5 mx-auto p-1">
        <div class="col-lg-6">
            <h2 class="display-5">We Look Forward To Hearing From You.</h2>
            <p class="lead">Contact Our 24/7 Customer Care</p>
        </div>

        <div class="col-lg-6">
            <form action="" class="form-group card p-2 shadow">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Type In your Name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="name" id="name" class="form-control" placeholder="Type in your email">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" style="height:200px;"></textarea>
                </div>

                <div class="container text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</section>


<?php self::extends('layouts/footer'); ?>