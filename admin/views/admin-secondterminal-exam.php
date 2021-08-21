<?php  
$mysqli= @new mysqli("localhost", "root", "", "school_management_system_2021");

if(!$mysqli){
    die('Connection error');
}
$query= "select * from first_terminal_exam_result";
$result= mysqli_query($mysqli,$query);
?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>First Terminal Exam Result</h4>
                    <p>All about students like name, student id, phone, email, country, city and more</p>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Exam Name</th>
                                    <th>Exam Point</th>
                                    <th>Exam Score</th>
                                    <th>Credit</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <?php

                        while($row= mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $std_name=$row['STUDENT_NAME'];
                            $exm_name=$row['EXAM_NAME'];
                            $exm_point=$row['EXAM_POINT'];
                            $exm_score=$row['EXAM_SCORE'];
                            $exm_credit=$row['CREDIT']
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $std_name ?></td>
                                    <td><?php echo $exm_name ?></td>
                                    <td><?php echo $exm_point ?></td>
                                    <td><?php echo $exm_score ?></td>
                                    <td><?php echo $exm_credit ?> </td>
                                    <td><a href="admin-exam-edit.html" class="ad-st-view">Edit</a></td>
                                </tr>

                                
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>