<?php 
session_start();
include("head.php");
?>

<?php if(@$_SESSION["status_user"]==NULL){?>
  <div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 10;  
  background-color: #ffffff;
  ">
</div>
<?php }elseif(@$_SESSION["status_user"]>=3){ ?>
<div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 5;
  border: 1px solid; 
  box-shadow: 5px 10px #888888;
  background-color: #FFCC33;
  "><i onclick="window.location='member.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
 <?php }elseif(@$_SESSION["status_user"]<=2){ ?>
<div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 5;
  border: 1px solid; 
  box-shadow: 5px 10px #888888;
  background-color: #FFCC33;
  "><i onclick="window.location='admin.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
 <?php } ?>
<?php
include("condb.php");
include("navbar.php");

$user_id=$_SESSION["user_id"];

$sql="SELECT * FROM `b_user` WHERE user_id='$user_id' ";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
// echo $row;

?>
<body>
  <br> 
  <center><b style="font-size: 24px;">แก้ไขข้อมูลส่วนตัว</b>

  <!--Main Navigation-->

  
  <!--Main layout-->

  <main style="margin-top: 5px">
    <div class="container pt-4"> 
        <div  class="shadow-lg p-3 mb-5  rounded">
            <div class="container rounded   mt-5 mb-5" >
            <form action=""  enctype="multipart/form-data" class="form-horizontal" method="POST" >
            <div class="row">
                <div class="col-md-5 ">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded mt-5 " name="user_img"  width="150px" src="img/user/<?php echo $row["user_img"]; ?>">
                        <br>
                        <span class="font-weight-bold"><input type="file" class="form-control" name="user_img" ></span><span class="text-black-50"></span><span> </span>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="p-3 py-5">
                        <div class="row mt-3"> 

                        <div class="form-outline mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="username"  value="<?php echo $row["username"]; ?>" placeholder="ชื่อผู้ใช้งาน">
                            <label >ชื่อผู้ใช้งาน</label>
                        </div>
                        </div>

                        <div class="form-outline mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="password"  value="<?php echo $row["password"]; ?>" placeholder="รหัสผ่าน">
                            <label >รหัสผ่าน</label>
                        </div>
                        </div>

                        <div class="form-outline mb-4">

                        <div class="row g-2">
                            <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="f_name" value="<?php echo $row["f_name"]; ?>" >
                                <label >ชื่อต้น</label>
                            </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                <input type="text" class="form-control" name="l_name"  value="<?php echo $row["l_name"]; ?>" >
                                <label >นามสกุล</label>
                                </div>
                            </div>
                        </div>
                        </div>


                    


                        <div class="form-outline mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="tel"  value="<?php echo $row["tel"]; ?>" placeholder="เบอร์โทร">
                            <label >เบอร์โทร</label>
                        </div>
                        </div>

                            

                        </div>
                        <div class="mt-2 text-center">
                            
                            <div class="form-outline mb-4">
                            <div class="form-floating">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" name="edit" type="submit">บันทึก</button>  
                                </div>
                                
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
            </form>
            </div>
        </div>
        </div>
   
    </div>
  </main>

  </center> 
</body>

</html>
<?php
if(isset($_REQUEST["edit"])){
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $fname=$_REQUEST["f_name"];
    $lname=$_REQUEST["l_name"];
    $tel=$_REQUEST["tel"];



 
    include("condb.php");
  
    
        $rnd=mt_rand();

        $user_img=$_FILES["user_img"]["tmp_name"];
        if($user_img){
             // ----ลบรูปเก่า------
            $sql2="SELECT user_img FROM `b_user` WHERE user_id='$user_id' ";
            $query2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_array($query2);
            $old=$row2["user_img"]; 
            unlink("img/user/$old");

            // ----เพิ่มรูปใหม่------ 
            $path="img/user/";
            $type=strrchr($_FILES["user_img"]["name"],'.');
            $newname="user_img".$rnd.$type;
            $path_copy=$path.$newname;
            
            copy($_FILES["user_img"]["tmp_name"],$path_copy);
            // echo "have img :".$newname;
            
            
        }else{
             // ----เลือกรูปเก่า------
            $sql="SELECT user_img FROM `b_user` WHERE user_id='$user_id'
            ";
            $query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($query);
            $newname=$row["user_img"];
        }

        $sql="UPDATE `b_user` SET `username`='$username',`password`='$password',`f_name`='$fname',`l_name`='$lname',`tel`='$tel',`user_img`='$newname' WHERE user_id='$user_id'
        ";
        $query=mysqli_query($con,$sql); 
        if($query){
            echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
            echo "<script>
                       setTimeout(function() {
                        swal({
                            title: 'สำเร็จ ',
                            type: 'success'
                        }, function() {
                            window.location = 'edit_user.php';
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
?>
<?php include("script.php"); ?>