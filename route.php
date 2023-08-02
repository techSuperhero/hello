<?php
function checkAccess() {
  if($_SESSION["role"]!=1){
    header("Location: error.php");
  }
}
function onLoad() {?>
  <script type="text/javascript">
  $(window).on('load',function(){
   var delayMs = 2000; // delay in milliseconds
   
   setTimeout(function(){
       $('#myModal').modal('show');
   }, delayMs);
  }); 
</script><?php
} 
function navbar() {
  require_once './navBar.php';
}
  
?>