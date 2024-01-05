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
  "><i onclick="window.location='edit_product.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
<?php
include("navbar.php");
 
$sql="SELECT * FROM b_book 
INNER JOIN b_type_book
ON b_book.type_id=b_type_book.type_id
ORDER BY book_view ";
$query=mysqli_query($con,$sql);
// include("product_while.php"); 
?>
 
 <h2>
<center>
  

 <br> 
 
</center>
</h2>
    <div class="container "> 
    <form action="" class="form-horizontal" enctype="multipart/form-data" method="POST">
    <div class="row row-cols-2">
        <div class="col-2">
        </div>
        <div class="col-9">
  
            <div class="col-12"> 
                ประเภทหนังสือ
                <select name="type_id" class="form-control">
                    <?php 
                    $sql_type="SELECT * FROM `b_type_book` ";
                    $query_type=mysqli_query($con,$sql_type);
                    while($row_type=mysqli_fetch_array($query_type)){
                    ?>
                    <option value="<?php echo $row_type["type_id"]; ?>"><?php echo $row_type["type_name"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-12"> 
                ผู้เขียน
                <input type="text" name="book_writer" class="form-control">
            </div>
            <div class="col-12"> 
                ชื่อหนังสือ
                <input type="text" name="book_name" class="form-control">
            </div>
            <div class="col-12"> 
                เรื่องย่อ 
                <textarea class="form-control" rows="6"  name="book_detail" aria-label="With textarea"></textarea>
            </div>
            <div class="col-12"> 
                ราคา
                <input type="text" name="book_price" class="form-control">
            </div>
            <div class="col-12"> 
                รูปภาพ
                <input type="file" name="book_img" class="form-control">
            </div>
   
            <div class="col-12"> 
                <div class="d-grid gap-2">
                    <br>
                    <button class="btn btn-primary" name="add" type="submit">บันทึก</button> 
                </div>
            </div>
        </div>
        </div>
    </form> 
    </div>

<?php
if(isset($_REQUEST["add"])){
    $type_id=$_REQUEST["type_id"];
    $book_writer=$_REQUEST["book_writer"];
    $book_name=$_REQUEST["book_name"];
    $book_detail=$_REQUEST["book_detail"];
    $book_price=$_REQUEST["book_price"];


    $rnd=mt_rand();

    $book_img=$_FILES["book_img"]["tmp_name"];
    if($book_img){
        $path="img/book/";
        $type=strrchr($_FILES["book_img"]["name"],'.');
        $newname=$rnd."_font".$type;
        $path_copy=$path.$newname;
        
        copy($_FILES["book_img"]["tmp_name"],$path_copy);
        // echo "have img :".$newname;
        
    }else{
        // echo "not have img";
        $newname="";
    }

    include("condb.php");

    $sql_add="INSERT INTO `b_book`(`book_id`, `type_id`, `book_name`, `book_writer`, `book_detail`, `book_price`, `book_img`, `book_view`) 
    VALUES ('NULL','$type_id','$book_name','$book_writer','$book_detail','$book_price','$newname','0')
    ";
    $query_add=mysqli_query($con,$sql_add);
    if($query_add){
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
