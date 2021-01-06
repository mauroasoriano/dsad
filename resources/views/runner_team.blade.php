@extends('layout.layout')
@section('title', 'Running team')
@section('content')
<div role="main" class="main" style="padding-top:100px">

	<section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5" style="background-image: url(img/page-header/page-header-elements.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="col-md-12 align-self-center p-static order-2 text-center">Running Team</h1>
				</div>
				<div class="col-md-12 align-self-center order-1">
				</div>
			</div>
		</div>
	</section>

	<div class="container py-2">

		<div class="row">
			<div class="col">

				<h4>Profesores</h4>
				@if($data_logged_user)
				@if(in_array('create_runner_team', $data_logged_user['modules']));
				<a class="class btn btn-outline-success" href="#" data-toggle="modal" data-target="#create_runner_team_modal">Crear nuevo equipo</a>
				<div class="modal fade" id="create_runner_team_modal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="smallModalLabel">Crear nuevo equipo</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-4 col-md-12">
										<div class="row">
											<div class="col-sm-12 text-center">
												<div class="image-upload">
												  <label for="file-input">
												    <i class="fas fa-upload" style="border:solid 1px; color:grey;padding:5px;font-size:200px;padding-top:5px"></i>
												  </label>
												  <input id="file-input" type="file" style="display: none;">
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-12">
										<div class="row">
											<h4 class="text-center col-sm-12" style="margin-bottom:0">Datos del profesor</h4>
											<hr class="col-sm-12">
									    <div class="col-md-4 col-sm-12">
									      <label for="name_teacher_label">Nombre</label>
									      <input type="text" class="form-control" id="name_teacher_label" placeholder="nombre" required>
									    </div>
									    <div class="col-md-4 col-sm-12">
									      <label for="last_name_teacher_label">Apellido</label>
									      <input type="text" class="form-control" id="last_name_teacher_label" placeholder="apellido" required>
									    </div>
									    <div class="col-md-4 col-sm-12">
									    	<label for="year_teacher_label">Edad</label>
									    	<input type="number" class="form-control" id="year_teacher_label" value="18">
									    </div>
									    <hr class="col-sm-12">
									    <h4 class="text-center col-sm-12" style="margin-bottom: 0;">Ubicación y horario</h4>
									    <hr class="col-sm-12">
									  	<div class="col-md-6">
									  		<form class="was-validated">
										  		<label for="provinces_label">Provincia</label>
												  <div class="form-group" id="provinces_label">
												    <select @change="change_localities($event)" class="custom-select" required>
												      <option value="">Provincia</option>
												      <option v-for="province in provinces" :value="province.id">@{{province.nombre}}</option>
												    </select>
												    <div class="invalid-feedback">Obligatorio</div>
												  </div>
												</form>
									  	</div>
									  	<div class="col-md-6">
									  		<form class="was-validated">
										  		<label for="localities_label">Localidad</label>
												  <div class="form-group" id="localities_label">
												    <select class="custom-select" required>
												      <option value="">Localidad</option>
												      <option v-for="locality in localities" :value="locality.id">@{{locality.nombre}}</option>
												    </select>
<select class="selectpicker" data-live-search="true">
  <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
  <option data-tokens="mustard">Burger, Shake and a Smile</option>
  <option data-tokens="frosting">Sugar, Spice and all things nice</option>
</select>

												    <div class="invalid-feedback">Obligatorio</div>
												  </div>
												</form>
									  	</div>
									  	<div class="col-sm-12 text-center">
									  		<label for="days_label">¡Crea una fecha y horario del profesor!</label>
												<div class="btn-toolbar" id="days_label" role="toolbar" aria-label="Toolbar with button groups">
												  <div class="btn-group mr-2" role="group" aria-label="First group">
												  	<button @click="new_date_time = !new_date_time" :class="new_date_time ? 'btn btn-outline-success' : 'btn btn-outline-danger'">
												  		<i :class="new_date_time ? 'fas fa-plus' : 'fas fa-minus'"></i>
												  	</button>
												    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="de 14 a 19hs">Lunes</button>
												    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="de 14 a 19hs">Viernes</button>
												  </div>
												</div>
									  	</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<!-- buttons -->
								<button type="button" class="btn btn-light">Crear equipo</button>
								<!-- /buttons -->
							</div>
						</div>
					</div>
				</div>
				@endif
				@endif
				<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
					<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
					<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
					<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
					<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
					<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li>
				</ul>

				<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
					<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
						<div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
							<div class="portfolio-item">
								<a href="#">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="https://whitelight-whiteheat.com/wp-content/uploads/2018/04/X-IMG.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Presentation</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 isotope-item medias">
							<div class="portfolio-item">
								<a href="#">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="https://whitelight-whiteheat.com/wp-content/uploads/2018/04/X-IMG.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Porto Watch</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
							<div class="portfolio-item">
								<a href="#">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="https://whitelight-whiteheat.com/wp-content/uploads/2018/04/X-IMG.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Identity</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
							<div class="portfolio-item">
								<a href="#">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="https://whitelight-whiteheat.com/wp-content/uploads/2018/04/X-IMG.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Watch Mockup</span>
												<span class="thumb-info-type">Brand</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});
</script>
@if($data_logged_user)
@if(in_array('create_runner_team', $data_logged_user['modules']));
<script src="{{asset('storage/js/runner_team/create_runner_team.js')}}"></script>
@endif
@endif
@endsection