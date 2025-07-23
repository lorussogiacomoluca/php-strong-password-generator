<?php
session_start();
$length = $_SESSION['length'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body data-bs-theme="dark">
  <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h1>La tua password di <?php echo $length ?> caratteri e': </h1>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div
            class=" alert alert-success <?php if (!isset($password)) echo 'd-none'; ?>"
            role=" alert">
            <?php echo $password;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>