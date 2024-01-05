<?php
@session_start(); 
include("condb.php");
include("head.php");
include("navbar.php");
 
$sql="SELECT * FROM `b_user` ";
$query=mysqli_query($con,$sql);

@$act=$_REQUEST["act"];
if(@$act=="ban"){
    $user_id=$_REQUEST["user_id"];
    $sql_del="UPDATE `b_user` SET `act_id`='2' WHERE user_id='$user_id'
    ";
    $query_del=mysqli_query($con,$sql_del);
    if($query_del){
        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
        echo "<script>
                   setTimeout(function() {
                    swal({
                        title: 'สำเร็จ!! ',
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

if(@$act=="unban"){
    echo "unban";
    $user_id=$_REQUEST["user_id"];
    $sql_del="UPDATE `b_user` SET `act_id`='1' WHERE user_id='$user_id'
    ";
    $query_del=mysqli_query($con,$sql_del);
    if($query_del){
        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
        echo "<script>
                   setTimeout(function() {
                    swal({
                        title: 'สำเร็จ!! ',
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

if(@$act=="del"){
    echo "del";
    $user_id=$_REQUEST["user_id"];
    $sql_del="DELETE FROM `b_user` WHERE user_id='$user_id'
    ";
    $query_del=mysqli_query($con,$sql_del);
    if($query_del){
        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
        echo "<script>
                   setTimeout(function() {
                    swal({
                        title: 'สำเร็จ!! ',
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
?>
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
 
<br> 
 <center style="font-size: 24px;"><b>รายการหนังสือ </b><button class="btn btn-outline-success" onclick="window.location='add_user.php';"><i class="bi bi-plus-circle-fill"></i></button> </center>  
   

 
<main style="margin-top: 5px">
    <div class="container pt-4"> 
        <table id="example" class="table is-striped responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th width="5%">รหัส</th>
                    <th width="5%">รูปภาพ</th>
                    <th>ชื่อผู้ใช้ </th>
                    <th>ชื่อจริง-นามสกุล</th> 
                    <th>เบอร์ไทร</th> 

                    <th>ระดับ</th> 
                    <th>สถานะ</th> 

                    <th width="5%">แก้ไข</th>
                    <th width="5%">ลบ </th>             
                </tr>
            </thead>
            <tbody>
                <?php  while($row=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo $row["user_id"]; ?></td>

                    <td><img src="img/user/<?php echo $row["user_img"]; ?>" width="80px"></td> 
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["f_name"]; echo " "; echo $row["l_name"]; ?></td> 
                    <td><?php echo $row["tel"]; ?></td> 
                    <td><?php if($row["status_user"]=="1"){ echo "บรรณารักษ์"; }
                              if($row["status_user"]=="2"){ echo "เจ้าหน้าที่"; }
                              if($row["status_user"]=="3"){ echo "สมาชิก"; }
                        ?></td> 

                    <td><?php if($row["act_id"]=="1"){ echo "ปกติ"; }
                              if($row["act_id"]=="2"){ echo "<font color='red'>ระงับการใช้งาน</font>"; }
                        ?></td> 


                    <?php if($row["act_id"]=="1"){ ?>
                        <td>
                            <button type="button"  class="btn btn-warning " <?php if($_SESSION["status_user"]>$row["status_user"]){ ?>disabled<?php } ?> onclick="window.location='list_user.php?user_id=<?php echo $row['user_id']; ?>&act=ban';"><i class="bi bi-pencil-square">ระงับการใช้งาน</i></button>
                        </td>
                    <?php } ?>
                    <?php if($row["act_id"]=="2"){ ?>
                    <td>
                        <button type="button"  class="btn btn-info " <?php if($_SESSION["status_user"]>$row["status_user"]){ ?>disabled<?php } ?> onclick="window.location='list_user.php?user_id=<?php echo $row['user_id']; ?>&act=unban';"><i class="bi bi-pencil-square">ปลดระงับการใช้งาน</i></button>
                    </td>
                    <?php } ?>

                    <td>
                    <button type="button"  class="btn btn-danger btn-set-task" <?php if($_SESSION["status_user"]>1){ ?>disabled<?php } ?>  onclick="window.location='list_user.php?user_id=<?php echo $row['user_id']; ?>&act=del';"><i class="bi bi-trash3-fill"></i></button>
                    </td>     
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main><br>
    <?php include("script.php"); ?>
