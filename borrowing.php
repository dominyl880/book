<?php 
@session_start();
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

// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
@$act=$_REQUEST["act"];
if(@$act=="cancel"){
  // echo "ยกเลิก";
  @$user_id=$_SESSION["user_id"];
  @$history_id=$_REQUEST["history_id"];

  $sql_start="DELETE FROM `b_history` WHERE user_id='$user_id' AND history_id='$history_id'
  ";
  $query_start=mysqli_query($con,$sql_start);
  if($query_start){
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
                      window.location = 'borrowing.php';
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
                 window.location = 'borrowing.php';
              });
            }, 10);
      </script>";
  }
  
}

?>

<!-- -------------------------admin---------------- -->
<?php

@$user=$_REQUEST["user"];
@$book_id=$_REQUEST["book_id"];

if(@$act=="Yes"){
    $date_start=date("Y-m-d");
    $date_end = date ("Y-m-d", strtotime("+7 day", strtotime($date_start)));
    $sql_start="UPDATE `b_history` SET `date_start`='$date_start',`date_end`='$date_end',`status_history`='2' WHERE user_id='$user' AND book_id='$book_id'
    ";
    $query_start=mysqli_query($con,$sql_start);
    if($query_start){
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
                        window.location = 'borrowing.php';
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
if(@$act=="No"){ 
    $sql_start="DELETE FROM `b_history` WHERE user_id='$user' AND book_id='$book_id'
    ";
    $query_start=mysqli_query($con,$sql_start);
    if($query_start){
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
                        window.location = 'borrowing.php';
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

<body>

  <!--Main Navigation-->
  <br> 
  <?php if($_SESSION["status_user"]>=3){ ?>

  <center style="font-size: 24px;"><b>การยืม</b></center>
  <center style="font-size: 12px; color:red;">--กรุณารอแอดมินอนุมัติคำขอ--</center>
  <?php } ?>


  <?php if($_SESSION["status_user"]<=2){ ?>
  <center style="font-size: 24px;"><b>อนุมัติการยืม</b></center> 
  <?php } ?>


  <!--Main layout-->
  <main style="margin-top: 5px">
    <div class="container pt-4"> 
 
    <?php if($_SESSION["status_user"]>=3){ ?>
        <!-- <table class="table table-bordered"> -->
        <table id="example" class="table is-striped responsive nowrap" style="width:100%">

        <thead>
            <tr>
                <th width="5%">รหัสการยืม</th>
                <th width="60%">ชื่อหนังสือ</th>
                <th width="5%">วันที่ยื่นคำขอ</th>
                <th width="5%">รายละเอียด</th>
                <th width="5%">ยกเลิก</th> 
            </tr>
        </thead>

        <tbody>
        <?php 
            $user_id=$_SESSION["user_id"];
            $sql_history="SELECT * FROM `b_history`
            INNER JOIN `b_book` ON  b_history.book_id=b_book.book_id
            WHERE user_id='$user_id' AND status_history='1' ";
            $query_history=mysqli_query($con,$sql_history);
            while($row_history=mysqli_fetch_array($query_history)){ ?>
            <tr>
                <td><?php echo $row_history["history_id"]; ?></td>
                <td><?php echo $row_history["book_name"]; ?></td>
                <td><?php 
                     $d = $row_history["date_start"];
                     $e = explode("-", $d); 
                     $year4 = $e[0]+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น พ.ศ.
                     $myDATE=$d;
                     $ThMonth = array ( "ม.ค.", "ก.พ.", "มี.ค", "เม.ย.","พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
                     $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
                     $ThMonth[$months] ;
                     
                     echo $e[2]." ".$ThMonth[$months]." ".$year4; 
                
                // echo $row_history["date_start"]; 
                ?></td>
                
                <td><a class="btn btn-warning btn-sm"  target="_blank" href="ticket.php?history_id=<?php echo $row_history['history_id']; ?>"><i class="bi bi-ticket">Ticket</i></a></td>
                <td><a class="btn btn-danger btn-sm" href="borrowing.php?act=cancel&history_id=<?php echo $row_history["history_id"]; ?>"><i class="bi bi-x"></i> ยกเลิก</a></td>

          

            </tr>
            <?php } ?>
        </tbody>

       
        </table>
      <?php } ?>

    <?php if($_SESSION["status_user"]<=2){ ?>
      <table id="example" class="table is-striped responsive nowrap" style="width:100%">
        <thead>
            <tr> 
                <th  width="5%">รหัส</th>
                <?php if($_SESSION["status_user"]<=2){ ?>
                  <th>ผู้ยืม</th> 
                <?php } ?>
                <th>ชื่อหนังสือ</th>
                <th width="5%">วันที่ยื่นคำขอ</th> 
                <th width="5%">รายละเอียด</th>
                <th width="5%">อนุมัติ</th>
                <th width="5%">ยกเลิก</th>     

            </tr>
        </thead>
        <tbody>
            <?php 
            $user_id=$_SESSION["user_id"];
            $sql_history="SELECT * FROM `b_history` 
            INNER JOIN `b_user` ON b_history.user_id=b_user.user_id
            INNER JOIN `b_book` ON b_history.book_id=b_book.book_id
            WHERE status_history='1' ";
            $query_history=mysqli_query($con,$sql_history);
            while($row_history=mysqli_fetch_array($query_history)){ ?>
            <tr>
                <td><?php echo $row_history["history_id"]; ?></td>
                <?php if($_SESSION["status_user"]<=2){ ?>
                  <td><?php echo $row_history["f_name"]; echo " "; echo $row_history["l_name"]; ?></td> 
                <?php } ?>
                <td><?php echo $row_history["book_name"]; ?></td> 
                <td><?php //echo $row_history["date_start"]; 
                $d = $row_history["date_start"];
                $e = explode("-", $d); 
                $year4 = date("Y",strtotime($e[0]))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น พ.ศ.
                $myDATE=$d;
                $ThMonth = array ( "ม.ค.", "ก.พ.", "มี.ค", "เม.ย.","พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
                $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
                $ThMonth[$months] ;
                
                echo $e[2]." ".$ThMonth[$months]." ".$year4; 
                ?></td>  
                <td><a class="btn btn-warning btn-sm" target="_blank" href="ticket.php?history_id=<?php echo $row_history['history_id']; ?>"><i class="bi bi-ticket">Ticket</i></a></td>
                <td><a class="btn btn-success btn-sm" onclick="window.location='borrowing.php?act=Yes&user=<?php echo $row_history['user_id']; ?>&book_id=<?php echo $row_history['book_id']; ?>';"><i class="bi bi-check"></i> อนุมัติ</a></td>
                <td><a class="btn btn-danger btn-sm" onclick="window.location='borrowing.php?act=No&user=<?php echo $row_history['user_id']; ?>&book_id=<?php echo $row_history['book_id']; ?>';"><i class="bi bi-x"></i> ไม่อนุมัติ</a></td>
            </tr>
            <?php } ?>
        </table>
    <?php } ?>

      <!--Section: Statistics with subtitles-->
    </div>
  </main>
 

</body>

</html>

<?php include("script.php"); ?>