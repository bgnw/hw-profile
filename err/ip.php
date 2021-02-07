<!DOCTYPE html>
<html lang="en">
<?php
$home = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
require_once "$home/incl/head.php";
?>
<body>


<div class="card error">
  <p class="title">Access Denied</p>
  <p>Sorry - you cannot access that page from your current IP address.</p>
  <br>
  <div class="link-collection">
    <a class="link" href="javascript:history.back()"><p>Go Back &rsaquo;</p></a>
    <a class="link" href="../"><p>Homepage &rsaquo;</p></a>
  </div>
</div>


<?php include_once "$home/incl/footer.php"; ?>
</body>
</html>
