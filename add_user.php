<?php
@session_start();
include("condb.php");
include("head.php");
?>
 <div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 5;
  border: 1px solid; 
  box-shadow: 5px 10px #888888;
  background-color: #FFCC33;
  "><i onclick="window.location='list_user.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
<?php
include("navbar.php");

?>
 
 <br> 
  <div class="container">
  <div class="row row-cols-2">
      <div class="col-2">
      </div>
      <div class="col-9">
  
      <div class="col-12">
        <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
    
        สถานะ<font color="red" style="font-size:10px">**</font>  
            <input type="radio" class="btn-check" name="status" id="b1" autocomplete="off" value="3"  required>
            <label class="btn btn-outline-primary" for="b1">สมาชิก</label>
            <input type="radio" class="btn-check" name="status" id="b3" autocomplete="off" value="2" required>
            <label class="btn btn-outline-success" for="b3">ผู้จัดการ</label>   
 
            <?php if(@$_SESSION["status_user"]<=1){ ?>
            <input type="radio" class="btn-check" name="status" id="b2" autocomplete="off" value="1"  required>
            <label class="btn btn-outline-danger" for="b2">บรรณารักษ์</label>
            <?php } ?>

          <div class="row g-2">
            <div class="col-6"> 
                <label class="form-label" >ชื่อผู้ใช้</label>
                <input type="text" name="username" class="form-control form-control" required />
            </div>
            <div class="col-6">
                <label class="form-label" >รหัสผ่าน</label>
                <input type="Password" name="password" class="form-control form-control" required  />
            </div>
          </div>

          <div class="row g-2">
            <div class="col-6">
            
                <label class="form-label" >ชื่อต้น</label>
                <input type="text" name="fname" class="form-control form-control" required  />
        
            </div>
            <div class="col-6">
      
                <label class="form-label" >นามสกุล</label>
                <input type="text" name="lname" class="form-control form-control" required />
      
            </div>
          </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
              <label class="form-label" >เบอร์โทร</label>
            <input type="text" name="tel" class="form-control form-control-lg" required  />
          </div>
                  <!-- Password input -->
                  <div class="form-outline mb-3">
              <label class="form-label" >รูปภาพ</label>
            <input type="file" name="user_img" class="form-control">
          </div>

          <div class="col-12"> 
                <div class="d-grid gap-2"> 
                    <button class="btn btn-primary" name="register" type="submit">บันทึก</button> 
                </div>
            </div>
        </form>
      </div>
    </div>
    </div>
  </div> 

<?php
if(isset($_REQUEST["register"])){
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$tel=$_REQUEST["tel"];
$status=$_REQUEST["status"];


 
    include("condb.php");
    $sql_ck="SELECT * FROM `b_user` WHERE username='$username' AND password='$password' ";
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

        $sql="INSERT INTO `b_user`(`user_id`, `username`, `password`, `f_name`, `l_name`,`tel`,`user_img`, `act_id`, `status_user`) VALUES (NULL,'$username','$password','$fname','$lname','$tel','$newname','1','$status')";
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
                            window.location = 'list_user.php';
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