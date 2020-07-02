@extends('layout.index')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Reception</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form action="#" class="tab-wizard wizard-circle">
				 <h6>Reception<br><small></small></h6>
					<section>
						<div class="row mb-3">
							<div class="col-3"></div>
							<div class="col-6">
								<div class="input-group">
					                <input type="text" class="form-control" placeholder="Search account ID">
					                    <span class="input-group-btn">
					                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i></button>
					                    </span>
					              </div>
							</div>
							<div class="col-3"></div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName1">Sample Date</label>
									<input type="date" class="form-control" id="date1">
								</div>
							</div>
							<div class="col-md-6">
								<a data-toggle="modal" data-target="#modalClientes">
									<div class="form-group">
										<label for="lastName1">Horometer</label>
										<input type="text" class="form-control" id="orderCustomer" required>
									</div>
								</a>
							</div>
						</div>
				 			<h4>Component Locations<br><small></small></h4>
						<div class="row">
						        <!-- /.col -->
						         <div class="col-md-12 col-lg-12">
							          <div class="box">
							            <!-- /.box-header -->
							            <div class="box-body">
							              <table class="table table-hover table-responsive">
							                <tbody><tr>
							                  <th style="width: 10px">#</th>
							                  <th>Component Location</th>
							                  <th>Select</th>
							                  <th>Lubricant</th>
							                  <th>Oil Type</th>
							                  <th>Oil Time</th>
							                  <th>Oil Change</th>
							                  <th style="width: 40px">SOS</th>
							                </tr>
							                <tr>
							                  <td>1</td>
							                  <td>Motor</td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_11">
											  		<label for="basic_checkbox_11"></label>
							                  </td>
							                  <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Lubricant</option>
									                  <option>Grasa</option>
									                  <option>Aceite</option>
									                </select>
									              </div>
							                  </td>
							                  <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Oil Type</option>
									                  <option>Sintetic</option>
									                  <option>Semi-Sintetic</option>
									                </select>
									              </div>
							                  </td>
							                  <td><input type="number" class="form-control"></td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_12" class="chk-col-deep-orange">
											  		<label for="basic_checkbox_12"></label>
							                  </td>
							                  <td class="text-center">
												  <button type="button" class="btn btn-toggle btn-danger" data-toggle="button" aria-pressed="true" style="
													    margin-left: 0px;
													    margin-right: 0px;
													">
													<div class="handle"></div>
												  </button>
							                  </td>
							                </tr>
							                <tr>
							                  <td>2</td>
							                  <td>Hydraulic System</td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_13">
											  		<label for="basic_checkbox_13"></label>
							                  </td>
							                   <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Lubricant</option>
									                  <option>Grasa</option>
									                  <option>Aceite</option>
									                </select>
									              </div>
							                  </td>
							                  <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Oil Type</option>
									                  <option>Sintetic</option>
									                  <option>Semi-Sintetic</option>
									                </select>
									              </div>
							                  </td>
							                  <td><input type="number" class="form-control"></td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_14" class="chk-col-deep-orange">
											  		<label for="basic_checkbox_14"></label>
							                  </td>
							                  <td class="text-center">
												  <button type="button" class="btn btn-toggle btn-danger" data-toggle="button" aria-pressed="true" style="
													    margin-left: 0px;
													    margin-right: 0px;
													">
													<div class="handle"></div>
												  </button>
							                  </td>
							                </tr>
							                <tr>
							                  <td>3</td>
							                  <td>Wheel</td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_15">
											  		<label for="basic_checkbox_15"></label>
							                  </td>
							                   <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Lubricant</option>
									                  <option>Grasa</option>
									                  <option>Aceite</option>
									                </select>
									              </div>
							                  </td>
							                  <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Oil Type</option>
									                  <option>Sintetic</option>
									                  <option>Semi-Sintetic</option>
									                </select>
									              </div>
							                  </td>
							                  <td><input type="number" class="form-control"></td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_16" class="chk-col-deep-orange">
											  		<label for="basic_checkbox_16"></label>
							                  </td>
							                  <td class="text-center">
												  <button type="button" class="btn btn-toggle btn-danger" data-toggle="button" aria-pressed="true" style="
													    margin-left: 0px;
													    margin-right: 0px;
													">
													<div class="handle"></div>
												  </button>
							                  </td>
							                </tr>
							                <tr>
							                  <td>4</td>
							                  <td>Differential</td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_17">
											  		<label for="basic_checkbox_17"></label>
							                  </td>
							                   <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Lubricant</option>
									                  <option>Grasa</option>
									                  <option>Aceite</option>
									                </select>
									              </div>
							                  </td>
							                  <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Oil Type</option>
									                  <option>Sintetic</option>
									                  <option>Semi-Sintetic</option>
									                </select>
									              </div>
							                  </td>
							                  <td><input type="number" class="form-control"></td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_2" class="chk-col-deep-orange">
											  		<label for="basic_checkbox_2"></label>
							                  </td>
							                  <td class="text-center">
												  <button type="button" class="btn btn-toggle btn-danger" data-toggle="button" aria-pressed="true" style="
													    margin-left: 0px;
													    margin-right: 0px;
													">
													<div class="handle"></div>
												  </button>
							                  </td>
							                </tr>
							                <tr>
							                  <td>5</td>
							                  <td>Converter</td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_18">
											  		<label for="basic_checkbox_18"></label>
							                  </td>
							                   <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Lubricant</option>
									                  <option>Grasa</option>
									                  <option>Aceite</option>
									                </select>
									              </div>
							                  </td>
							                  <td>
							                  	<div class="form-group">
									                <select class="form-control select2" style="width: 100%;">
									                  <option selected="selected">Oil Type</option>
									                  <option>Sintetic</option>
									                  <option>Semi-Sintetic</option>
									                </select>
									              </div>
							                  </td>
							                  <td><input type="number" class="form-control"></td>
							                  <td class="text-center">
							                     <input type="checkbox" id="basic_checkbox_19" class="chk-col-deep-orange">
											  		<label for="basic_checkbox_19"></label>
							                  </td>
							                  <td class="text-center">
												  <button type="button" class="btn btn-toggle btn-danger" data-toggle="button" aria-pressed="true" style="
													    margin-left: 0px;
													    margin-right: 0px;
													">
													<div class="handle"></div>
												  </button>
							                  </td>
							                </tr>
							              </tbody></table>
							            </div>
							            <!-- /.box-body -->
							          </div>
							          <!-- /.box -->
						        </div>
						      </div>
					</section>
					<!-- Step 2 -->
					<h6>Review <br><small>Sample</small></h6>
					<section>
						<div class="row mb-4">
							<div class="col-2"></div>
							<div class="col-4">
								<h5><strong>Code:</strong> 165721 </h5>
								<h5><strong>Customer:</strong> NASA </h5>
							</div>
							<div class="col-4 text-right">
								<h5><strong>Navy:</strong> Apollo 1</h5>
							</div>
							<div class="col-2"></div>
						</div>
					<div class="container">
						<div class="row">
							<div class="col-12">
							  <div class="box">
								<div class="box-header">
							  		<h4 class="box-title"><strong>Listado </strong> Components Locations</h4>
								</div>
							  <div class="box-body">
								<div class="row">
								  <div class="col-12">
									<div class="table-responsive">
										<table id="mainTable" class="table editable-table table-bordered table-striped m-b-0" style="cursor: pointer;">
											<thead>
												<tr>
													<th>Component</th>
													<th>Sample Date</th>
													<th>Lubricant</th>
													<th>Oil Type</th>
													<th>Horometer</th>
													<th>Oil Time</th>
													<th>Lot</th>
													<th>Oil Change</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td tabindex="1">Motor</td>
													<td tabindex="1">12/07/2020</td>
													<td tabindex="1">Aceite</td>
													<td tabindex="1">Aceite Mineral</td>
													<td tabindex="1">200 H</td>
													<td tabindex="1">900 H</td>
													<td tabindex="1">LT448</td>
													<td tabindex="1">
														<button type="button" class="btn btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" style="
														    margin-left: 0px;
														    margin-right: 0px;
														">
														<div class="handle"></div>
													  </button>
													</td>
												</tr>
												<tr>
													<td tabindex="1">Rueda</td>
													<td tabindex="1">12/07/2020</td>
													<td tabindex="1">Grasa</td>
													<td tabindex="1">Aceite Semi-Sintetico</td>
													<td tabindex="1">200 H</td>
													<td tabindex="1">300 H</td>
													<td tabindex="1">LT448</td>
													<td tabindex="1">
														<button type="button" class="btn btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" style="
														    margin-left: 0px;
														    margin-right: 0px;
														">
														<div class="handle"></div>
													  </button>
													</td>
												</tr>
												<tr>
													<td tabindex="1">Sitema Hidraulico</td>
													<td tabindex="1">12/07/2020</td>
													<td tabindex="1">Grasa</td>
													<td tabindex="1">Aceite Semi-Sintetico</td>
													<td tabindex="1">200 H</td>
													<td tabindex="1">500 H</td>
													<td tabindex="1">LT448</td>
													<td tabindex="1">
														<button type="button" class="btn btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" style="
														    margin-left: 0px;
														    margin-right: 0px;
														">
														<div class="handle"></div>
													  </button>
													</td>
												</tr>
												<tr>
													<td tabindex="1">Direccional</td>
													<td tabindex="1">12/07/2020</td>
													<td tabindex="1">Aceite</td>
													<td tabindex="1">Aceite Mineral</td>
													<td tabindex="1">400 H</td>
													<td tabindex="1">600 H</td>
													<td tabindex="1">LT448</td>
													<td tabindex="1">
														<button type="button" class="btn btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" style="
														    margin-left: 0px;
														    margin-right: 0px;
														">
														<div class="handle"></div>
													  </button>
													</td>
												</tr>
												<tr>
													<td tabindex="1">Convertidor</td>
													<td tabindex="1">12/07/2020</td>
													<td tabindex="1">Grasa</td>
													<td tabindex="1">Aceite Mineral</td>
													<td tabindex="1">100 H</td>
													<td tabindex="1">200 H</td>
													<td tabindex="1">LT448</td>
													<td tabindex="1">
														<button type="button" class="btn btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" style="
														    margin-left: 0px;
														    margin-right: 0px;
														">
														<div class="handle"></div>
													  </button>
													</td>
												</tr>
											</tbody>
										</table>
									<input style="position: absolute; top: 49px; left: 15px; padding: 14px; text-align: start; font: 400 13px / 19.5px Poppins, sans-serif; border: 1px solid rgb(244, 244, 244); width: 328px; height: 48px; display: none;">
									</div>
								  </div>

								</div>
							  </div>
								</div>
							</div>
							
						</div>
					</div>
					</section>
					<!-- Step 4 -->
					<h6>Revision <br><small>de Muestras</small></h6>
					<section>
						<div class="row">
						<div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>443</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="box-deck">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				         </div>
				         <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>445</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="box-deck">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Diferencial</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				         </div>
				         <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>446</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="box-deck">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Riuedas</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				         </div>
				         <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>447</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="box-deck">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Convertidor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				         </div>
				         <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>448</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="box-deck">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Sistema Hidraulico</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				         </div>
				          </div>
				          <div class="container">
				          	<div class="col-2">&nbsp;</div>
				          	<div class="col-8">
				          		<button class="btn btn-block btn-primary"><i class="fa fa-file-pdf"></i>Generar Etiquetas</button>
				          	</div>
				          	<div class="col-2">&nbsp;</div>
				          </div>
					</section>
				</form>
        	</div>
		</div>
	</section>
   <!-- /.box -->
   <div class="modal fade" id="modalClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Buscar cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Crear cliente</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-8">
                      <input type="text" class="form-control inputSearchCliente" placeholder="Nombre del cliente">
                    </div>
                    <div class="form-group col-4">
                      <button class="btn btn-info btn-block buscarCliente">Buscar</button>
                    </div>
                  </div>
				  <table class="table">
					  <thead>
						  <tr>
							  <th>Razon social</th>
							  <th>NIT</th>
							  <th>Telefono</th>
						  </tr>
					  </thead>
					  <tbody class="resClientes">
						<!-- lista de clientes -->
					  </tbody>
				  </table>
                </div>
              </div>
              <button class="btn btn-block btn-success btnSelectCliente">Seleccionar</button>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form id="formCreateCliente" autocomplete="off" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label>Identificacion *</label>
                    <input type="text" name="identificacion" placeholder="Identificacion" class="form-control" required>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Nombre Del Usuario</label>
                        <input type="text" name="nameUser" class="form-control" placeholder="Nombre Cliente" required>
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Apellidos Del Usuario</label>
                        <input type="text" name="lastnameUser" class="form-control" placeholder="Nombre Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="number" name="celularUser" class="form-control" placeholder="Celular ">
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" name="emailUser" class="form-control" placeholder="Email Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 ">
                      <button type="submit" class="btn btn-info btn-block">Crear cliente</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalEmpleados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Buscar Empleado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Crear Empleado</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-8">
                      <input type="text" class="form-control inputNameCliente" placeholder="Nombre del cliente">
                    </div>
                    <div class="form-group col-4">
                      <button class="btn btn-info btn-block buscarCliente">Buscar</button>
                    </div>
                  </div>
                  <div class="resClientes">
                  	<h4><a>Jaime Snow</a></h4>
                  	<h4><a>Maximillian Comander</a></h4>
                  	<h4><a>Lina Targaryen</a></h4>
                  	<h4><a>Angelo Lanister</a></h4>
                  </div>
                </div>
              </div>
              <button class="btn btn-block btn-success btnSelectCliente">Seleccionar</button>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form id="formCreateCliente" autocomplete="off" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label>Identificacion *</label>
                    <input type="text" name="identificacion" placeholder="Identificacion" class="form-control" required>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Nombre Del Usuario</label>
                        <input type="text" name="nameUser" class="form-control" placeholder="Nombre Cliente" required>
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Apellidos Del Usuario</label>
                        <input type="text" name="lastnameUser" class="form-control" placeholder="Nombre Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="number" name="celularUser" class="form-control" placeholder="Celular ">
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" name="emailUser" class="form-control" placeholder="Email Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 ">
                      <button type="submit" class="btn btn-info btn-block">Crear Empleado</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalEtiqueta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Descargar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Imprimir</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  	<div class="border">
                   		<img src="{{ asset('assets/images/etiquetas.png')}}">
                   </div>
                </div>
            </div>
             <div class="card-footer" style="margin-top: 20px">
                  <button type="submit" class="btn btn-info btn-block">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
@endsection