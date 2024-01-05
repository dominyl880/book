 
 
<div class="container overflow-hidden"> 
    <div  class="row gy-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 ">
        <?php  while($row_while_product=mysqli_fetch_array($query_while_product)){ ?>
              <div class="col-6">  
              <div class="card h-100">
  

                    <img src="img/book/<?php echo $row_while_product["book_img"]; ?>"  class="card-img-bottom"  alt="...">

 
 
                    <div class="card-body"> 
                        <h5 class="card-title" style="font-size: 15px;"><b><?php echo $row_while_product["book_name"]; ?></b></h5>  
                        <p class="card-text" style="font-size: 13px;"><?php echo $row_while_product["book_writer"]; ?></p>
                    </div> 
                    <div class="card-footer" > 
                        <p align="center" style="font-size: 13px;"><?php echo $row_while_product["book_view"]; ?> view</p>
                        	
                    </div> 
                    <div class="card-footer">   
                            <a href="view_update.php?book_id=<?php echo $row_while_product["book_id"]; ?>"  class="btn btn-primary btn-block"> <i class="bi bi-journals"></i> รายละเอียด</a>
             	
                    </div>

                </div>
                   
              </div>

              
              
        <?php } ?>
 
    </div>

</div>

