<?php
require_once './functions.php';
if (isset($_GET['length'])) {
  session_start();
  $indici = [0];
  if (isset($_GET['maiuscole'])) $indici[] = 1;
  if (isset($_GET['numeri']))    $indici[] = 2;
  if (isset($_GET['simboli']))   $indici[] = 3;
  $_SESSION['length'] = $_GET['length'];
  $_SESSION['password'] = generate_password($_GET['length'], $indici);
  header('Location: ./result.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    #main-container {
      width: 700px;

    }

    .bored {
      border: 2px solid red;
    }
  </style>
</head>

<body data-bs-theme="dark">
  <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
    <div class="container text-center" id="main-container">
      <div class="row">
        <div class="col mb-3">
          <h1>🔐 Strong Password Generator</h1>
          <h3 class="text-muted">Genera una password sicura</h3>


        </div>
      </div>
      <div class="row">
        <div class="col bg-light text-dark p-4 rounded">
          <form action="./index.php" method="get">
            <div class="mb-3 d-flex justify-content-between align-items-center">
              <label for="length" class="form-label">Lunghezza</label>
              <input type="number" class="form-control w-50" name="length" min='1' required>
            </div>
            <div class="row d-flex justify-content-end">
              <div class="col-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" name="maiuscole">
                  <label class="form-check-label" for="maiuscole">
                    Lettere Maiuscole
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="2" name="numeri">
                  <label class="form-check-label" for="numeri">
                    Numeri
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="3" name="simboli">
                  <label class="form-check-label" for="simboli">
                    Simboli
                  </label>
                </div>
              </div>
            </div>
            <div class="text-start">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>