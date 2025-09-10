<?php  include('./Sidebar.php')?>
                <div class="col-10 px-3">
                        <div class="col-12 d-flex justify-content-between py-2 px-4 mt-2 ">
                            <h1 class="my-text">Views all class</h1>
                            <h4 class="my-text ">instructor : <?php echo $name ?></h4>
                        </div>
                        <div class="ps-3">
                            <hr style="color: rgb(159, 124, 255);" >
                        </div>
                         <div class="col-12 d-flex justify-content-between py-2 px-4 ps-5 mt-2 ">
                            <h3 class="my-text">---</h3>
                           <a  class="my-text btn btn-primary ps-3 pe-3 fs-5" href="./Add_class.php"> Add newsClass<i class="fa-regular fa-square-plus ms-1"></i> </a>  
                        </div>
                            
                        
                     <div class="row mt-4 mx-3 class-container" >
                        <?php 
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);
                        include "../Connections.php";
                        global $con;
                       $select = "
                            SELECT 
                                c.class_id,
                                c.Cours_name,
                                c.time,
                                c.status,
                                c.term,
                                c.build,
                                c.Room,
                                c.staff_id,
                                c.Create_at,
                                c.update_at,
                                COUNT(s.IDSTU) AS total_students
                            FROM tb_classes AS c
                            LEFT JOIN tb_STU AS s 
                                ON c.class_id = s.IDCLASS
                            WHERE c.staff_id = '$id'
                            GROUP BY 
                                c.class_id,
                                c.Cours_name,
                                c.time,
                                c.status,
                                c.term,
                                c.build,
                                c.Room,
                                c.staff_id,
                                c.Create_at,
                                c.update_at
                            ";

                        // $select ="SELECT `class_id`, `Cours_name`, `time`, `status`, `term`, `build`, `Room`, `staff_id`, `Create_at`, `update_at` FROM `tb_classes` WHERE `staff_id` = '$id'";
                        $res = $con->query($select);
                        if(!$res){
                        die("Query Error: " . $con->error);  // show SQL errors
                    }
                        while($row=$res->fetch_assoc()){
                            echo '
                             <div class="col-4  p-3 " 
                             style="position: relative;
                                   
                              ">
                            <div class="apk-card mx-auto">
                                <div class="apk-header py-4">
                                    <span class="text-white">Crouse Class:</span>
                                    <span class="apk-status">instructor: '.$row['Cours_name'].' </span>
                                </div>
                                
                                <div class="apk-body">
                                    
                                    <div class="apk-detail">
                                        <span class="apk-detail-label">Date</span>
                                        <span class="apk-detail-value">'.$row['Create_at'].'</span>
                                    </div>
                                    
                                    <div class="apk-detail">
                                        <span class="apk-detail-label">Students  :</span>
                                        <span class="apk-detail-value">'.$row['total_students'].'</span>
                                    </div>
                                    
                                    <div class="apk-detail">
                                        <span class="apk-detail-label">Times :</span>
                                        <span class="apk-detail-value">'.$row['time'].'</span>
                                    </div>
                                     <div class="apk-detail">
                                        <span class="apk-detail-label">Term :</span>
                                        <span class="apk-detail-value">'.$row['term'].'</span>
                                    </div>
                                     <div class="apk-detail">
                                        <span class="apk-detail-label">Room :</span>
                                        <span class="apk-detail-value">'.$row['Room'].'</span>
                                    </div>
                                      
                                    <div class="d-flex w-100 ">
                                    
                                        <a href="./Views_Student.php?ClassID='.$row['class_id'].'" class="apk-button mx-1 my-text text-center px-5 py-1"> Views<i class="fa-regular fa-eye ms-1"></i></a>
                                         <div class="dropdown-container">
                                        
                                            <button type="button" class="apk-button mx-1 my-text py-2  d-flex align-items-center">
                                                option  <i class="ms-1 fa-solid fa-align-justify"></i>
                                                 <div class="dropdown-content
                                                 ">
                                                <a href="#">Transfer</a>
                                                <a href="#">Update</a>
                                                <a classid='.$row['class_id'].' data-bs-toggle="modal" data-bs-target="#exampleModal" id="IDClass" href="#">Add Students</a>
                                                <a href="#" class="text-danger">Pre-End</a>
                                                <a href="#" class="text-danger">End</a>
                                            </div>
                                            </button>

                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                            ';}
                            
                        ?>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title my-text fs-2" id="exampleModalLabel">Add new Student</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-1 pt-0">
                                   <form action="" method="post"  class=" py-3 mt-0 my-0  mt-0 pt-0 " >
                                <div class="form-group my-3  d-flex justify-content-between w-100 px-3 ">
                                    <div class="w-100 me-2">
                                        <label for="classname" class="fs-5 my-text">Enter Name: </label>
                                       <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                    <div class="w-100 ms-2">
                                         <label  style="font-family: Winky Rough " class="fs-5">Enter Gender:</label>
                                        <input type="text" name="gender" class="form-control" placeholder="Enter your Gender">
                                   
                                    </div>  
                                </div>
                                <div class="form-group mt-3 d-flex justify-content-between w-100 pb-4 px-3">
                                     <div class="w-100 me-2">
                                    <label   class="fs-5 my-text">Enter Phone number:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your Gender">
                                
                                </div>
                                <div class="w-100 ms-2">
                                    <label  style="font-family: Winky Rough " class="fs-5">Status:</label>
                                   <select name="status" id="status" class="form-select">
                                         <option  value="physical" class="my-text2">physical</option>
                                          <option  value="Tinical" class="my-text2">Tinical</option>
                                          <input type="hidden" name="ID_class" class="ID_class">
                                    </select>
                                  </div>
                                </div>
                             
                                <div class="modal-footer ms-2  pt-4 p-0  ">
                            <button type="button" class="btn btn-secondary fs-5 me-2" data-bs-dismiss="modal" style="font-family: Winky Rough">Close</button>
                            <button type="sumit" class="btn btn-primary fs-5 my-text"  >Add this Class</button>
                            </div>
                            </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal  -->
                    </div>
                </div>
             </div>
         </div>
   </main>
   <script>
        $(document).on('click','#IDClass',function(){
            var IDclass = $(this).attr('classid');
            $('.ID_class').val(IDclass);
        })
   </script>
</body>
</html>

<?php
    include "../Connections.php";
    if($_SERVER['REQUEST_METHOD']=="POST"){
       $stu_name = $_POST['name'];
       $stu_gender =$_POST['gender'];
       $stu_phone = $_POST['phone'];
       $stu_status = $_POST['status'];
       $Idclass = $_POST['ID_class'];
       global $con;
       $insert = "INSERT INTO `tb_STU`(`Name`, `SEX`,`Phone`,`IDCLASS`)
        VALUES ('$stu_name','$stu_gender','$stu_phone','$Idclass')";
       $ress = $con->query($insert);
       if($ress){
        echo "  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
         <script>
        Swal.fire({
            icon: 'success',
            title: 'Inserted Successfully!',
            text: 'Your Student has been added to the Classthis.',
            showConfirmButton: false,
            timer: 2000
        }).then(()=>{
        window.location.href='./instructor.php';
        });
        </script> "
        ;
       }

    }
?>