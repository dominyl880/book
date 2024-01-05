<?php 
@session_start();
include("condb.php");
include("head.php");
include("navbar.php");

 
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
$type_id=$_REQUEST["type_id"];

$sql="SELECT * FROM b_book 
INNER JOIN b_type_book
ON b_book.type_id=b_type_book.type_id
WHERE b_book.type_id='$type_id' ";
$query=mysqli_query($con,$sql);
$type_title=mysqli_fetch_array($query);

$sql_type_name="SELECT * FROM b_type_book 
WHERE type_id='$type_id' ";
$query_type_name=mysqli_query($con,$sql_type_name);
$type_title_type_name=mysqli_fetch_array($query_type_name);
 
?>

<style>
body {
  /* background-color: yellow; */
}

@media only screen and (max-width: 1300px) {
  body {
    /* background-color: lightblue; */
  }

}
</style>
<h2><center style="font-size: 24px;">
<?php
echo "<br>";
echo "<b>".$type_title_type_name["type_name"]."</b>"; 
echo "<br>";
echo "<br>";

?>
</center>
</h2>


    <div class="container "> 
      <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
             
                  <?php 
                  include("condb.php");
                  $sql_while_product="SELECT * FROM b_book WHERE type_id='$type_id' ORDER BY book_view DESC";
                  $query_while_product=mysqli_query($con,$sql_while_product);
                  include("product_while.php"); 
                  ?>
           
 
            
       
          </div>
        </div>
 