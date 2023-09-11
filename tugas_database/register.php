<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
  body {
    background-image: url("https://www.klayapan.com/wp-content/uploads/2023/07/Aktivitas-seru-di-Heha-Sky-View.jpg");
  }
  </style>

<body class="min-vh-100 d-flex align-items-center">
<div class="card w-50 m-auto p-3">
   <form action="connect_regrister.php" method="post">
      <h3 class="text-center text-danger">REGISTER</h3>
      <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>  	
      <div class="mb-3">
      <label for="username" class="form-label">username</label>
      <input type="username" class="form-control" id="username" name="username">
    </div>  	

			<div class="mb-3">
          <label for="password" class="password">password</label>
					<input type="password" class="form-control" id="password" name="password">
			</div>
      <div class="d-grid gap-2 col-6 mx-auto"> 
      <button type="submit" class="btn btn-primary text-bg-success">Register</button> 
      </div>

			</form>
      <br> 
        <p class="text-center">sudah punya akun? <a href="login.php">login akun</a></p>
	</div>
</body>
</html>