<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
}

if (isset($_POST['action']) && $_POST['action'] === 'up') {
  $_SESSION['count']++;
}

if (isset($_POST['action']) && $_POST['action'] === 'reset') {
  $_SESSION['count'] = 0;
}


?>
<html>
<body>
<h1 id="current_count"><?php echo $_SESSION['count']; ?></h1>

<form action="index.php" method="POST" id="cookie_form">
  <input type="hidden" name="action" value="up">
  <input type="submit" value="click">
</form>
<form action="index.php" method="POST" id="cookie_form">
  <input type="hidden" name="action" value="reset">
  <input type="submit" value="reset">
</form>

</body>
</html>
