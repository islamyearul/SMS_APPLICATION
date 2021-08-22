<?php  
$mysqli= @new mysqli("localhost", "root", "", "school_management_system_2021");
$query= "select * from at_add_attendance";
$result= mysqli_query($mysqli,$query);
?>

<?php 
if(isset($_GET['delete'])){
        $id= $_GET['id'];
        $deleteID= "delete from at_add_attendance where ID='$ID'";
        $delSMS= $crud->delete($deleteID);
    
    if(isset($delSMS)){
        echo $delSMS; 
    }
    }
 ?>

<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Student Details</h4>
                    <p>All about students like name, student id, phone, email, country, city and more</p>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Class</th>
                                    <th>Student Name</th>
                                    <th>Attend Status</th>
                                    <th>Teacher's Comment</th>
                                    <th>Student ID</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                        while($row= mysqli_fetch_assoc($result)){
                            $ID=$row['ID'];
                            $Class=$row['Class'];
                            $SName=$row['Student_Name'];
                            $Attendance_Status=$row['Attendance'];
                            $TComment=$row['Teachers_Comnt'];
                            $SID=$row['Student_Id'];
                           
                        ?>
                          

                                <tr>
                                    <td><?php echo $ID ?></span>
                                    </td>
                                    <td><a href="#"><span class="list-enq-name"><?php echo $Class ?>
                                    </td>
                                    <td><?php echo $SName ?></td>
                                    <td><?php echo $Attendance_Status ?></td>
                                    <td><?php echo $TComment ?></td>
                                    <td><?php echo $SID ?></td>
                                    
                                    <td>
                                        <span class="label label-warning"><a href="edit.php?GetID=<?php echo $user_id ?>">Edit</a></span>
                                    </td>
                                    <td><a onclick="return confirm('Are you sure?')"href="admin-attendence-all.php?delete=<? php echo $ID;
                                     ?>" class="ad-st-view">Delete</a></td>
                                    }
                                </tr>
                                <?php  

                    }

                        ?>
                                
                            </tbody>
                            

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

