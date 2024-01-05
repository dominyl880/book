<?php 
session_start();

include("condb.php");
include("head.php");
?>
  <div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 10;  
  background-color: #ffffff;
  ">
</div>
<style>
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>

<?php include("navbar.php");


?>
 
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
                <p>
                <img src="img/priscilla-du-preez-ggeZ9oyI-PE-unsplash.jpg" class="img-fluid" alt="Sample image">
            </p>
            </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

 
        <p align="center" style="font-size: 24px;" class="lead fw-normal mb-0 me-3"><b>สมัครสมาชิก</b></p><br>
          <div class="row g-2">
            <div class="col-6"> 
              <div class="form-floating mb-3">
               <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้งาน" required>
               <label>ชื่อผู้ใช้งาน</label>
             </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                <label>รหัสผ่าน</label>
              </div>
            </div>
          </div>
      
  
          <div class="row g-2">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="fname" placeholder="ชื่อต้น" required>
                <label >ชื่อต้น</label>
              </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="lname" placeholder="นามสกุล" required>
                  <label >นามสกุล</label>
                </div>
              </div>
          </div>
          <br>
 
      
        <div  class="row g-2">
          <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="tel" placeholder="เบอร์โทร" required>
                  <label >เบอร์โทร</label>
                </div>
            </div>
        </div>
 
        <br>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">รูปภาพ</label>
            <input type="file" class="form-control" name="user_img" id="inputGroupFile01">
          </div>
          <br>
 
               <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="register" type="submit">สมัครสมาชิก</button>
              </div>  

        </form>
      </div>
    </div>
  </div> 
</section>

<?php
if(isset($_REQUEST["register"])){
echo $username=$_REQUEST["username"];
echo $password=$_REQUEST["password"];
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$tel=$_REQUEST["tel"];



 
    include("condb.php");
    echo $sql_ck="SELECT * FROM `b_user` WHERE username='$username' AND password='$password' ";
    $ck_query=mysqli_query($con,$sql_ck); 
    $check=mysqli_num_rows($ck_query);
    if($check>=1){
        // echo "have";
        echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
           echo "<script>
                   setTimeout(function() {
                    swal({
                        title: 'username มีนี้อยู่แล้ว',
                        type: 'error'
                    }, function() {
                        window.history.back();
                    });
                  }, 10);
            </script>";
    }else{
        // echo "not have";
        $rnd=mt_rand();

        $user_img=$_FILES["user_img"]["tmp_name"];
        if($user_img){
            $path="img/user/";
            $type=strrchr($_FILES["user_img"]["name"],'.');
            $newname=$rnd."_font".$type;
            $path_copy=$path.$newname;
            
            copy($_FILES["user_img"]["tmp_name"],$path_copy);
            // echo "have img :".$newname;
            
        }else{
            // echo "not have img";
            $newname="";
        }

        $sql="INSERT INTO `b_user`(`user_id`, `username`, `password`, `f_name`, `l_name`,`tel`,`user_img`, `act_id`, `status_user`) VALUES (NULL,'$username','$password','$fname','$lname','$tel','$newname','1','3')";
        $query=mysqli_query($con,$sql); 
        if($query){
            echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
            echo "<script>
                       setTimeout(function() {
                        swal({
                            title: 'สมัครสมาชิกสำเร็จ ',
                            type: 'success'
                        }, function() {
                            window.location = 'login.php';
                        });
                      }, 10);
                </script>";
        }else{
            echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
           echo "<script>
                   setTimeout(function() {
                    swal({
                        title: 'ล้มเหลว[#Error02]',
                        type: 'error'
                    }, function() {
                        window.history.back();
                    });
                  }, 10);
            </script>";
        }
    
    }

    
 
}
?>