<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Application</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<!-- Estilos -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
	<!-- Funciones -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/sweetalert.min.js"></script>
	<script src="assets/js/app.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">Encuestas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Temas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Login</a>
				</li>
			</ul>
		</div>

	</div>
</nav>

<div class="container">
	<div class="text-center mt-4"><h1><span class="text-primary">E</span>ncuestas</h1></div>
	<div class="row">
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Encuesta1</a></li>
					<li class="breadcrumb-item"><a href="#">Pregunta1</a></li>
					<li class="breadcrumb-item active" aria-current="page">Opciones</li>
				</ol>
			</nav>
			
			<div class="contenido">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Agregar
				</button>
				
				<table class="table table-bordered table-dark">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Encuesta</th>
							<th scope="col">Fecha</th>
							<th scope="col">Status</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Quesadillas</td>
							<td>23-jul-2018</td>
							<td>Cerrada</td>
							<td>
								<button type="button" class="btn btn-danger">
									<i class="fa fa-minus-circle"></i>
								</button>
								<button type="button" class="btn btn-success">
									<i class="fa fa-pencil"></i>
								</button>
								<button type="button" class="btn btn-primary">c-a</button>
							</td>
						</tr>
					</tbody>
				</table>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nueva encuesta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="#" id="form_encuesta01">
				<div class="modal-body">
					<div class="form-group">
						<label for="Titulo">Titulo: </label>
						<input type="text" placeholder="Titulo" class="form-control" name="titulo">
					</div>

					<div class="form-group">
						<label for="Descripcion">Descripcion: </label>
						<input type="text" placeholder="Descripcion" class="form-control" name="descripcion">
					</div>
				</div>
				<div class="mt-2 text-center d-none" id="loadingicon">
					<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
					<span class="sr-only">Loading...</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="SaveChanges01">Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>

			</div>
		
		</div>
		
		<div class="col-md-4">
			
			<div class="card">
				<div class="card-header">
					Featured
				</div>
				<div class="card-body">
					<ul class="list-group">
					  <li class="list-group-item">Cras justo odio</li>
					  <li class="list-group-item">Dapibus ac facilisis in</li>
					  <li class="list-group-item">Morbi leo risus</li>
					  <li class="list-group-item">Porta ac consectetur ac</li>
					  <li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>
			</div>

			<br>

			<div class="card">
				<div class="card-header">
					Temas
				</div>
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>

	</div>
</div>

</body>
</html>