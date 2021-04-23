<div class="login-form m-5">
    <form action="controllers/Member.php" method="post">
        <h2 class="text-center">Sign in</h2>       
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
        </div>        
    </form>
    <!-- <p class="text-center"><a href="#">Create an Account</a></p> -->
</div>