<?php
// Set session variables
// include './route.php';
$_SESSION["role"] = 1;
require_once './route.php';
checkAccess();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Web Services</title>
  </head>
  <body>
    <?php
    navbar();
    ?>
      <div id="pricing">
      </div>
         <div class="container">
            <h1 style="text-align: center;font-weight:800;">Student Records</h1><br><br>
            <?php include './user.php';
            UserTable(2)?>
         </div>

    <script src="lib/js/jquery-3.3.1.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/jquery.sticky.js"></script>
    <script src="lib/js/main.js"></script>
    <script>
      $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
    </script>
  </body>
</html>