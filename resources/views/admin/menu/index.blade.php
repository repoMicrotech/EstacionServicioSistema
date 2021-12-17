@section('content')
<?php $editar=false; $eliminar=false;
foreach (Auth::user()->role->functionalities as $func) {
	if ($func->code=='EMEN'){ $editar=true; }
	if ($func->code=='DMEN'){ $eliminar=true; }
}
?>
<div class="card">
	<div class="card-header primary-low">
		<h5 class="card-title">Menus</h5>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<th>Id</th>
					<th>Code</th>
					<th>Label</th>
					<th>Orden</th>
					<th>Icon</th>
					@if ($editar)<th>Editar</th>@endif
					@if ($eliminar)<th>Borrar</th>@endif
				</thead>
				<tbody>
					@foreach($menus as $menu)
					<tr>
						<td>{{$menu->id}}</td>
						<td>{{$menu->code}}</td>
						<td>{{$menu->label}}</td>
						<td>{{$menu->orden}}</td>
						<td><i class="mdi mdi-{{$menu->icon}}"></i></td>
						@if ($editar)
						<td>
							<button wire:click="openModal()" class="btn-min primary">Editar</button>
						</td>
						@endif
						@if ($eliminar)
						<td>
							<button type="submit" class="btn-min danger" onclick="return confirm('Delete?');">Eliminar</button>
						</td>
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
@section('title')
@endsection
@section('modal')
<div class="form-group">
	<label for="code">Código</label>
	<input wire:model="code" type="text" name="code" id="code" placeholder="Ingrese el code" class="form-control" maxlength="10">
	<x-jet-input-error for='code' />
</div>
<div class="form-group">
	<label for="label">Nombre</label>
	<input wire:model="label" type="text" name="label" id="label" placeholder="Ingrese el label" class="form-control" maxlength="10">
	<x-jet-input-error for='label' />
</div>
<div class="form-group">
	<label for="icon">Icono</label>
	<input wire:model="icon" type="text" name="icon" id="icon" placeholder="Ingrese el icon" class="form-control" maxlength="10">
	<x-jet-input-error for='icon' />
</div>
<div class="form-group">
	<label for="orden">Orden</label>
	<input wire:model="orden" type="text" name="orden" id="orden" placeholder="Ingrese el orden" class="form-control" maxlength="10">
	<x-jet-input-error for='orden' />
</div>
<div id="fuentes"></div>
<div class="cont_fonts_svg"></div>
<div class="cont_fonts_svg"><?php include('../public/fonts/materialdesignicons-webfont.svg'); ?></div>
@endsection