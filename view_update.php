<?php 
session_start();
include("condb.php");
 
@$book_id=$_REQUEST["book_id"];
if($book_id!=NULL){
    $sql_view_old="SELECT `book_view` FROM `b_book` WHERE book_id='$book_id' ";
    $query_view_old=mysqli_query($con,$sql_view_old);
    $row_view_old=mysqli_fetch_array($query_view_old);

    $view_old=$row_view_old["book_view"];
    $view=$view_old+1;

    $sql_view_update="UPDATE `b_book` SET `book_view`='$view' WHERE book_id='$book_id' ";
    $query_view_update=mysqli_query($con,$sql_view_update);
    if($query_view_old && $query_view_update){
        echo "<script>";
        echo "window.location='product.php?book_id=$book_id';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "window.history.back();";
        echo "</script>";
    }
}else{
    echo "<script>";
    echo "window.history.back();";
    echo "</script>";
}

?>