<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
  </div>
  <div class="pull-left">
  <h1>Log actions</h1>
    <?php include 'serv.php';
if(isset($_POST['submit'])) {
      echo 'Buscaste un credit check';
} 
if (!$conect)
  {
  echo 'Could not connect: ' . mysql_error();
  }
else {
  echo 'Succesfully loged in at: ' . date("Y/m/d H:i:s");
}


if ($_POST['id'] >= 0) {
  echo '<br> ID: Checked';
}
else {
  echo '<br> WARNING: This ID is loged in other device or open in another window';
}

if ($_POST['user'] == $_SESSION['user']) {
  echo '<br> User: Checked';
}
else {
  echo '<br> WARNING: This User is loged in other device or open in another window';
}

if ($_POST['email']  == $_SESSION['user']) {
  echo '<br> Email: Checked';
}
else {
  echo '<br> WARNING: This email session is open in other device or in another window';
}

    ?>
    
    <?php 
    
    
    ?>
    <h3>Company data</h3>
    <?php while($row = mysql_fetch_array($result))
{echo "Company ID: " .$row['id']. "<br> Company email: ".$row['email']. "<br> Username: " .$row['user']; } 
    ?>
    
    <h3>Errors</h3>
    <?php
$errors = error_reporting(E_ALL);
  if ($errors >= 1) {
    echo ini_set('display_errors', '1');
  } else {
  echo 'No errors found';
  }
?>
    
  </div>
  
<?php include 'footer.php' ?>
</body>
</html>