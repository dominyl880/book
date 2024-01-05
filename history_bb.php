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

// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
 

?>
 
 

<body>
  <br>
  <?php if($_SESSION["status_user"]>=3){ ?> 
  <center style="font-size: 24px;"><b>ประวัติการยืม-คืน</b></center>
  <center style="font-size: 12px; color:red;">--ต้องคืนหนังสือภายในเวลากำหนด--</center>
  <?php } ?>
  <?php if($_SESSION["status_user"]<=2){ ?> 
  <center style="font-size: 24px;"><b>ประวัติการยืม-คืน</b></center>
  <?php } ?>
  <!--Main Navigation-->

  
  <!--Main layout-->
  <main style="margin-top: 5px">
    <div class="container pt-4"> 
 
    <table id="example" class="table is-striped responsive nowrap" style="width:100%">
      <thead>
            <tr> 
                <th width="5%">รหัส</th>  
                <?php if($_SESSION["status_user"]<=2){ ?>
                <th>ผู้ยืม</th>  
                <?php } ?>

                <th>ชื่อหนังสือ</th> 
                <th width="5%">วันที่ยื่นคำขอ</th>
                <th width="5%">กำหนดวันคืน</th>
                <th width="5%">รายละเอียด</th> 
                <th width="5%">สถานะ</th> 
                <th width="5%">ค่าปรับ</th>

            </tr>
      </thead>
      <tbody>
            <?php 
            if($_SESSION["status_user"]>=3){
              $user_id=$_SESSION["user_id"];
              $sql_history="SELECT * FROM `b_history` 
              INNER JOIN `b_book` ON  b_history.book_id=b_book.book_id
              WHERE user_id='$user_id' ";
            }
            if($_SESSION["status_user"]<=2){ 
              $sql_history="SELECT * FROM `b_history` 
              INNER JOIN `b_book` ON  b_history.book_id=b_book.book_id
              INNER JOIN `b_user` ON  b_history.user_id=b_user.user_id

               ";
            }
              $query_history=mysqli_query($con,$sql_history);
              while($row_history=mysqli_fetch_array($query_history)){ 
            ?>
            <tr> 
                <td><?php echo $row_history["history_id"]; ?></td> 
                <?php if($_SESSION["status_user"]<=2){ ?>
                <td><?php echo $row_history["f_name"]; echo " "; echo $row_history["l_name"]; ?></td> 
                <?php } ?>
                <td><?php echo $row_history["book_name"]; ?></td> 
                <td><?php //echo $row_history["date_start"]; 
                     $d = $row_history["date_start"];
                     $e = explode("-", $d); 
                     $year4 = $e[0]+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น พ.ศ.
                     $myDATE=$d;
                     $ThMonth = array ( "ม.ค.", "ก.พ.", "มี.ค", "เม.ย.","พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
                     $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
                     $ThMonth[$months] ;
                     
                     echo $e[2]." ".$ThMonth[$months]." ".$year4; 
                ?></td> 
                <td><?php //echo $row_history["date_end"]; 
                    if($row_history["date_end"]){
                     $d2 = $row_history["date_end"];
                     $e2 = explode("-", $d2); 
                     $year42 = $e2[0]+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น พ.ศ.
                     $myDATE2=$d2;
                     $ThMonth2 = array ( "ม.ค.", "ก.พ.", "มี.ค", "เม.ย.","พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
                     $months2 = date("m",strtotime($myDATE2))-1; // ค่าเดือน (1-12)
                     $ThMonth2[$months2] ;
                     
                     echo $e2[2]." ".$ThMonth2[$months2]." ".$year42; 
                    }
                ?></td>
                <td><a class="btn btn-warning btn-sm" target="_blank" href="ticket.php?history_id=<?php echo $row_history['history_id']; ?>"><i class="bi bi-ticket">Ticket</i></a></td>                
                <td><?php if($row_history["status_history"]=="1"){ ?><font color="#CC9900">กำลังขอยืม</font><?php } ?>
                    <?php if($row_history["status_history"]=="2"){ ?><font color="red">กรุณาคืนหนังสือ</font><?php } ?>
                    <?php if($row_history["status_history"]=="3"){ ?><font color="green">คืนสำเร็จ</font><?php } ?>
                </td>
                <td><?php 
                if($row_history["date_end"]){
                   $date_now=date('Y-m-d');
                   $date_end=$row_history["date_end"];
   
                   if($date_now>$date_end){ 
                     echo "100";
                   }else{
                     echo "";
                   }
                }
                  ?></td> 

             </tr>
            <?php } ?>
        </tbody>
        </table>
      
      <!--Section: Statistics with subtitles-->
    </div>
  </main>
 

</body>

</html>
<?php include("script.php"); ?>