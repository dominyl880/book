<?php
@session_start(); 
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
  "><i onclick="window.location='admin.php';" class="bi bi-arrow-left-square-fill"></i>
</div>

<?php
include("condb.php");

include("navbar.php");
 
$sql="SELECT * FROM b_book 
INNER JOIN b_type_book
ON b_book.type_id=b_type_book.type_id
ORDER BY book_view ";
$query=mysqli_query($con,$sql);

@$act=$_REQUEST["act"];
if($act=="del"){
    $book=$_REQUEST["book_id"];
    $sql_del="DELETE FROM `b_book` WHERE  book_id='$book'
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
                        window.location = 'edit_product.php';
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
  
 
 <br> 
 <center style="font-size: 24px;"><b>รายการหนังสือ </b><button class="btn btn-outline-success" onclick="window.location='add_product.php';"><i class="bi bi-plus-circle-fill"></i></button> </center>  
  
<main style="margin-top: 5px">
    <div class="container pt-4"> 
        <table id="example" class="table is-striped responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th width="5%">รหัส</th>
                    <th width="5%">รูปภาพ </th>  
                    <th width="5%">หมวดหมู่หนังสือ</th>
                    <th>ชื่อหนังสือ </th>

                    <th>ราคา </th>
                    <th>ยอดวิว </th>

                    <th width="5%">แก้ไข</th>
                    <th width="5%">ลบ </th>             
                </tr>
            </thead>
            <tbody>
                <?php  while($row=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo $row["book_id"]; ?></td>
                    <td><img src="img/book/<?php echo $row["book_img"]; ?>" width="80px"></td>
                    <td><?php echo $row["type_name"]; ?></td>
                    <td><?php echo $row["book_name"]; ?></td>

                    <td><?php echo $row["book_price"]; ?></td>
                    <td><?php echo $row["book_view"]; ?></td>


                    <td>
                        <button type="button"  class="btn btn-warning btn-set-task"  onclick="window.location='edit_product_form.php?book_id=<?php echo $row['book_id']; ?>';"><i class="bi bi-pencil-square"></i></button>
                    </td>
                    <td>
                    <button type="button"  class="btn btn-danger btn-set-task"  onclick="window.location='edit_product.php?book_id=<?php echo $row['book_id']; ?>&act=del';"><i class="bi bi-trash3-fill"></i></button>
                    </td>     
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main><br>
    <?php include("script.php"); ?>
