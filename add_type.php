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
  "><i onclick="window.location='edit_type.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
<?php
include("navbar.php");

 
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
                ชื่อหมวดหมู่หนังสือ
                <input type="text" name="type_name" class="form-control">
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
    $type_name=$_REQUEST["type_name"]; 

 

    include("condb.php");

    $sql_add="INSERT INTO `b_type_book`(`type_id`, `type_name`) 
    VALUES ('NULL','$type_name')
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
                        window.location = 'edit_type.php';
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
