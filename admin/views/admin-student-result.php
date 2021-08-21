<?php  
$mysqli= @new mysqli("localhost", "root", "", "school_management_system_2021");

if(!$mysqli){
    die('Connection error');
}
$query= "select * from records";
$result= mysqli_query($mysqli,$query);
?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Exams Time Table</h4>
                    <p>All about students like name, student id, phone, email, country, city and more</p>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Exam Name</th>
                                    <th>Exam Point</th>
                                    <th>Exam Score</th>
                                    <th>Credit</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Semester 1</td>
                                    <td>28 May 2018</td>
                                    <td>10:00AM</td>
                                    <td>03:00</td>
                                    <td><a href="admin-exam-edit.html" class="ad-st-view">Edit</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>