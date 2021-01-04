<main class="bd-content container">
    <h2 class="mb-4">Account login</h2>

    <?php  if(isset($error)){ echo '<p class="alert alert-danger">'. $error .'</p>'; } ?>

    <div class="row">
        <div class="col col-md-6 col-lg-4">
            <form action="" method="post">
                <div class="form-group">
                    <label class="d-block" for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" autofocus autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="d-block" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <input type="submit" class="btn btn-primary" name="form-login" value="Login">
            </form>
        </div>
    </div>
</main>