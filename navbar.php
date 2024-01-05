<?php @session_start(); ?>
<nav class="navbar navbar-expand-lg bg-dark  py-3" data-bs-theme="dark">
  <div class="container-fluid"> 
    <?php if(@$_SESSION["status_user"]==NULL){ ?>
      <a class="navbar-brand" href="index.php" style="text-decoration:none" >
      <!-- null -->
    <?php }elseif(@$_SESSION["status_user"]>=3){ ?>
      <a class="navbar-brand" href="member.php" style="text-decoration:none">
      <!-- >=3 -->
    <?php }elseif(@$_SESSION["status_user"]<=2){ ?>
      <a class="navbar-brand" href="admin.php" style="text-decoration:none">
      <!-- <=2 -->
    <?php } ?>
        <h1 class="d-flex align-items-center fs-4 text-white mb-0">
          <img src="img/logo/logo2.png" width="30" height="30" class="me-3" alt="Bootstrap">
          YANISA 
   
        </h1>
      </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
        </li>
        <li class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ประเภทหนังสือ
          </a>
          <ul class="dropdown-menu">
            <?php 
              include("condb.php");
              $sql_type_navbar="SELECT * FROM b_type_book ";
              $query_type_navbar=mysqli_query($con,$sql_type_navbar);
              while($row_type_navbar=mysqli_fetch_array($query_type_navbar)){ 
                $type_name_navbar=$row_type_navbar["type_name"];
                $type_id_navbar=$row_type_navbar["type_id"];

            ?>
            <li><a class="dropdown-item " href="product_type.php?type_id=<?php echo $type_id_navbar; ?>"><font color="white"><?php echo $type_name_navbar; ?></font></a></li> 
            <?php } ?> 
          </ul>
        </li>
        <li class="nav-item ">
          <a href="borrowing.php" class="nav-link <?php if(@$_SESSION["status_user"]==""){ ?>disabled <?php } ?> " style="<?php if(@$_SESSION["status_user"]==""){ ?>color: Gray;<?php }else{ ?> color: white; <?php } ?>" >
          <?php if(@$_SESSION["status_user"]==NULL){ ?>การยืม<?php }else{ ?>
          
          <?php if(@$_SESSION["status_user"]>=3){ ?>การยืม 
             
          <?php
           include("condb.php");
           @$user_id=$_SESSION["user_id"];
           $sql_count_history1="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE user_id='$user_id' AND status_history='1'
           ";
           $query_count_history1=mysqli_query($con,$sql_count_history1);
           $count_history1=mysqli_num_rows($query_count_history1);
          
          ?>
          <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .55rem;"><?php echo $count_history1; ?></button>
 
          <?php } ?> 

          <?php if(@$_SESSION["status_user"]<=2){ ?>อนุมัติการยืม 
            <?php
           include("condb.php");
           @$user_id=$_SESSION["user_id"];
           $sql_count_history1="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE status_history='1'
           ";
           $query_count_history1=mysqli_query($con,$sql_count_history1);
           $count_history1=mysqli_num_rows($query_count_history1);
          
          ?>
          <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .55rem;"><?php echo $count_history1; ?></button>  
            
          <?php }} ?> 


          </a>
        </li>  
        <li class="nav-item">
          <a href="return.php" class="nav-link <?php if(@$_SESSION["status_user"]==""){ ?>disabled<?php } ?>" style="<?php if(@$_SESSION["status_user"]==""){ ?>color: Gray;<?php }else{ ?> color: white; <?php } ?>">
          <?php if(@$_SESSION["status_user"]==NULL){ ?>การคืน<?php }else{ ?>
          
          <?php if(@$_SESSION["status_user"]>=3){ ?>การคืน 
            <?php
            include("condb.php");
            @$user_id=$_SESSION["user_id"];
            $sql_count_history2="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE user_id='$user_id' AND status_history='2'
            ";
            $query_count_history2=mysqli_query($con,$sql_count_history2);
            $count_history2=mysqli_num_rows($query_count_history2);
            
            ?>
          <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .55rem;"><?php echo $count_history2; ?></button>
          <?php } ?>
           

          <?php if(@$_SESSION["status_user"]<=2){ ?>อนุมัติการคืน 
              <?php
              include("condb.php"); 
              $sql_count_history2="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE status_history='2'
              ";
              $query_count_history2=mysqli_query($con,$sql_count_history2);
              $count_history2=mysqli_num_rows($query_count_history2);
              
              ?>
            <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .55rem;"><?php echo $count_history2; ?></button>
          <?php }} ?> 
          
       

          </a>
        </li>
        <li class="nav-item">
          <a href="history_bb.php" class="nav-link <?php if(@$_SESSION["status_user"]==""){ ?>disabled<?php } ?>" style="<?php if(@$_SESSION["status_user"]==""){ ?>color: Gray;<?php }else{ ?> color: white; <?php } ?>">
          ประวัติการยืม-คืน
          <?php if(@$_SESSION["status_user"]!=NULL){ ?>
          <?php if(@$_SESSION["status_user"]>=3){ ?>
            <?php
            include("condb.php");
            @$user_id=$_SESSION["user_id"];
            $sql_count_history3="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE user_id='$user_id' 
            ";
            $query_count_history3=mysqli_query($con,$sql_count_history3);
            $count_history3=mysqli_num_rows($query_count_history3);
            
            ?>
          <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .55rem;"><?php echo $count_history3; ?></button>
          <?php } ?>

          <?php if(@$_SESSION["status_user"]<=2){ ?>
          <?php
           include("condb.php");
           @$user_id=$_SESSION["user_id"];
           $sql_count_history3="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` 
           ";
           $query_count_history3=mysqli_query($con,$sql_count_history3);
           $count_history3=mysqli_num_rows($query_count_history3);
          
          ?>
          <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .55rem;"><?php echo $count_history3; ?></button>
          <?php }} ?>
          </a>
        </li>
       
      </ul>
 

      <form action="search.php" method="POST" class="d-flex" role="search" style=" position: absolute;
  bottom: 25px;
  right: 130px;
  font-size: 18px;">
        <input class="form-control me-2" type="search" name="word" placeholder="Search" value="<?php echo @$word; ?>" aria-label="Search">
        <button class="btn btn-outline-success"   type="submit">Search</button>
        </form>

 

      &nbsp;&nbsp; 
 

      <?php if(@$_SESSION["status_user"]!=NULL){ ?>
        <button type="button" onclick="window.location='logot.php';" class="btn btn-outline-warning" style=" position: absolute;
  bottom: 25px;
  right: 10px;
  box-shadow: 5px 5px 5px lightblue;">ออกจากระบบ</button>
      <?php } ?>
      <?php if(@$_SESSION["status_user"]==NULL){ ?>
        <button type="button" onclick="window.location='login.php';" class="btn btn-outline-warning" style=" position: absolute;
  bottom: 25px;
  right: 10px;
  box-shadow: 5px 5px 5px lightblue;"><font color="black">--</font>เข้าสู่ระบบ<font color="black">--</font></button>
        
      <?php } ?>
    
    </div>
  </div>
  
</nav>