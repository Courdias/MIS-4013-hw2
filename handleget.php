<!doctype html>
<html lang="en">


<?php
  include "header.php";
?>
  </div>
</div>
    <h1>HW2 Get Response</h1>
    <html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<?php
  include "gohomebutton.php";
?>
  <?php
function writeMsg() {
  echo "You can tell this is a get because the input shows in the url.!";
}

writeMsg();
?>

</html>
