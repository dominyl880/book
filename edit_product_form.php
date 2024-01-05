<?php
session_start();
$book_id=$_REQUEST["book_id"];
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
WHERE book_id='$book_id' ";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);


?>
<br>
<div class="container">
    <form action="" enctype="multipart/form-data" class="form-horizontal" method="POST">
    <div class="row row-cols-2">
      <div class="col-2">
           
          
                      
                   
              
      </div>
        <div class="col-9"> 
            ประเภทหนังสือ
                <select name="type_id" class="form-control">
                    <?php 
                    $sql_type="SELECT * FROM `b_type_book` ";
                    $query_type=mysqli_query($con,$sql_type);
                    while($row_type=mysqli_fetch_array($query_type)){
                    ?>
                    <option  value="<?php echo $row_type["type_id"]; ?>" <?php if($row["type_id"]==$row_type["type_id"]){ ?>selected<?php } ?> ><?php echo $row_type["type_name"]; ?></option>
                    <?php } ?>
                </select>

                ผู้เขียน
              <input type="text" name="book_writer" value="<?php echo $row["book_writer"]; ?>" class="form-control">

              ชื่อหนังสือ
              <input type="text" name="book_name" value="<?php echo $row["book_name"]; ?>" class="form-control">

              เรื่องย่อ 
            <textarea class="form-control" rows="6"  name="book_detail" aria-label="With textarea"><?php echo $row["book_detail"]; ?></textarea>

            ราคา
            <input type="text" name="book_price" value="<?php echo $row["book_price"]; ?>" class="form-control">

            <center><img src="img/book/<?php echo $row["book_img"]; ?>" width="300" height="200">
        
                <input type="file" name="book_img" class="form-control">
                </center>
          <br> 

                <div class="d-grid gap-2">
                  <button class="btn btn-primary" name="edit" type="submit">บันทึก</button> 
                </div>
        </div>
 
      
             
          <div class="col-1">
           
            </div>
    </div>
</form> 
</div>

<?php
if(isset($_REQUEST["edit"])){
    $type_id=$_REQUEST["type_id"];
    $book_writer=$_REQUEST["book_writer"];
    $book_name=$_REQUEST["book_name"];
    $book_detail=$_REQUEST["book_detail"];
    $book_price=$_REQUEST["book_price"];


    $rnd=mt_rand();

    $book_img=$_FILES["book_img"]["tmp_name"];
    if($book_img){
        // $path="img/book/";
        // $type=strrchr($_FILES["book_img"]["name"],'.');
        // $newname=$rnd."_font".$type;
        // $path_copy=$path.$newname;
        
        // copy($_FILES["book_img"]["tmp_name"],$path_copy);
        // // echo "have img :".$newname;

         // ----ลบรูปเก่า------
         $sql2="SELECT book_img FROM `b_user` WHERE user_id='$user_id' ";
         $query2=mysqli_query($con,$sql2);
         $row2=mysqli_fetch_array($query2);
         $old=$row2["book_img"]; 
         unlink("img/book/$old");
 
         // ----เพิ่มรูปใหม่------ 
         $path="img/book/";
         $type=strrchr($_FILES["book_img"]["name"],'.');
         $newname=$rnd."_font".$type;
         $path_copy=$path.$newname;
         
         copy($_FILES["book_img"]["tmp_name"],$path_copy);
         // echo "have img :".$newname;

        
    }else{
        $sql_old="SELECT  book_img FROM  `b_book` WHERE book_id='$book_id' ";
        $query_old=mysqli_query($con,$sql);
        $row_old=mysqli_fetch_array($query_old);
        // echo "not have img";
        $newname=$row_old["book_img"];
    }
 

    include("condb.php");

    $sql_add="UPDATE `b_book` SET `type_id`='$type_id',`book_name`='$book_name',`book_writer`='$book_writer',
    `book_detail`='$book_detail',`book_price`='$book_price',`book_img`='$newname' WHERE book_id='$book_id'
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
                        window.location = 'edit_product_form.php?book_id=$book_id';
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
