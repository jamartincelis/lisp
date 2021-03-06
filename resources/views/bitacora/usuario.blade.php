@extends('layouts.bitacora')

@section('content')
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Administraci&oacute;n</a></li>
			<li class="breadcrumb-item active">Usuarios</li>
		</ol>		
		<div class="row">
			<div class="col-md-3">
					<h1 class="h1-margin">Usuarios</h1>
			</div>

			<div class="col-md-4 pull-right">
				<form class="form-inline" action="\create_user.html">
					<div class="form-group">
						<div class="pull-right">
							<label for="exampleInputEmail2">Perfiles: </label>
							<select class="form-control">
								<option>Administrador</option>
								<option>Esp. Operaciones</option>
							</select>
							<button type="submit" class="btn btn-primary">Crear usuario</button>							
						</div>
					</div>		
				</form>				
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-condensed">
				 <tr>
						<th>#</th>
						<th>Usuario</th>
						<th>Nombre</th>
						<th>Apellido</th> 
						<th>Perfil</th> 
						<th>Status</th>
						<th>Modificaciones</th>
					</tr>			
					<tr>
						<td>1</th>
						<td>cborges</td>
						<td>Christian</td>
						<td>Borges</td>
						<td>Administrador</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>
					<tr>
						<td>2</th>
						<td>jalvarez</td>
						<td>Juan</td>
						<td>Alvarez</td>
						<td>Administrador</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>
					<tr>
						<td>3</th>
						<td>jColmenares</td>
						<td>Jose</td>
						<td>Colmenares</td>
						<td>Esp. Operaciones</td>
						<td>Inactivo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>						
					<tr>
						<td>4</th>
						<td>pprez</td>
						<td>Pedro</td>
						<td>Perez</td>
						<td>Esp. Operaciones</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>				
			</table>
		</div>
@stop