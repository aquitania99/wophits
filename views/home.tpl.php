<div class="container">
    <div class="alert alert-warning alert-dismissible hidden text-center" role="alert" id="alert">
        <button type="button" onclick="reset()" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> No results found by this Country!
    </div>
    <form class="form-signin" id="loginForm" method="post" action="country">
        <h2 class="form-signin-heading"><?= $title ?></h2>
        <!--<label for="inputEmail" class="sr-only">Email address</label>-->
        <input type="text" id="inputCountry" name="inputCountry" class="form-control" placeholder="Enter Country" required="" autofocus="">
        <span style="padding:1em"></span>
<!--        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">-->
<!--        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember-me" value="remember-me"> Remember me
            </label>
        </div>-->
        <input type="hidden" name="submit" value="country">
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            <span style="margin-right: .5em;">Search</span><span class="glyphicon glyphicon-search"></span></button>
    </form>

</div>
<!--<script type="text/javascript" src="js/processData.js"></script>-->