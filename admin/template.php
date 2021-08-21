<!-- Lognin And Logout -->
<?php   
  include("libraries/database_crud.php");
   include("libraries/admin_login.php");
    $obj = new Admin(); 
    $crud = new Database();
    session_start();
    $id = $_SESSION['sessionID'];
    if($id == null){
        header("location:index.php");
    }   
    if(isset($_GET['adminLogout'])){
        if($_GET['adminLogout']=='logout'){ 
          $obj->adminLogout();
        }
    }
    ?>

<?php include_once("includes/head.php"); ?>
<body>
    <!--== Nav CONTRAINER ==-->
    <?php include_once("includes/nav.php"); ?>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!-- left menu -->
                <?php include_once("includes/left_menu.php"); ?>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">

                <!--== breadcrumbs ==-->
                <?php include("includes/breadcrumbs.php"); ?>

                <?php
                    if(isset($view)){
                        if($view == "dashboard"){
                            include("views/admin-dashboard.php");
                        } 
                        elseif($view == "ad-setting"){
                            include("views/admin-setting.php");
                        }
                        elseif($view == "all-course"){
                            include("views/admin-all-courses.php");
                        }
                        elseif($view == "add-course"){
                            include("views/admin-add-courses.php");
                        }
                        elseif($view == "user-all"){
                            include("views/admin-user-all.php");
                        }
                        elseif($view == "user-add"){
                            include("views/admin-user-add.php");
                        }
                        elseif($view == "add-teacher"){
                            include("views/admin-teacher-add.php");
                        }
                        elseif($view == "all-teacher"){
                            include("views/admin-teacher-all.php");
                        }
                        elseif($view == "all-stuff"){
                            include("views/admin-stuff-all.php");
                        }
                        elseif($view == "add-stuff"){
                            include("views/admin-stuff-add.php");
                        }
                        elseif($view == "add-event"){
                            include("views/admin-event-add.php");
                        }
                        elseif($view == "all-event"){
                            include("views/admin-event-all.php");
                        }
                        elseif($view == "all-seminar"){
                            include("views/admin-seminar-all.php");
                        }
                        elseif($view == "add-seminar"){
                            include("views/admin-seminar-add.php");
                        }
                        elseif($view == "all-job"){
                            include("views/admin-job-all.php");
                        }
                        elseif($view == "add-job"){
                            include("views/admin-job-add.php");
                        }
                        elseif($view == "all-exam"){
                            include("views/admin-exam-all.php");
                        }
                        elseif($view == "add-exam"){
                            include("views/admin-exam-add.php");
                        }
                        elseif($view == "all-exam-group"){
                            include("views/admin-exam-group-all.php");
                        }
                        elseif($view == "add-exam-group"){
                            include("views/admin-exam-group-add.php");
                        }
                        elseif($view == "first-terminal-exam-marks"){
                            include("views/admin-firstterminal-exam.php");
                        }
                        elseif($view == "second-terminal-exam-marks"){
                            include("views/admin-secondterminal-exam.php");
                        }
                        elseif($view == "final-exam-marks"){
                            include("views/admin-final-exam.php");
                        }
                        elseif($view == "student-result"){
                            include("views/admin-student-result.php");
                        }
                        elseif($view == "all-student"){
                            include("views/admin-student-all.php");
                        }
                        elseif($view == "add-student"){
                            include("views/admin-student-add.php");
                        }
                        elseif($view == "export-data"){
                            include("views/admin-export-data.php");
                        }
                        elseif($view == "import-data"){
                            include("views/admin-import-data.php");
                        }
                        elseif($view == "add-attendance"){
                            include("views/admin-attendence-add.php");
                        }
                        elseif($view == "all-attendance"){
                            include("views/admin-attendence-all.php");
                        }




                    }
                   
                
                
                
                ?>














  



            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <?php include("includes/script.php") ;?>

</body>


</html>