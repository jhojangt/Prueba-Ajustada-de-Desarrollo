<?php
if(isset($_GET['code'])) {
	try {
		$capi = new GoogleCalendarApi();
		
		// Get the access token 
		$data = $capi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Save the access token as a session variable
		$_SESSION['access_token'] = $data['access_token'];

		// Redirect to the page where user can create event
		header('Location: '. RUTA_URL. '/paginas/agregar'  );
		exit();
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>

<!DOCTYPE.html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="id=edge">
		<!--bootstrap css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<!--jquery-->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<!--tether-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<!--bootstrap js-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<!--tempus-->		
		  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/moment@2.20.1/moment.min.js"></script>
		  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<title><?php echo NOMBRESITIO; ?></title>
	</head>
<body>
	<div class="container">
		 <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo RUTA_URL;?>">Agenda </a>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?= LINKLOGIN ?>">Insertar Tarea</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	