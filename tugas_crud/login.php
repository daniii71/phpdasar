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
    background-image: url("https://blog.tiket.com/wp-content/uploads/Image-Blog_Karimunjawa-1.jpg");
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover; 
        background-position: center; 
        background-attachment: fixed;
  }
</style>

<body class="min-vh-100 d-flex align-items-center">
<div class="card w-50 m-auto p-3">
   <form action="connect_login.php" method="post">
      <h3 class="text-center text-danger">LOGIN</h3>
      <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>  	

			<div class="mb-3">
          <label for="password" class="password">password</label>
					<input type="password" class="form-control" id="password" name="password">
			</div>
      <div class="d-grid gap-2 col-6 mx-auto"> 
      <button type="submit" class="btn btn-primary text-bg-info">Login</button> 
      <div class="text-center"> 
      <p>Belum punya akun? <a href="Register.php">Register</a></p> 
      </div>
			
	</div>
</body>
</html>