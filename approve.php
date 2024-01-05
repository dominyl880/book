<?php  
include("condb.php"); 
 

?>
 
 
  <!--Main Navigation-->
 

  <!--Main layout-->
  <main style="margin-top: 5px">
    <div class="container pt-4"> 
  <!-- <table class="table table-bordered"> -->
  <table id="example" class="table is-striped responsive nowrap" style="width:100%">

<thead>
    <tr> 
        <th  width="5%">รหัสการยืม</th>
        <th>ชื่อหนังสือ</th>
        <th>ผู้ยืม</th>
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
                <td><?php echo $row_history["book_name"]; ?></td>
                <td><?php echo $row_history["f_name"]; echo " "; echo $row_history["l_name"]; ?></td>
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
                <td><a class="btn btn-success btn-sm" onclick="window.location='admin.php?act=Yes&user=<?php echo $row_history['user_id']; ?>&book_id=<?php echo $row_history['book_id']; ?>';"><i class="bi bi-check"></i> อนุมัติ</a></td>
                <td><a class="btn btn-danger btn-sm" onclick="window.location='admin.php?act=No&user=<?php echo $row_history['user_id']; ?>&book_id=<?php echo $row_history['book_id']; ?>';"><i class="bi bi-x"></i> ไม่อนุมัติ</a></td>


            </tr>
            <?php } ?>
        </table>
      
      <!--Section: Statistics with subtitles-->
    </div>
  </main>
<?php
@$act=$_REQUEST["act"];
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
                        window.location = 'admin.php';
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
                        window.location = 'admin.php';
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