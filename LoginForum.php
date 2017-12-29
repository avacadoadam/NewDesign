<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>\Login</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
    <link rel="stylesheet" href="CSS/LoginCSS.css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'PHPincludes/Login.php';

    }

    elseif (isset($_POST['register'])) { //user registering

        require 'PHPincludes/Register.php';

    }
}
?>
<aside>
    <a href="index.php#HomePage"><h1  style="margin-top: 100%">Home Page</h1></a>
    <a href="index.php#Aboutme"><h1 >About me</h1></a>
    <a href="index.php#Projects"><h1 style="margin-bottom: 100%">Projects</h1></a>

</aside>


    <div class="form">
        <ul class="tab-group" >
            <li class="tab"><a href="#signup">Sign Up</a></li>
            <li class="tab active"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">

            <div id="login">
                <h1>Welcome Back!</h1>

                <form action="LoginForum.php" method="post" autocomplete="off">

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" required autocomplete="off"  name="email"/>
                    </div>

                    <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                        <input type="password" placeholder="password" required autocomplete="off" name="password"/>
                    </div>

                    <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

                    <button class="button button-block" name="login" />Log In</button>

                </form>

            </div>

            <div id="signup">
                <h1>Sign Up for Free</h1>

                <form action="LoginForum.php" method="post" autocomplete="off">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name='firstname' />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name='lastname' />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email"required autocomplete="off" name='email' />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Password<span class="req">*</span>
                        </label>
                        <input type="password"required autocomplete="off" name='password'/>
                    </div>

                    <button type="submit" class="button button-block" name="register" />Register</button>

                </form>

            </div>
        </div>
    </div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('.form').find('input, textarea').on('keyup blur focus', function (e) {

        var $this = $(this),
            label = $this.prev('label');

        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {

            if( $this.val() === '' ) {
                label.removeClass('highlight');
            }
            else if( $this.val() !== '' ) {
                label.addClass('highlight');
            }
        }

    });

    $('.tab a').on('click', function (e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });</script>



</body>
</html>