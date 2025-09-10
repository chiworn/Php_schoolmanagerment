<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wide Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/Login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="animated-bg">
    <!-- Top section -->
    <div class="bg-line small gradient-1" style="top: 5%; left: 8%; animation-delay: 0s;"></div>
    <div class="bg-line medium gradient-2" style="top: 8%; left: 25%; animation-delay: 0.3s;"></div>
    <div class="bg-line large gradient-3" style="top: 12%; left: 45%; animation-delay: 0.6s;"></div>
    <div class="bg-line small gradient-4" style="top: 15%; left: 65%; animation-delay: 0.9s;"></div>
    <div class="bg-line extra-large gradient-1" style="top: 18%; left: 85%; animation-delay: 1.2s;"></div>
    <div class="bg-line medium gradient-2" style="top: 3%; right: 15%; animation-delay: 1.5s;"></div>
    <div class="bg-line small gradient-3" style="top: 10%; right: 35%; animation-delay: 1.8s;"></div>
    <div class="bg-line large gradient-4" style="top: 7%; right: 55%; animation-delay: 2.1s;"></div>

    <!-- Second row -->
    <div class="bg-line medium gradient-1" style="top: 22%; left: 12%; animation-delay: 0.4s;"></div>
    <div class="bg-line small gradient-2" style="top: 25%; left: 30%; animation-delay: 0.7s;"></div>
    <div class="bg-line extra-large gradient-3" style="top: 28%; left: 50%; animation-delay: 1.0s;"></div>
    <div class="bg-line large gradient-4" style="top: 31%; left: 70%; animation-delay: 1.3s;"></div>
    <div class="bg-line small gradient-1" style="top: 34%; left: 88%; animation-delay: 1.6s;"></div>
    <div class="bg-line medium gradient-2" style="top: 20%; right: 20%; animation-delay: 1.9s;"></div>
    <div class="bg-line large gradient-3" style="top: 26%; right: 40%; animation-delay: 2.2s;"></div>
    <div class="bg-line small gradient-4" style="top: 32%; right: 60%; animation-delay: 2.5s;"></div>

    <!-- Third row -->
    <div class="bg-line large gradient-1" style="top: 38%; left: 5%; animation-delay: 0.8s;"></div>
    <div class="bg-line small gradient-2" style="top: 42%; left: 22%; animation-delay: 1.1s;"></div>
    <div class="bg-line medium gradient-3" style="top: 45%; left: 40%; animation-delay: 1.4s;"></div>
    <div class="bg-line extra-large gradient-4" style="top: 48%; left: 58%; animation-delay: 1.7s;"></div>
    <div class="bg-line small gradient-1" style="top: 51%; left: 78%; animation-delay: 2.0s;"></div>
    <div class="bg-line large gradient-2" style="top: 36%; right: 10%; animation-delay: 2.3s;"></div>
    <div class="bg-line medium gradient-3" style="top: 44%; right: 28%; animation-delay: 2.6s;"></div>
    <div class="bg-line small gradient-4" style="top: 50%; right: 48%; animation-delay: 2.9s;"></div>

    <!-- Fourth row -->
    <div class="bg-line medium gradient-1" style="top: 55%; left: 15%; animation-delay: 1.2s;"></div>
    <div class="bg-line extra-large gradient-2" style="top: 58%; left: 35%; animation-delay: 1.5s;"></div>
    <div class="bg-line small gradient-3" style="top: 62%; left: 55%; animation-delay: 1.8s;"></div>
    <div class="bg-line large gradient-4" style="top: 65%; left: 75%; animation-delay: 2.1s;"></div>
    <div class="bg-line medium gradient-1" style="top: 68%; left: 92%; animation-delay: 2.4s;"></div>
    <div class="bg-line small gradient-2" style="top: 54%; right: 18%; animation-delay: 2.7s;"></div>
    <div class="bg-line large gradient-3" style="top: 60%; right: 38%; animation-delay: 3.0s;"></div>
    <div class="bg-line medium gradient-4" style="top: 66%; right: 58%; animation-delay: 3.3s;"></div>

    <!-- Fifth row -->
    <div class="bg-line small gradient-1" style="top: 72%; left: 8%; animation-delay: 1.6s;"></div>
    <div class="bg-line large gradient-2" style="top: 75%; left: 28%; animation-delay: 1.9s;"></div>
    <div class="bg-line medium gradient-3" style="top: 78%; left: 48%; animation-delay: 2.2s;"></div>
    <div class="bg-line extra-large gradient-4" style="top: 81%; left: 68%; animation-delay: 2.5s;"></div>
    <div class="bg-line small gradient-1" style="top: 84%; left: 85%; animation-delay: 2.8s;"></div>
    <div class="bg-line medium gradient-2" style="top: 70%; right: 12%; animation-delay: 3.1s;"></div>
    <div class="bg-line large gradient-3" style="top: 76%; right: 32%; animation-delay: 3.4s;"></div>
    <div class="bg-line small gradient-4" style="top: 82%; right: 52%; animation-delay: 3.7s;"></div>

    <!-- Bottom section -->
    <div class="bg-line medium gradient-1" style="top: 88%; left: 18%; animation-delay: 2.0s;"></div>
    <div class="bg-line small gradient-2" style="top: 91%; left: 38%; animation-delay: 2.3s;"></div>
    <div class="bg-line large gradient-3" style="top: 94%; left: 58%; animation-delay: 2.6s;"></div>
    <div class="bg-line medium gradient-4" style="top: 97%; left: 78%; animation-delay: 2.9s;"></div>
    <div class="bg-line extra-large gradient-1" style="top: 86%; right: 8%; animation-delay: 3.2s;"></div>
    <div class="bg-line small gradient-2" style="top: 92%; right: 25%; animation-delay: 3.5s;"></div>
    <div class="bg-line large gradient-3" style="top: 89%; right: 45%; animation-delay: 3.8s;"></div>
    <div class="bg-line medium gradient-4" style="top: 95%; right: 65%; animation-delay: 4.1s;"></div>

    <!-- Additional scattered elements -->
    <div class="bg-line small gradient-1" style="top: 13%; left: 72%; animation-delay: 0.5s;"></div>
    <div class="bg-line medium gradient-2" style="top: 27%; left: 18%; animation-delay: 1.1s;"></div>
    <div class="bg-line large gradient-3" style="top: 41%; left: 82%; animation-delay: 1.7s;"></div>
    <div class="bg-line small gradient-4" style="top: 57%; left: 6%; animation-delay: 2.3s;"></div>
    <div class="bg-line extra-large gradient-1" style="top: 73%; left: 62%; animation-delay: 2.9s;"></div>
    <div class="bg-line medium gradient-2" style="top: 87%; left: 42%; animation-delay: 3.5s;"></div>
    <div class="bg-line small gradient-3" style="top: 16%; right: 8%; animation-delay: 0.8s;"></div>
    <div class="bg-line large gradient-4" style="top: 33%; right: 72%; animation-delay: 1.4s;"></div>
    <div class="bg-line medium gradient-1" style="top: 47%; right: 22%; animation-delay: 2.0s;"></div>
    <div class="bg-line small gradient-2" style="top: 63%; right: 82%; animation-delay: 2.6s;"></div>
    <div class="bg-line extra-large gradient-3" style="top: 79%; right: 18%; animation-delay: 3.2s;"></div>
    <div class="bg-line large gradient-4" style="top: 93%; right: 78%; animation-delay: 3.8s;"></div>
</div>

    <div class="login-container">
        <div class="login-card">
            <div class="row g-0 h-100">
                <!-- Left Side - Branding -->
                <div class="col-lg-5 col-md-6">
                    <div class="login-left h-100">
                        <div>
                            <div class="brand-logo">
                                <div >
                                    <i  style="font-size: 130px;" class=" fa-solid fa-graduation-cap" ></i>
                                </div>
                               
                            </div>
                            <h5 class="brand-title"> ETEC CENTER</h5>
                            <p class="brand-subtitle">Sign in to continue to your dashboard</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Login Form -->
                <div class="col-lg-7 col-md-6">
                    <div class="login-right">
                        <h3 class="form-title">Sign In</h3>
                        
                        <form method="post" >
                            <div class="form-floating">
                                <input type="email" class="form-control" name="gamil" id="floatingEmail" placeholder="name@example.com" required>
                                <label for="floatingEmail">
                                    <i class="fas fa-envelope me-2"></i>Email address
                                </label>
                            </div>
                            
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">
                                    <i class="fas fa-lock me-2"></i>Password
                                </label>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot-password">Forgot Password?</a>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-login">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </button>
                        </form>
                        
                    
                            <p class="mt-3 text-muted ms-5 ps-4">
                                Don't have an account? <a href="./Create_account.php" class="forgot-password">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
    include "../Connections.php";
    global $con;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $Gamil = $_POST['gamil'];
        $Password = $_POST['password'];
       

        $select = "SELECT  `Admin_Email`, `Password` FROM `tb_Admin` WHERE `Admin_Email`= '$Gamil' AND  `Password`= '$Password' ";
        $res = $con->query($select);
        if($res->num_rows>0){
                echo'<script>window.location.href="./index.php?email='.$Gamil.'& pass='.$Password.' " </script>';
                 $_SESSION['user'] = $Gamil;
        }else{
          echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href=\"#\">Why do I have this issue?</a>'
            });
        </script>";

        }
            
          
    } 

?>