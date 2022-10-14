<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link
		rel="stylesheet" href="style.css">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


	</head>
	<body>
		<nav class="navbar navbar-expand-lg  bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Discovery Boostrap 5.1</a>
    <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto   mb-2 mb-lg-0">
        <li class="nav-item text-light">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="#">Link</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
		<h1 class="text-center">Journey into Bootstrap classes</h1>
		<div class=" d-flex flex-row flex-wrap  justify-content-center">
			
		<?php for ($i = 0; $i < 4; ++$i) { ?> 
		<div class="card container-fluid" style="width:25rem">
			<img src="https://images.unsplash.com/photo-1664894626773-ef2687c14bc4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1964&q=80" class="card-img-top" alt="...">

	
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			
		</div>
		<?php } ?>
		</div>
		<h2 class="text-center mt-4">The css frameworks are very useful</h2>
		<p class="text-center">learning them code with practice</p>

		<footer class="text-center text-lg-start bg-primary text-light ">
		<p class="text-center p-3">	&copy; <?php echo date('Y'); ?> Wilders | images baby </p>
		</footer>
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


	</body>
</html>
