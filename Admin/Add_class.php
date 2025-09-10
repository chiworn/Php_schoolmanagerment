<?php include('./Sidebar.php');
      include "../Connections.php";
?>
<div class="col-10">
    <div class="col-12 d-flex justify-content-between py-2 px-4 mt-2 ">
                            <h1 class="my-text mt-2">Add News Class</h1>
                            <h4 class="my-text">-------</h4>
                        </div>
                        <div class="ps-3">
                            <hr style="color: rgb(159, 124, 255);" >
                        </div>
                        <div class="col-12 d-flex justify-content-between py-2 px-4 ps-4 ms-2 mt-2 ">
                            <h3 class="my-text">---</h3>
                        </div>
                    <div class="col-12 px-4" >
                        <div class="border border-2 rounded-3">
                         <div style="background-color: rgb(159, 124, 255);" class="w-100 p-2 rounded-3 my-text fs-3 text-white ">Class information</div>
                         <form action="" method="post"  class=" p-3 mb-0">
                                <div class="form-group my-3 d-flex justify-content-between w-100 ">
                                    <div class="w-100 me-2">
                                        <label for="classname" class="fs-5 my-text">Course Name: </label>
                                    <select name="classname" id="classname" class="form-select" class="">
                                        <option value="Basic C/C++ ">Basic C/C++ </option>
                                        <option value="Web Frontend">Web Frontend </option>
                                        <option value="Web Backend">Web Backend </option>
                                        <option value="Basic Java">Basic Java </option>
                                        <option value="Basic php">Basic php </option>
                                    </select>
                                    </div>
                                    <div class="w-100 ms-2">
                                         <label  style="font-family: Winky Rough " class="fs-5">Time:</label>
                                    <select name="time" id="time" class="form-select">
                                        <option disabled value="">Monday -- thurday</option>
                                        <option  value="9:00 - 10:30 AM">9:00 - 10:30 AM</option>
                                        <option  value="11:00 - 12:15 AM">11:00 - 12:15 AM</option>
                                        <option  value="12:30 - 1:45 AM">11:00 - 12:15 AM</option>
                                        <option disabled value="">Saturday -- sunday</option>
                                        <option  value="8:00 - 11:00 AM ">8:00 - 11:00 AM</option>
                                        <option  value="11:00 - 1:45 AM ">11:00 - 1:45 PM</option>
                                        <option  value="2:00 - 5:00 AM">2:00 - 5:00 PM</option>   
                                    </select>
                                    </div>  
                                </div>
                                <div class="form-group mt-3 d-flex justify-content-between w-100">
                                     <div class="w-100 me-2">
                                    <label   class="fs-5 my-text">Status:</label>
                                    <select name="status" id="status" class="form-select">
                                         <option  value="physical" class="my-text2">physical</option>
                                    </select>
                                </div>
                                <div class="w-100 ms-2">
                                    <label  style="font-family: Winky Rough " class="fs-5">Term:</label>
                                    <select name="term" id="term" class="form-select">
                                         <option class="my-text2" value="Monday -- Tuesday">Monday -- Tuesday</option>
                                          <option class="my-text2"  value="Sutarday -- Sunday">Sutarday -- Sunday</option>
                                    </select>
                                  </div>
                                </div>
                                  <div class="form-group mt-3 d-flex justify-content-between w-100">
                                     <div class="w-100 me-2">
                                    <label    class="fs-5 my-text">Building:</label>
                                    <select name="Bulid" id="Bulid" class="form-select">
                                         <option  value="Etec-center-1" class="my-text2">Etec-center-1</option>
                                         <option  value="Etec-center-2" class="my-text2">Etec-center-2</option>
                                         <option  value="Etec-center-3" class="my-text2">Etec-center-3</option>
                                    </select>
                                </div>
                                <div class="w-100 ms-2">
                                    <label  style="font-family: Winky Rough " class="fs-5">Room:</label>
                                    <select name="room" id="status" class="form-select">
                                        <option class="my-text2" value="101">101</option>
                                        <option class="my-text2" value="102">102</option>
                                        <option class="my-text2" value="103">103</option>
                                    </select>
                                  </div>
                                </div>
                             
                                <div class="modal-footer ms-2  pt-4 p-0 mb-0">
                            <button type="button" class="btn btn-secondary fs-5 me-2" data-bs-dismiss="modal" style="font-family: Winky Rough">Close</button>
                            <button type="sumit" class="btn btn-primary fs-5 my-text"  >Add this Class</button>
                            </div>
                            </form>
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
    $course = $_POST['classname'];
    $time = $_POST['time'];
    $status = $_POST['status'];
    $term = $_POST['term'];
    $Bulid = $_POST['Bulid'];
    $room = $_POST['room'];

    global $con;
    $insert = "INSERT INTO `tb_classes`(`Cours_name`, `time`, `status`, `term`, `build`, `Room`, `staff_id`) VALUES ('$course','$time','$status','$term','$Bulid','$room','$id')";
    if ($con->query($insert) === TRUE) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Inserted Successfully!',
            text: 'Your class has been added to the database.',
            showConfirmButton: false,
            timer: 2000
        })
            .then(() => {
            window.location = './instructor.php'; // Redirect after alert
        });
        </script>
        ";
    } else {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Insert Failed',
            text: 'There was a problem adding the class.',
            confirmButtonText: 'OK'
        });
        </script>
        ";
    }
}

?>