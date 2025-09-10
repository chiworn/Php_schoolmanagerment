<?php   include('./Sidebar.php');
        include('../Connections.php');
            $IDSTU = $_GET['id'];
            $Name = $_GET['N'];
            $Gender = $_GET['S'];
            global $con;
            $select ="SELECT `Attendentid`, `Present`, `time`, `Resson`, `StudentID` FROM `tb_attendents` WHERE  `StudentID` = '$IDSTU'";
            $res = $con->query($select);
            $row = $res->fetch_assoc();
         ?>

                <div class="col-10 px-3">
                        <div class="col-12 d-flex justify-content-between py-2 px-4 mt-2 ">
                            <h1 class="my-text">Views Attendent all for student  </h1>
                            <h4 class="my-text ">---</h4>
                        </div>
                         <div class="col-7 d-flex justify-content-between py-2 px-4 mt-4 ">
                            <h3 class="my-text">Name : <span class="text-danger fs-3"><?php echo $Name ?></span> </h3>
                            <h3 class="my-text ">Gender : <span class="text-danger fs-3"><?php echo $Gender ?></span> </h3>
                        </div>
                        <div class="ps-3">
                            <hr style="color: rgb(159, 124, 255);" >
                        </div>
                        <div class="col-12 ">

                        <div class="col-12 m-auto px-3">
                        <div class="card  rounded-3">
                            <div class="card-body p-0">
                            <table class="table  align-middle mb-0">
                                <thead class="table-primary text-center">
                                <tr>
                                    <th>Attendance-ID</th>
                                    <th>Present</th>
                                    <th>Date &amp; Time</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php 
                                     echo'<tr>
                                                <td>'.$row['Attendentid'].'</td>
                                                <td><span class="badge '.($row['Present']== 'P' ? 'bg-success' : 'bg-danger').'">'.$row['Present'].'</span></td>
                                                <td>'.$row['time'].'</td>
                                                <td><input type="text" class="form-control form-control-sm" value="'.$row['Resson'].'"></td>
                                                <td>
                                                <button class="btn btn-warning btn-sm me-2"><i class="fa fa-pen"></i></button>
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                    while( $row = $res->fetch_assoc()){
                                        echo'<tr>
                                                <td>'.$row['Attendentid'].'</td>
                                                <td><span class="badge '.($row['Present']== 'P' ? 'bg-success' : 'bg-danger').'">'.$row['Present'].'</span></td>
                                                <td>'.$row['time'].'</td>
                                                <td><input type="text" class="form-control form-control-sm" value="'.$row['Resson'].'"></td>
                                                <td>
                                                <button class="btn btn-warning btn-sm me-2"><i class="fa fa-pen"></i></button>
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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

                        </div>
                        </div>