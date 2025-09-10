<?php 
$gamil = $_GET['email'];
$password = $_GET['pass'];
include "../Connections.php";
session_start();
$email=$_SESSION['user'];
global $con;
$selcet = "SELECT `Admin_ID`, `Admin_name`, `Admin_Email`, `Password`, `Profile` FROM `tb_Admin` WHERE `Admin_Email`='$email'";
$res = $con->query($selcet);
while($row= $res->fetch_assoc()){
    $id = $row['Admin_ID'];
    $name = $row['Admin_name'];
    $image = $row['Profile'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin instructor</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="./assets/style/bootstrap.css">
    <script src="./assets/js/bootstrap.js"></script>
    <!-- css  -->
     <link rel="stylesheet" href="./assets/style/sidebar.css">
     <!-- font awsome  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
        .summary-box {
    background-color: #1b8742; /* green background */
    border-radius: 7px;
    max-width: 200px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    font-size: 16px;
}
.summary-box h5,
.summary-box p {
    margin: 0;
    color: #fff;
    
}

        .card-container {
      gap: 20px;
    }
    .card:hover {
      transform: translateY(-5px);
    }

        td{
             font-family: 'Winky Rough', sans-serif;
              font-size: 21px !important;
        }

  
        th{
            font-family: 'Winky Rough', sans-serif;
            font-size: 23px !important;

        }
        #exampleModal .modal-dialog {
        max-width: 800px !important;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color:rgb(255, 255, 255);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
            margin-left: -40px !important;
            margin-bottom: 330px !important;
           transform: scale(1.05);        /* zoom in */
            box-shadow: 0 8px 20px rgba(0,0,0,0.2); /* add shadow */

        

        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
             transition: 0.5s;
        }
        
        .dropdown-content a:hover {
            background-color: #f1f1f1;
            
        }
        
        /* Show dropdown on hover */
        .dropdown-container:hover .dropdown-content {
            display: block;

            
           
        }
        .class_attendent{
        max-height: 68vh;  /* Limit to 80% of viewport height */
        overflow-y: auto;  /* Enable vertical scrolling */
        padding-right: 20px;
        }
        .class_views{
        max-height: 68vh;  /* Limit to 80% of viewport height */
        overflow-y: auto;  /* Enable vertical scrolling */
        padding-right: 20px;
        }
       .class-container {
        max-height: 78vh;  /* Limit to 80% of viewport height */
        overflow-y: auto;  /* Enable vertical scrolling */
        padding-right: 20px; /* So scrollbar doesn’t overlap content */
    }

    /* Optional: Make scrollbar nicer */
    .class-container::-webkit-scrollbar {
        width: 8px;
    }
    .class-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }
    .class-container::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

            .modal-dialog.custom-width {
        width: 500px !important;
        max-width: 500px !important;
        }
        .apk-card {
            /* max-width: 460px; */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .apk-header {
            background-color:  rgb(74, 31, 195);
            padding: 15px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .apk-status {
            background-color: white;
            color:rgb(74, 31, 195);
            padding: 3px 10px;
            border-radius: 8px;
            font-size: 0.9rem;
        }
        
        .apk-body {
            padding: 20px;
            background-color: white;
        }
        
        .apk-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }
        
        .apk-detail {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .apk-detail-label {
            color: #666;
            font-weight: 500;
        }
        
        .apk-detail-value {
            color: #333;
            font-weight: bold;
        }
        
        .apk-button {
            background-color:rgb(74, 31, 195);
            color: white;
            border: none;
            /* padding: 10px 9px; */
            border-radius: 5px;
            width: 100%;
            font-weight: bold;
            margin-top: 15px;
            transition: background-color 0.3s;
        }
        
        .apk-button:hover {
            background-color: rgb(159, 124, 255);
            
        }
        .apk-button-delete{
            background-color: rgb(230, 22, 74);
            color: white;
            border: none;
            /* padding: 10px 20px; */
            border-radius: 5px;
            width: 100%;
            font-weight: bold;
            margin-top: 15px;
            transition: background-color 0.3s;
        }
        .apk-button-edit{
            background-color: rgb(219, 182, 13);
            color: white;
            border: none;
            /* padding: 10px 20px; */
            border-radius: 5px;
            width: 100%;
            font-weight: bold;
            margin-top: 15px;
            transition: background-color 0.3s;
        }
     </style>
</head>
<body>
   <main class="admin">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-2 bg-admin p-0" >
                    <div class="content-left ">
                        <div class="wrap-top  p-3 mt-4">
                            <div class="d-flex justify-content-between align-items-start ps-1 pe-2">
                                <i style="font-size:80px" class="fa-solid fa-graduation-cap text-white"></i>
                                <div class=" pt-2 ms-1">
                                    <h3 class="my-text text-center text-white mt-2 p-0 mb-0 ">ETEC-CENTER </h4>
                                             <p class="my-text text-white">bluid your iT skill</p>
                                </div>
                            </div>
                       
                          
                        </div> <hr class="text-white ">
                        <div class="wrap-buttom  w-100">
                        <div class="d-flex justify-content-between flex-column aling-items-between" style="height: 80vh;">
                            <ul style="list-style-type:none;"  class="w-100 p-0 ">
                                <li><a href="./index.php"><i class="fa-regular fa-house me-2"></i> Home</a></li>
                                <li><a href="./instructor.php"><i class="fa-regular fa-user me-2"></i> Instrustor_ID : 00 <?php  echo trim($id); ?> </a>  </li>
                                <li><a href="./Add_class.php"><i class="fa-regular fa-square-plus me-2"></i> Add_Class</a> </li>
                                <li><a href=""><i class="fa-regular fa-user"></i> Profile</a> </li>
                            </ul>
                                <div class="w-100 d-flex flex-column justify-content-center align-items-center mt-5">
                                <?php  
                                    echo '<img width="150px" class="rounded-3" src="'.$image.'" alt="Profile">';
                                    echo '<h6 class="text-center mt-3 my-text fs-5 text-white">Instructor: '.$name.'</h6>'
                                    ?>


                                </div>
                             <ul style="list-style-type:none;"  class="w-100 p-0">
                                <li><a href="./logout.php" class="text-danger"><i class="fa-solid fa-right-from-bracket me-2 text-danger"></i>logout</a></li>
                            </ul>
                        </div>
                            

                        </div>
                    </div>
                    
                </div>
                
               