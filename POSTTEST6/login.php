<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>seek coding</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
    if(isset($_POST['proseslogin'])){
            $user=$_POST['username'];
            $pass=$_POST['password'];

            if($user=='admin' AND $pass=='admin123'){
                echo"
                <script>
                    document.location.href= 'admin.php';
                </script>
                ";
            }else if($user=='user' AND $pass=='user123'){
                echo"
                <script>
                    document.location.href= 'user.php';
                </script>
                ";
            }else{
                echo "username/password salah";
                echo"
                <script>
                    document.location.href= 'login.php';
                </script>
                ";
            }
    }
    ?>
    <nav>
        <div class="container">
            <div class="logo"><a href="">CIASSY&Co.</a></div>
        </div>
    </nav>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <input type='text'name="username"class='input-field'placeholder='Username' required >
		            <input type='password'name="password" class='input-field'placeholder='Enter Password' required>
		            <input type='checkbox'class='check-box'><span>Remember Password</span>
		            <button type='submit'class='submit-btn' name="proseslogin">Log in</button>
		        </form>
		        <form id='register' class='input-group-register'>
                    <input type='text'class='input-field'placeholder='First Name' required>
                    <input type='text'class='input-field'placeholder='Last Name ' required>
                    <input type='email'class='input-field'placeholder='Username' required>
                    <input type='password'class='input-field'placeholder='Enter Password' required>
                    <input type='password'class='input-field'placeholder='Confirm Password'  required>
                    <input type='checkbox'class='check-box'><span>I agree to the terms and                                                   conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	            </form>
                </div>
            </div>
        </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>