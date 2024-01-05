<?php
@session_start();
@$word=$_REQUEST["word"];
 
include("condb.php");
include("head.php");
include("navbar.php");

 
?>

<h2><center style="font-size: 24px;">
<?php
echo "<br>";
echo "คำค้น : <b>".$word."</b>"; 
echo "<br>";
echo "<br>";

?>
</center>
</h2>

 

        <div class="container "> 
      <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
             
                  <?php 
                  include("condb.php");
                  $sql_while_product="SELECT * FROM b_book WHERE book_name LIKE '%".$word."%'  ";
                  $query_while_product=mysqli_query($con,$sql_while_product);
                  include("product_while.php"); 
                  ?>
           
 
            
       
          </div>
        </div>

