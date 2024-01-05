
<br>
<?php if($_SESSION["status_user"]>=3){ ?>
  <!--Main Navigation-->
  <center style="font-size: 24px;"><b>กำหนดการคืน</b></center>
  <center style="font-size: 12px; color:red;">--ต้องคืนหนังสือภายในเวลากำหนด--</center>
<?php } ?>

 
  <!--Main layout-->
  <main style="margin-top: 5px">
    <div class="container pt-4"> 
 
        <!-- <table class="table table-bordered"> -->
        <table id="example" class="table is-striped responsive nowrap" style="width:100%">
          <thead>
            <tr>   
                <th width="5%">รหัส</th>
                <th width="60%">ชื่อหนังสือ</th>
                <th width="5%">กำหนดวันคืน</th>
                <th width="5%">รายละเอียด</th> 
                <th width="5%">ค่าปรับ</th>

            </tr>
          </thead>
          <tbody>
         <?php
            
            $user_id=$_SESSION["user_id"];
            $sql_history="SELECT * FROM `b_history` 
            INNER JOIN `b_book` ON  b_history.book_id=b_book.book_id
            WHERE user_id='$user_id' AND status_history='2' ";
          
            $query_history=mysqli_query($con,$sql_history); 
            while($row_history=mysqli_fetch_array($query_history)){ ?>
            <tr> 
                <td><?php echo $row_history["history_id"]; ?></td> 
                <td><?php echo $row_history["book_name"]; ?></td> 
                <td><?php 
                $d = $row_history["date_end"];
                $e = explode("-", $d); 
                $year4 = date("Y",strtotime($e[0]))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น พ.ศ.
                $myDATE=$d;
                $ThMonth = array ( "ม.ค.", "ก.พ.", "มี.ค", "เม.ย.","พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
                $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
                $ThMonth[$months] ;
                
                echo $e[2]." ".$ThMonth[$months]." ".$year4; 
                // echo $row_history["date_end"]; 
                ?></td>
                <td><a class="btn btn-warning btn-sm" target="_blank" href="ticket.php?history_id=<?php echo $row_history['history_id']; ?>"><i class="bi bi-ticket">Ticket</i></a></td>
      
                <td><?php 
                $date_now=date('Y-m-d');
                $date_end=$row_history["date_end"];

                if($date_now>$date_end){ 
                  echo "100";
                }else{
                  echo "";
                }
                // number_format($row_history["penalty"]); 
                ?></td> 

             </tr>
            <?php } ?>
          </tbody>

        </table>
      
      <!--Section: Statistics with subtitles-->
    </div>
  </main>
 