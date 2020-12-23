<form action="/profile_post" method="post" class="form-group m-2 p-2 card">
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php self::auth('name'); ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php self::auth('email'); ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" value="<?php self::auth('location'); ?>" class="form-control">
    </div>


    <div class="text-center">
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
</form>