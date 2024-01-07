<?php 
session_start();
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
  "><i onclick="window.location='member.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
 
<?php
include("condb.php");
include("navbar.php");

$user_id=$_SESSION["user_id"];

$sql_fav="SELECT * FROM `b_fev` WHERE user_id='$user_id' ";
$query_fav=mysqli_query($con,$sql_fav);
$row_fav=mysqli_num_rows($query_fav);
// echo $row_fav;

@$act=$_REQUEST["act"];
if(@$act=="del_fav"){
    // echo "ชอบ"; 
    $book=$_REQUEST["book_id"];
    $sql_start="DELETE FROM `b_fev` WHERE book_id='$book' AND user_id='$user_id'
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
                        window.location = 'fev_book.php';
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
  <br> 
  <center style="font-size: 24px;"><b>หนังสือที่ชอบ</b></center> 

  <!--Main Navigation-->

  
  <!--Main layout-->
  <main style="margin-top: 5px">
    <div class="container pt-4"> 
 
    <table id="example" class="table is-striped responsive nowrap" style="width:100%">
      <thead>
            <tr>     
                <th>ชื่อหนังสือ</th>  
                <th width="10%">รายละเอียด</th> 
                <th width="5%">ชอบ</th>   
            </tr>
      </thead>
      <tbody>
            <?php  
              $sql_history="SELECT * FROM `b_fev` 
              INNER JOIN `b_book` ON  b_fev.book_id=b_book.book_id
              WHERE user_id='$user_id' ";
              $query_history=mysqli_query($con,$sql_history);
              while($row_history=mysqli_fetch_array($query_history)){ 
                $book_id=$row_history["book_id"];
            ?>
            <tr> 
                <td><?php echo $row_history["book_name"]; ?></td> 
                <td><a target="_blank" href="product.php?book_id=<?php echo $book_id; ?>" class="btn btn-warning btn-sm" >รายละเอียด</a> </td> 
                <td><button onclick="window.location='fev_book.php?book_id=<?php echo $book_id; ?>&act=del_fav';" class="btn btn-danger btn-sm" ><i class="bi bi-heart-fill"></i></button> </td>
             

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