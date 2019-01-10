<?php
  $users = [
    'user1' => 'pass1',
    'user2' => 'pass2'
  ];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div class="container">
      <div class="row justify-content-sm-center">
<?php
  session_start();
  if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if(isset($users[$user]) && $users[$user] == $pass) {
      echo "Bine ai venit, $user";
      $_SESSION['user'] = $user;
    }else{
      echo 'User sau parola gresita';
    }
  }
  elseif (isset($_SESSION['user'])){
    echo 'Bine ai venit, '.$_SESSION['user'];
  }
  else {
 ?>


    <form method="post">
      <div class="form-group">
        <label for="user">Username:</label>
        <input type="text" name="user" class="form-group">
      </div>
      <div class="row justify-content-sm-center">
        <label for="pass">Parola:</label>
        <input type="password" name="pass" class="form-group">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</form>
<?php } ?>
</body>
</html>
