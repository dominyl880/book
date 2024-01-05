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
  "><i onclick="window.location='admin.php';" class="bi bi-arrow-left-square-fill"></i>
</div> 
<?php
include("condb.php");
include("navbar.php");
 
$sql="SELECT * FROM b_book 
INNER JOIN b_type_book
ON b_book.type_id=b_type_book.type_id
ORDER BY book_view DESC 
";
$query=mysqli_query($con,$sql);

 
?>
 
 <br> 
 <center style="font-size: 24px;"><b>ความนิยม</b></center>

  
<main style="margin-top: 5px">
    <div class="container pt-4"> 
        <table id="example" class="table is-striped responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th width="5%">รหัส</th>
                    <th width="10%">รูปภาพ </th>  
                    <th width="10%">หมวดหมู่หนังสือ</th>
                    <th>ชื่อหนังสือ </th>
                    <th width="7%">ยอดวิว</th>      
                </tr>
            </thead>
            <tbody>
                <?php  while($row=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo $row["book_id"]; ?></td>
                    <td><img src="img/book/<?php echo $row["book_img"]; ?>" width="80px"></td>
                    <td><?php echo $row["type_name"]; ?></td>
                    <td><?php echo $row["book_name"]; ?></td>
                    <td>
                        <?php echo $row["book_view"]; ?>
                    </td>   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main><br>
    <?php //include("script.php"); ?>
