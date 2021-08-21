<?php  
$mysqli= @new mysqli("localhost", "root", "", "school_management_system_2021");

if(!$mysqli){
    die('Connection error');
}

if(isset($_POST['submit'])){

  

        $date=$_POST['att_date'];
        $std_name=$_POST['Student_Name'];
        $attnd_status=$_POST['att_status'];
        $tea_note=$_POST['techer_note'];
        $month=$_POST['month'];
        $std_id=$_POST['std_id'];
        $img=$_POST['std-img'];

        $query= "insert into student_new_attendance ('id', 'Date', 'Student_Name', 'Attnd_Status', 'Techers_Comment', 'Month', 'Student_Id', 'Std_photo') values ('', '$date', '$std_name', '$attnd_status', '$tea_note', '$month', '$std_id', '$img')";
        $result= mysqli_query($mysqli,$query);

        if($result){
            echo "Data stored";
        } else {
            echo "Please check your Query";
        }
        
    }
        

} else {
   header("Location:admin-attendence-add.php");
}


?>
