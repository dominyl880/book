<?php 
@session_start();
include("head.php");
?>
 <div style=" position: absolute;
  left: 0px;
  top: 10px; 
  padding: 10px;
  z-index: 10;  
  background-color: #ffffff;
  ">
</div>
<?php
include("condb.php");

include("navbar.php");

if(@$_SESSION["status_user"]!="3"){
  echo "<script type='text/javascript';>";
  echo "alert('ออกไป!!');";
  echo "window.location='logot.php';";
  echo "</script>";
}
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
  
?> 
<body>
  <!--Main Navigation-->
 

  <!--Main layout-->
  <main style="margin-top: 5px">
    <div class="container pt-4"> 
      <!--Section: Minimal statistics cards-->
      <section>
        <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1"  onclick="window.location='index.php';">
                  <div class="align-self-center">
                    <i class="fas fa-house-damage text-warning fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3></h3>
                    <p class="mb-0">หน้าหลัก</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1" onclick="window.location='borrowing.php';">
                  <div class="align-self-center">
                    <i class="fas fa-clone text-info fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>
                    
                    <?php
                      include("condb.php");
                      $sql_count_history1="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE user_id='$user_id' AND status_history='1'
                      ";
                      $query_count_history1=mysqli_query($con,$sql_count_history1);
                      $count_history1=mysqli_num_rows($query_count_history1);
                      echo $count_history1; 
                    ?>

                    </h3>
                    <p class="mb-0">การยืม</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1" onclick="window.location='return.php';">
                  <div class="align-self-center">
                    <i class="fas fa-file-export text-success fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>
                    
                    <?php
                      include("condb.php");
                      $sql_count_history1="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE user_id='$user_id' AND status_history='2'
                      ";
                      $query_count_history1=mysqli_query($con,$sql_count_history1);
                      $count_history1=mysqli_num_rows($query_count_history1);
                      echo $count_history1; 
                    ?>

                    </h3>
                    <p class="mb-0">การคืน</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1" onclick="window.location='history_bb.php';">
                  <div class="align-self-center">
                    <i class="fas fa-archive text-danger fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>
                      
                    <?php
                      include("condb.php");
                      $sql_count_history1="SELECT `history_id`,`user_id`,`status_history` FROM `b_history` WHERE user_id='$user_id'
                      ";
                      $query_count_history1=mysqli_query($con,$sql_count_history1);
                      $count_history1=mysqli_num_rows($query_count_history1);
                      echo $count_history1; 
                    ?>

                    </h3>
                    <p class="mb-0">ประวัติการยืม-คืน</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     

        <div class="row">   
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1" onclick="window.location='fev_book.php';">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fas fa-rocket text-danger fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Favorite Book</h4>
                      <p class="mb-0">หนังสือที่ชอบ</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">
                    
                    <?php
                      include("condb.php");
                      $sql_count_history1="SELECT * FROM `b_fev` WHERE user_id='$user_id' 
                      ";
                      $query_count_history1=mysqli_query($con,$sql_count_history1);
                      $count_history1=mysqli_num_rows($query_count_history1);
                      echo $count_history1; 
                    ?>

                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1" onclick="window.location='edit_user.php';">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="far fa-user text-success fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Edit Profile</h4>
                      <p class="mb-0">แก้ไขข้อมูลส่วนตัว</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0"></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 
      </section>
      
      <?php include("retrun2.php"); ?>

    </div>
  </main>
  

</body>

</html>
<?php include("script.php"); ?>
