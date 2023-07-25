<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>mohacking</title>
</head>

<body class="no-scroll">
    <div class="centrado" id="onload">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <h2 class="mb-4">Inicio de Sesión</h2>
              <form method="post" action="procesar_login.php">
                  <div class="form-group">
                      <label for="inputEmail">Correo Electrónico</label>
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="User">
                  </div>
                  <div class="form-group">
                      <label for="inputPassword">Contraseña</label>
                      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
              </form>
          </div>
      </div>
  </div>
  


    <hr>
        <footer class="container d-grid gap-2">
            <p>© mohacking inc<i class="bi bi-patch-check-fill"></i></p>
        </footer>
    </div>

    <script src="code.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>