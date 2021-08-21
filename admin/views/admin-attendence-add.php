<?php

$con = mysqli_connect("localhost","root","","school_management_system_2021");

if(isset($_POST['submit']))
{
    $class = $_POST['at_class'];
    $name = $_POST['at_std_name'];
    $status = $_POST['at_Std-Status'];
    $tnote = $_POST['at_teacher_note'];
    $stdID = $_POST['at_std_id'];
   

    $query = "INSERT INTO at_add_attendance (Class, Student_Name, Attendance, Teachers_Comnt, Student_Id ) VALUES ('$class','$name','$status','$tnote', '$stdID')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "Inserted Succesfully";
        
    }
    else
    {
        echo "Not Inserted";
        
    }
}
?>


<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Student Attendance</h4>
                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and
                        more</p>
                </div>
                <div class="tab-inn">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="row">
                            
                            <div class="input-field col s6">
                                <select name="at_class" id="">
                                    <option value="" disabled selected>---Select Class---</option>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class2">Class2</option>
                                    <option value="Class 3">Class 3</option>
                                    <option value="Class 4">Class 4</option>
                                    <option value="Class 5">Class 5</option>
                                    <option value="Class 6">Class 6</option>
                                    <option value="Class 7">Class 7</option>
                                    <option value="Class 8">Class 8</option>
                                    <option value="Class 9">Class 9</option>
                                </select>
                               
                            </div>

                            <div class="input-field col s6">
                                <input type="text" value="" name="at_std_name" class="validate" required>
                                <label class="">Student Name</label>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="input-field col s6">
                                <select name="at_Std-Status" id="">
                                    <option value="" disabled selected>Attendance</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                </select>
                                
                            </div>

                            <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" name="at_teacher_note" class="validate">
                                <label class="">Teacher's Note</label>
                            </div>
                        </div>
                        
                            
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="" name="at_std_id" class="validate">
                                <label>Student id</label>
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" name="submit" 
                                        class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



