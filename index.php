
<?php 
@session_start();
include("head.php");
?>

<?php if(@$_SESSION["status_user"]==NULL){?>
  <div style=" position: absolute;
  left: 0px;
  top: 10px; 
  padding: 10px;
  z-index: 10;  
  background-color: #ffffff;
  ">
</div>
<?php }elseif(@$_SESSION["status_user"]>=3){ ?>
<div style=" position: absolute;
  left: 20px;
  top: 90px; 
  padding: 10px;
  z-index: 5;
  border: 1px solid; 
  box-shadow: 5px 10px #888888;
  background-color: #FFCC33;
  "><i onclick="window.location='member.php';" class="bi bi-arrow-left-square-fill"></i>
</div>
 <?php }elseif(@$_SESSION["status_user"]<=2){ ?>
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
 <?php } ?>


<?php
include("condb.php");

 
?>

<body class="bg-light">
<header class="bd-header bg-dark">
 
    <?php include("navbar.php"); ?> 
 
</header>

 

  <div class="bd-cheatsheet container-fluid bg-body">
      <?php  ?>
    <section id="content">
    
    <article class="my-3" id="carousel">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
  
        </div>

        <div>
          
        <div class="container">
        <div class="container"> 
          <div class="bd-example-snippet bd-code-snippet">
          <div class="bd-example">
    
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active"> 
                <img src="img/slide/4.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" > 
              </div>
              <div class="carousel-item">
                <img src="img/slide/2.gif" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" > 
              </div>
              <div class="carousel-item">
                <img src="img/slide/3.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" > 
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div></div>
          <hr>
        </div>
 
        </div>
      </div>

      </article>



      <?php 
          include("condb.php");
        $sql_type="SELECT * FROM b_type_book ";
        $query_type=mysqli_query($con,$sql_type);
        while($row_type=mysqli_fetch_array($query_type)){ 
          $type_id=$row_type["type_id"];
        ?>

      <article class="my-3" id="typography">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
          <h5><?php echo $row_type["type_name"]; ?></h5>
          <a class="d-flex align-items-center" href="product_type.php?type_id=<?php echo $row_type["type_id"]; ?>">ดูทั้งหมด</a>
        </div>


        <?php 
          include("condb.php");
          $sql_while_product="SELECT * FROM b_book WHERE type_id='$type_id' ORDER BY 
          book_view DESC limit 0 , 6 ";
          $query_while_product=mysqli_query($con,$sql_while_product);
            include("product_while.php");
            ?>

  
      </article>

      <?php  } ?>
    
    </section>
  </div>


 
 
  </body>
</html>
