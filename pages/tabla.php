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