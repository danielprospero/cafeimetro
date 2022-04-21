<!DOCTYPE html>
<html>
	<head>
		<title>Cafeímetro</title>
		<meta charset="utf-8">
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="css/cafeimetro.css" rel="stylesheet" />
		<link href="css/cafeimetro-login.css" rel="stylesheet" />
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"> 
        <div class="card card-signin my-5">
          <div class="card-body">
            
			<h5 class="card-title text-center">
			<i class="fa fa-coffee fa-5x"></i>
			</h5>
           
		   <form class="form-signin" action="login-valida.php" method="post">
		   
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <label for="email">Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <label for="senha">Senha</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
			  
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>