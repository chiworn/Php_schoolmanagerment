<?php include('./Sidebar.php'); 
      include('../Connections.php');
        $ID = $_GET['ClassID'];
        global $con;
            $select="SELECT s.* , c.class_id, c.Cours_name,c.build,c.term,c.time, c.Room  FROM `tb_classes` AS c
            INNER JOIN `tb_STU` AS s ON c.class_id = s.IDCLASS WHERE s.IDCLASS  = '$ID' ";
            $res = $con->query($select);
            $row = $res->fetch_assoc();
        
      ?>
 <div class="col-10">
                    <div class="col-12 mt-4 px-5"> 
                         <div style=" background-color: rgb(255, 255, 255); " class="card-container border border-2 d-flex justify-content-between   px-5 py-4 rounded-3" >
                            <!-- Card 1 -->
                            <div style="width:350px; background-color: rgb(159, 124, 255); " class="shadow d-flex justify-content-center align-items-center p-3 rounded-3">
                                <p> <i class="fa-solid fa-people-roof text-white " style="font-size:45px"></i></p>
                               <div class="text-center ms-4">
                                <p class="my-text  fs-4 fw-bold mb-0 pb-0 text-white"><?php echo $row['Cours_name']?></p>
                                <p class="my-text fs-4 mt-0 pt-0  text-white">Project </p>
                               </div> 
                            </div>
                            <!-- Card 1 -->
                            <div style="width:350px; background-color: rgb(159, 124, 255); " class="shadow d-flex justify-content-center align-items-center p-4 rounded-3">
                                <p> <i class="fa-solid fa-map-location-dot text-white "style="font-size:45px" ></i></p>
                               <div class="text-center ms-4">
                                <p class="my-text  fs-4 fw-bold mb-0 pb-0 text-white"><?php echo $row['build']?></p>
                                <p class="my-text fs-4 mt-0 pt-0  text-white">physical </p>
                               </div> 
                            </div>
                             <!-- Card 1 -->
                            <div style="width:350px; background-color: rgb(159, 124, 255); "class="shadow d-flex  justify-content-center align-items-center p-4 rounded-3">
                                <p><i class="fa-solid fa-alarm-clock text-white" style="font-size:45px" ></i></p>
                               <div class="text-center ms-4">
                                <p class="my-text  fs-4 fw-bold mb-0 pb-0 text-white"><?php echo $row['term']?></p>
                                <p class="my-text fs-4 mt-0 pt-0  text-white"><?php echo $row['time']?> </p>
                               </div> 
                            </div>


                                </div>
                            </div>
                    <div class="col-12 d-flex justify-content-between py-2 px-4 ps-5 mt-2 mb-3 ">
                            <h3 class="my-text fs-2">inprogressing</h3>
                            <div>
                                <button class="btn btn-primary px-4 my-text"><a href="./Attendent.php?classID=<?php echo $row['class_id'] ?>" class="fs-6 text-white">Attendent</a> </button>
                                <button class="btn btn-primary px-4 my-text ms-2">Save score</button>
                            </div>
                            </div>
                            <div class="col-12  px-5 class_views">
                                <table class="table table-hover table-bordered align-middle text-center ">
                                    <thead class="table-primary">
                                        <tr class="text-center">
                                            <th >ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Attendent</th>
                                            <th>Score</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                         echo '
                                            <tr class="text-center">
                                            <td>'.$row['IDSTU'].'</td>
                                            <td>'.$row['Name'].'</td>
                                            <td>'.$row['SEX'].'</td>
                                            <td>'.$row['Phone'].'</td>
                                            <td class=" d-flex px-0 py-1 justify-content-center align-items-center"><div class="card text-white py-2 px-4 m-0 w-100 summary-box text-start">
                                                <h6 class="mb-1">Total: <span id="total">56</span></h6>
                                                <p class="mb-1 fw-bold"> Present: <span id="present">45</span></p>
                                                <p class="mb-1 fw-bold"> Absent: <span id="absent">8</span></p>
                                                <p class="mb-0 fw-bold"> Permission: <span id="permission">3</span></p>
                                                </div>
                                            </td>
                                            <td class="px-0">
                                             <div class=" p-0">
                                    <p class="my-text mb-0 pb-0 ">[ Attendent :  <span class="text-danger fw-bold">20.5 ]</span></p>
                                    <p class="my-text">[ Active : <span class="btn-primary btn p-2 py-1">-</span><span class="my-text fs-bold fs-6 "> 0</span>  <span class="btn-primary btn py-1 p-2" > +</span> ]</p>
                                </div>
                            </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-0 m-0 ">   
                                                
                                                    <a href="./Views_attendent.php?id='.$row['IDSTU'].'&N='.$row['Name'].'&S='.$row['SEX'].'" class="text-primary">Views</a>
                                                    <button class="text-warning border-0 my-text fs-5 btn ">Edit</button>
                                                    <button class="text-danger my-text border-0 fs-5 btn">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                            ';
                                      
                                        
                                        while($row = $res->fetch_assoc()){
                                            echo '
                                            <tr class="text-center">
                                            <td>'.$row['IDSTU'].'</td>
                                            <td>'.$row['Name'].'</td>
                                            <td>'.$row['SEX'].'</td>
                                            <td>'.$row['Phone'].'</td>
                                            <td class=" d-flex px-0 py-1 justify-content-center align-items-center"><div class="card text-white py-2 px-4 m-0 w-100 summary-box text-start">
                                                <h6 class="mb-1">Total: <span id="total">56</span></h6>
                                                <p class="mb-1 fw-bold"> Present: <span id="present">45</span></p>
                                                <p class="mb-1 fw-bold"> Absent: <span id="absent">8</span></p>
                                                <p class="mb-0 fw-bold"> Permission: <span id="permission">3</span></p>
                                                </div>
                                            </td>
                                            <td class="px-0">
                                             <div class=" p-0">
                                    <p class="my-text mb-0 pb-0 ">[ Attendent :  <span class="text-danger fw-bold">20.5 ]</span></p>
                                    <p class="my-text">[ Active : <span class="btn-primary btn p-2 py-1">-</span><span class="my-text fs-bold fs-6 "> 0</span>  <span class="btn-primary btn py-1 p-2" > +</span> ]</p>
                                </div>
                            </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-0 m-0 ">   
                                                
                                                    <a href="./Views_attendent.php?id='.$row['IDSTU'].'&N='.$row['Name'].'&S='.$row['SEX'].'" class="text-primary">Views</a>
                                                    <button class="text-warning border-0 my-text fs-5 btn ">Edit</button>
                                                    <button class="text-danger my-text border-0 fs-5 btn">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                            ';

                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                               
                </div>
            </div>
        </div>
   </main>
    
</body>
</html>
