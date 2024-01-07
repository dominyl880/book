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
"></div>

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
        <form action="" method="POST"> 
          <p align="center" style="font-size: 24px;" class="text-center fw-bold mx-3 mb-0"><b>เข้าสู่ระบบ</b></p><br>
             
       

         

          <!-- Username input -->
          <div class="form-outline mb-4">
                <div class="form-floating">
                  <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้งาน" required>
                  <label >ชื่อผู้ใช้งาน</label>
                </div>

          
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                  <label >รหัสผ่าน</label>
                </div>
              
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">ลืมรหัสผ่าน?</a>
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
              <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login" type="submit">เข้าสู่ระบบ</button>
              </div>  

            <p class="small fw-bold mt-2 pt-1 mb-0">ยังไม่มีบัญชี? <a href="register.php"
                class="link-danger">สมัครสมาชิก</a></p>
          </div>

        </form>
      </div>
    </div>
  </div> 
</section>

<?php
if(isset($_REQUEST["login"])){
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
  if($username && $password){
    include("condb.php");
    $sql="SELECT * FROM b_user WHERE username='$username' AND password='$password' AND act_id='1' ";
    $query=mysqli_query($con,$sql); 
    if(mysqli_num_rows($query)){
      $row=mysqli_fetch_array($query);

      $_SESSION["user_id"]=$row["user_id"];
      $_SESSION["status_user"]=$row["status_user"];

      if($_SESSION["status_user"]=="3"){
        echo "<script>"; 
        echo "window.location='member.php';";
        echo "</script>";
      }
      if($_SESSION["status_user"]=="2"){
        echo "<script>"; 
        echo "window.location='admin.php';";
        echo "</script>";
      }
      if($_SESSION["status_user"]=="1"){
        echo "<script>"; 
        echo "window.location='admin.php';";
        echo "</script>";
      }
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

?>