<?php
include('header.php');
include('connect.php');
?>
<form>
    <div class="login-form-body">
        <div class="form-gp">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" type="email" id="exampleInputEmail1" name="email">
            <i class="ti-email"></i>
            <div class="text-danger"></div>
        </div>
        <div class="form-gp">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" id="exampleInputPassword1" name="password">
            <i class="ti-lock"></i>
            <div class="text-danger"></div>
        </div>
        <div class="row mb-4 rmber-area">
            <div class="col-6">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                </div>
            </div>
            <div class="col-6 text-right">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
        <div class="submit-btn-area">
            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
            <div class="login-other row mt-4">

            </div>
        </div>
        <div class="form-footer text-center mt-5">
            <p class="text-muted">Don't have an account? <a href="register.php">Sign up</a></p>
        </div>
    </div>

</form>


<?php
include('footer.php');
?>