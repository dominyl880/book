<?php
if(@$_SESSION["status_user"]==NULL){
    echo "<script type='text/javascript';>";
    echo "alert('ออกไป!!');";
    echo "window.location='logot.php';";
    echo "</script>";
}

?>