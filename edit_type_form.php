<?php
session_start();
?>

 <div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 5;
  border: 1px solid; 
  box-shadow: 5px 10px #888888;
  background-color: #FFCC33;
  "><i onclick="window.location='edit_type.php';" class="bi bi-arrow-left-square-fill"></i>
</div>

<?php
$type_id=$_REQUEST["type_id"];
include("condb.php");
include("head.php");
include("navbar.php");

$sql="SELECT * FROM b_type_book  
WHERE type_id='$type_id' ";
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
            ชื่อหมวดหมู่หนังสือ
            <input type="text" name="type_name" value="<?php echo $row["type_name"]; ?>" class="form-control"> <br> 

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
    $type_name=$_REQUEST["type_name"]; 

    include("condb.php");

    $sql_add="UPDATE `b_type_book` SET `type_name`='$type_name' WHERE type_id='$type_id'
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
                        window.location = 'edit_type_form.php?type_id=$type_id';
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
