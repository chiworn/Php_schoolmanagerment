<?php include('./Sidebar.php'); 
      include('../Connections.php');
        $ID = $_GET['classID'];
        global $con;
            $select="SELECT s.* , c.class_id, c.Cours_name,c.build,c.term,c.time, c.Room  FROM `tb_classes` AS c
            INNER JOIN `tb_STU` AS s ON c.class_id = s.IDCLASS WHERE s.IDCLASS  = '$ID' ";
            $res = $con->query($select);
            $row = $res->fetch_assoc();
        
      ?>
 <div class="col-10">
                    
                    <div class="col-12 d-flex justify-content-between py-2 px-4 ps-5 mt-2 mb-3 ">
                            <h3 class="my-text fs-2">Report Attendent Today </h3>
                          
                            </div>
                            <div class="col-12  px-5 class_attendent">
                                <table class="table table-hover table-bordered align-middle text-center ">
                                    <thead class="table-primary">
                                        <tr class="text-center">
                                            <th >ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Reson</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                       echo '
                                            <tr class="text-center">
                                             <form method="POST" action="">
                                            <td>
                                                '.$row['IDSTU'].'
                                                <input type="hidden" name="id" value="'.$row['IDSTU'].'">
                                            </td>
                                            <td>
                                                '.$row['Name'].'
                                                <input type="hidden" name="Name" value="'.$row['Name'].'"></td>
                                            <td>
                                                '.$row['SEX'].'
                                                <input type="hidden" name="SEX" value="'.$row['SEX'].'"></td>
                                            </td>
                                            <td class="w-25"><input type="text" name="Reson" class="form-control ps-4" placeholder="Enter Reson here....."></td>

                                            <td class="w-25">
                                            <div class="p-0 m-0 ">   
                                                    <button  type="sumit" name="action" value="approve" class="text-white border-0 btn btn-success my-text fs-5 btn "><i class="fa-regular fa-square-check"></i></button>
                                                    <button value="message" name="action" class="text-white btn btn-primary my-text border-0 fs-5 btn"><i class="fa-regular fa-message"></i></button>
                                                    <button value="reject" name="action" class="text-white btn btn-danger my-text border-0 fs-5 btn"><i class="fa-regular fa-calendar-xmark"></i></button>
                                                </div></td>
                                                </form>
                                        </tr>';
                                        
                                        while($row = $res->fetch_assoc()){
                                            echo '
                                            <tr class="text-center">
                                             <form method="POST" action="">
                                            <td>
                                                '.$row['IDSTU'].'
                                                <input type="hidden" name="id" value="'.$row['IDSTU'].'">
                                            </td>
                                            <td>
                                                '.$row['Name'].'
                                                <input type="hidden" name="Name" value="'.$row['Name'].'"></td>
                                            <td>
                                                '.$row['SEX'].'
                                                <input type="hidden" name="SEX" value="'.$row['SEX'].'"></td>
                                            </td>
                                            <td class="w-25"><input type="text" name="Reson" class="form-control ps-4" placeholder="Enter Reson here....."></td>

                                            <td class="w-25">
                                            <div class="p-0 m-0 ">   
                                                    <button  type="sumit" name="action" value="approve" class="text-white border-0 btn btn-success my-text fs-5 btn "><i class="fa-regular fa-square-check"></i></button>
                                                    <button value="message" name="action" class="text-white btn btn-primary my-text border-0 fs-5 btn"><i class="fa-regular fa-message"></i></button>
                                                    <button value="reject" name="action" class="text-white btn btn-danger my-text border-0 fs-5 btn"><i class="fa-regular fa-calendar-xmark"></i></button>
                                                </div></td>
                                                </form>
                                        </tr>';
                                        }
                                 
                                        ?>
                                     
                                    </tbody>
                                </table>
                                   <div class="d-flex justify-content-end">
                                    <a href="./Views_Student.php?ClassID=<?php echo $ID ?>" class="btn btn-primary my-text px-4 fs-5">End task</a>
                                    </div>

                            </div>
                </div>
            </div>
        </div>
   </main>
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $ID     = $_POST['id'];
    $Name   = $_POST['Name'];
    $SEX    = $_POST['SEX'];
   
    $action = $_POST['action'];
    $present=null;
    global $con;
    date_default_timezone_set('Asia/phnom_penh');
    $time = date('y-m-d_H:i:s');
    if($action == "approve"){
        $present = "P";
        $Reson = "Present";
        $insert="INSERT INTO `tb_attendents`( `Present`, `time`, `Resson`, `StudentID`, `Create_at`, `update_at`) VALUES ('$present','$time','$Reson','$ID','$time','$time')";
        $res = $con->query($insert);
        if($res){
             echo' <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
             <script>Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title:  "present success",
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                        title: "swal-title-custom"
                        }
                        })
                </script>';
        }
    }elseif($action == "message"){
        $present = "A";
        $Reson  = $_POST['Reson'];
        $insert="INSERT INTO `tb_attendents`( `Present`, `time`, `Resson`, `StudentID`, `Create_at`, `update_at`) VALUES ('$present','$time','$Reson','$ID','$time','$time')";
        $res = $con->query($insert);
        if($res){
             echo' <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
             <script>Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title:  "Reson success",
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                        title: "swal-title-custom"
                        }
                        })
                </script>';
        }

    }
  
}
?>
