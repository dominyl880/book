<?php 
include("head.php");  
include("navbar.php"); 

$history_id=$_REQUEST["history_id"];
$sql_history="SELECT * FROM `b_history` 
INNER JOIN `b_book` ON b_history.book_id=b_book.book_id
INNER JOIN `b_user` ON b_history.user_id=b_user.user_id
WHERE history_id='$history_id' ";
$query_history=mysqli_query($con,$sql_history);
$row_history=mysqli_fetch_array($query_history);

 
?>


<div class="container">
    <center><br>
    <div class="card" style="width: 18rem;">
    <img src="img/book/<?php echo $row_history["book_img"] ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <b style="font-size: 16px;"><?php echo $row_history["book_name"]; ?></b>
      
        <p align="left">
        <label style="font-size: 14px;">รหัสการยืม : <?php echo $row_history["history_id"]; ?></label><br>
        <label style="font-size: 14px;">ผู้ยืม : <?php echo $row_history["f_name"]; echo " "; echo $row_history["l_name"]; ?></label><br>
        <label style="font-size: 14px;">สถานะ : 
        <?php if($row_history["status_history"]=="1"){ echo "รอการอนุมัติ"; } ?> 
        <?php if($row_history["status_history"]=="2"){ echo "อนุมัติเรียบร้อย ";  ?><label style="font-size: 10px;">(กรุณาคืนภานใน 7 วัน)</label><?php } ?>
        <?php if($row_history["status_history"]=="3"){ echo "คืนสำเร็จ"; } ?> 

        </label><br>
        <label style="font-size: 14px;">วันที่ยืม : 
    
        <?php 
                     $d = $row_history["date_start"];
                     $e = explode("-", $d); 
                     $year4 = $e[0]+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น พ.ศ.
                     $myDATE=$d;
                     $ThMonth = array ( "ม.ค.", "ก.พ.", "มี.ค", "เม.ย.","พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
                     $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
                     $ThMonth[$months] ;
                     
                     echo $e[2]." ".$ThMonth[$months]." ".$year4; 
                
                // echo $row_history["date_start"]; 
                ?>
        
        </label><br>
        <label style="font-size: 14px;">กำหนดวันคืน : 
    
        <?php //echo $row_history["date_end"]; 
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
                ?>
        </label>
        </p>
        <p align="center"><label style="font-size: 14px;"><img src="img/barcode/barcode.gif" width="200px" ></label></p>
    </div>
    </div>
    </center><br>
</div>
