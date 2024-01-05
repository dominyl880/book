<?php @session_start();
include("condb.php"); 
$book_id=$_REQUEST["book_id"];
@$act=$_REQUEST["act"];
if(@$act=="fav"){
    // echo "ชอบ";
    @$user_id=$_SESSION["user_id"];

    $sql_start="INSERT INTO `b_fev`(`fev_id`, `book_id`, `user_id`) VALUES (NULL,'$book_id','$user_id')
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
                        window.location = 'product.php?book_id=$book_id';
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
if(@$act=="del_fav"){
    // echo "ชอบ";
    @$user_id=$_SESSION["user_id"];

    $sql_start="DELETE FROM `b_fev` WHERE book_id='$book_id' AND user_id='$user_id'
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
                        window.location = 'product.php?book_id=$book_id';
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

if(@$act=="start"){
    // echo "ยืม";
    @$user_id=$_SESSION["user_id"];
    $date_start=date("Y-m-d");
    $date_end="";
    // $date_end = date ("Y-m-d", strtotime("+7 day", strtotime($date_start)));

    $sql_start="INSERT INTO `b_history`(`history_id`, `book_id`, `user_id`, `date_start`, `date_end`, `status_history`) 
    VALUES (NULL,'$book_id','$user_id','$date_start','$date_end','1')
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
                        window.location = 'product.php?book_id=$book_id';
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
if(@$act=="cancel"){
    // echo "ยกเลิก";
    @$user_id=$_SESSION["user_id"];
    $sql_start="DELETE FROM `b_history` WHERE user_id='$user_id' AND book_id='$book_id'
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
                        window.location = 'product.php?book_id=$book_id';
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
if(@$act=="end"){
    // echo "คืน";
    $history_id=$_REQUEST["history_id"];
  
    echo "<script>"; 
    echo "window.location='ticket.php?history_id=$history_id';";
    echo "</script>";
   

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>:: BOOK ::</title>
    <link rel="icon" href="img/logo/logo2.png" type="image/x-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
   
    <!-- <link href="DataTables/datatables.min.css" rel="stylesheet"/> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- font -->
    <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap'); 
        body {
            font-family: 'Sarabun', sans-serif;
        }
    </style> 

    <!-- card -->
    
 
  </head>
<?php
@session_start(); 
// include("head.php");
include("navbar.php");

@$book_id=$_REQUEST["book_id"];
@$user_id=$_SESSION["user_id"];

$sql="SELECT * FROM b_book
INNER JOIN b_type_book
ON b_book.type_id=b_type_book.type_id
WHERE book_id=$book_id";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);


// ------------------------------
// echo $ch="SELECT * FROM `b_history` WHERE book_id='$book_id' AND user_id='$user_id' AND status_history='3' ";
// $query_ch=mysqli_query($con,$ch);
// echo "เช็ค สถานะคืนสำเร็จ เลข 3 = มีจำนวน ";
// $row_ch=mysqli_num_rows($query_ch);
// echo $row_ch;
// echo "<br>";

// echo $ch2="SELECT * FROM `b_history` WHERE book_id='$book_id' AND user_id='$user_id' AND status_history='2'  ";
// $query_ch2=mysqli_query($con,$ch2);
// echo "เช็ค กำลังยืม เลข 2 = มีจำนวน ";
// $row_ch2=mysqli_num_rows($query_ch2);
// echo $row_ch2;
// echo "<br>";

// echo $ch3="SELECT * FROM `b_history` WHERE book_id='$book_id' AND user_id='$user_id' AND status_history='1'  ";
// $query_ch3=mysqli_query($con,$ch3);
// echo "เช็ค กำลังยืม เลข 1 = มีจำนวน ";
// $row_ch3=mysqli_num_rows($query_ch3);
// echo $row_ch3;
// echo "<br>";


$ch4="SELECT * FROM `b_history` WHERE book_id='$book_id' AND user_id='$user_id' ORDER BY  history_id  DESC LIMIT 1  ";
$query_ch4=mysqli_query($con,$ch4);
// echo "เช็คตารางล่าสุด คือ = เลข  ";
$num=mysqli_fetch_array($query_ch4);
@$status_book=$num["status_history"];
@$history_id=$num["history_id"];

// echo $status_book;
// echo "<br>";
if($status_book=="3"){
//   echo  "เล่มนี้ คืนสำเร็จแล้ว --กดยืมได้";
  
}elseif($status_book=="2"){
//   echo  "เล่มนี้กำลังยืมอยู่    --กดยืมไม่ได้";

}elseif($status_book=="1"){
//   echo  "เล่มนี้กำลังขอยืม    --กดยืมไม่ได้";
}else{
//   echo  "เล่มนี้ไม่มีประวัติการยืมสำหรับบัญชีนี้ --กดยืมได้";

}

// ------------------------------------

// $sql_status="SELECT * FROM `b_history` WHERE book_id='$book_id' AND user_id='$user_id' ";
// $query_status=mysqli_query($con,$sql_status);
// $row_status=mysqli_fetch_array($query_status);

 
$sql_fav="SELECT * FROM `b_fev`
WHERE user_id='$user_id' AND book_id='$book_id' ";
$query_fav=mysqli_query($con,$sql_fav);
$row_fav=mysqli_num_rows($query_fav);
// echo $row_fav;
 
?>
 
 
 <script src="dist/spotlight.bundle.js"></script> 
 
 <br>
<div class="container">
<div class="container">
    
<div class="card mb-3 shadow p-3 mb-5 rounded" >
  <div class="row g-0">
  <table class="table table-borderless table-sm" >
    <!-- <table class="table table-bordered border-primary" > -->
        <tr> 
            <td></td>
            <td colspan="2">
                <h5><b>รายละเอียด </b></h5>  
            </td>
            <td >
                <p align="center">  
                    <?php if($row_fav=="0"){ ?>
                <button onclick="window.location='product.php?book_id=<?php echo $book_id; ?>&act=fav';" class="btn btn-danger btn-sm" <?php if(@$_SESSION["status_user"]==NULL){ ?> disabled <?php } ?>><i class="bi bi-heart"></i></button> 
                        <?php } ?>
                        <?php if($row_fav=="1"){ ?>
                <button onclick="window.location='product.php?book_id=<?php echo $book_id; ?>&act=del_fav';" class="btn btn-danger btn-sm" <?php if(@$_SESSION["status_user"]==NULL){ ?> disabled <?php } ?>><i class="bi bi-heart-fill"></i></button> 
                        <?php } ?>
                </p>
            </td>    
            <td></td>  

        </tr>

        <tr>
            <td></td> 
            <td colspan="3" style="font-size: 11px;"><a href="index.php">หน้าหลัก</a> / <a
                    href="product_type.php?type_id=<?php echo $row["type_id"]; ?>"><?php echo $row["type_name"]; ?></a> /
                <?php echo $row["book_name"]; ?></td>
                <td></td>  
 
        </tr>
    </table>

    <div class="col-md-4">
         
            <div class="spotlight-group" data-fit="cover" data-autohide="all"  align="center" >
                <a class="spotlight" href="img/book/<?php echo $row["book_img"]; ?>" >
                    <img src="img/book/<?php echo $row["book_img"]; ?>" style="max-height:300px; border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;"    >
                </a> 
            </div>
        
    </div>
    <div class="col-md-8">
      <div class="card-body ">
        <h5 class="card-title"><b style="font-size: 16px;"><?php echo $row["book_name"]; ?></b></h5>
        <p class="card-text"><?php echo $row["book_writer"]; ?></p>
        <p class="card-text" style="font-size: 12px;"><?php  echo number_format($row["book_price"]); echo " บาท"; ?></p>

        <p class="card-footer" style="max-width:600px;">
        <?php echo $row["book_detail"]; ?><br></p> 
    
        <p align="center" class="card-text" style="max-width:600px;"> 
                <button  type="button" onclick="window.location='product.php?book_id=<?php echo $book_id; ?>&act=start';" class="btn btn-info" <?php if(@$_SESSION["status_user"]!=3){ ?> disabled <?php } ?> <?php if(@$status_book=="1"){ ?> disabled <?php } ?><?php if(@$status_book=="2"){ ?> disabled <?php } ?>>ยืมหนังสือ</button>        
                <?php if(@$status_book=="1"){ ?>
                    <button  type="button" onclick="window.location='product.php?book_id=<?php echo $book_id; ?>&act=cancel';" class="btn btn-danger" >ยกเลิก</button>
                <?php } ?>
                <?php if(@$status_book=="2"){ ?>
                    <button  type="button" onclick="window.location='product.php?history_id=<?php echo $history_id; ?>&act=end';" class="btn btn-danger" <?php if(@$_SESSION["status_user"]==NULL){ ?>disabled<?php } ?>>คืนหนังสือ</button>
                <?php } ?> 

        </p> 
    </div>
    
  </div>

</div>
<table>
    <tr>
        <td><font color="white">1</font></td>
    </tr>
    <tr>
        <td><font color="white">1</font></td>
    </tr>
</table>
</div>
 
 
 
</div>
</div>
 

