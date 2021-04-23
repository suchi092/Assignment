<?php
include("config.php"); 
 
 if (isset($_POST["submit"]))
{

	$name = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $qwe = "SELECT * FROM tbl_admin  WHERE username = '" . $name. "' and password = '" . $password . "'";
 
	$result = mysqli_query($con, $qwe);
	if ($row = mysqli_fetch_array($result)) 
	{
		
		$_SESSION['status'] = 'Active';
		
		echo '<script>window.location="home.php"</script>';

	} 
	else 
	{
		echo '<script>
        alert ("incorrect username and password");
        </script>';
	}														 
																 
															 
														
}					
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/ubold/layouts/purple/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 06:37:43 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CDA Campus Pvt. Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                    <img src="image/logo.jpg" alt="" height="75px">
                                   
                                    </a>
               
                                </div>

                                <form action="" method="post">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="username" id="username"  name="username" required="" placeholder="Enter your username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="password" id="password" placeholder="Enter your password">
                                    </div>

                                   

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-info btn-block" type="submit" name="submit"> Log In </button>
                                    </div>

                                </form>

                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                       
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
 2021 &copy; CDA Campus Pvt. Ltd
<a href="#" class="text-white-50"></a> 
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/purple/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 06:37:43 GMT -->
</html>