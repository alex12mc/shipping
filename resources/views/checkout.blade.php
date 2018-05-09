@extends('layouts.app')

@section('body-class', 'landing-page')

@section('content')
<div class="header-filter" style="background-size: cover; background-position: top center;height: auto;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('/checkout') }}">
                        {{ csrf_field() }}
                        <div class="content">
                           <p class="text-divider">Total a Pagar: <b>$2,000.00</b></p>
                           <div class="col-sm-12">
                               <div class="input-group">
                                   <span class="input-group-addon">
                                       <i class="material-icons">group</i>
                                   </span>
                                   <input type="text" name="nombre" class="form-control" placeholder="Nombre en Tarjeta" value="{{ old('nombre') }}">
                               </div>
                           </div>
                           <div class="col-sm-12">
                               <div class="input-group">
                                   <span class="input-group-addon">
                                       <i class="material-icons">payment</i>
                                   </span>
                                   <input type="text" name="numero_tarjeta" class="form-control" placeholder="Número en Tarjeta" value="{{ old('numero_tarjeta') }}">
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-group">
                                 <label for="sel1" style="margin-left: 20px">Fecha de expiración:</label>
                                 <select class="form-control" name="mes_expira" style="margin-left: 20px">
                                   <option value="0"> Mes </option>
                                   <option value="1"> Enero </option>
                                   <option value="2"> Febrero </option>
                                   <option value="3"> Marzo </option>
                                   <option value="3"> Abril </option>
                                   <option value="3"> Mayo </option>
                                   <option value="3"> Junio </option>
                                   <option value="3"> Julio </option>
                                   <option value="3"> Agosto </option>
                                   <option value="3"> Septiembre </option>
                                   <option value="3"> Octubre </option>
                                   <option value="3"> Noviembre </option>
                                   <option value="3"> Diciembre </option>
                                 </select>
                             </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="form-group">
                                 <label for="sel1" style="margin-left: 20px">&nbsp;</label>
                                 <select class="form-control" name="anio_expira" style="margin-left: 20px">
                                   <option value="0">Año</option>
                                   <option value="2018"> 2018 </option>
                                   <option value="2019"> 2019 </option>
                                   <option value="2020"> 2020 </option>
                                   <option value="2021"> 2021 </option>
                                   <option value="2022"> 2022 </option>
                                   <option value="2023"> 2023 </option>
                                   <option value="2024"> 2024 </option>
                                   <option value="2025"> 2025 </option>
                                 </select>
                             </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="input-group">
                                   <span class="input-group-addon">
                                       <i class="material-icons">confirmation_number</i>
                                   </span>
                                   <input type="text" name="cvv" class="form-control" placeholder="CVV" value="{{ old('cvv') }}">
                               </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="input-group">
                                   <span class="input-group-addon">
                                       <i class="material-icons">home</i>
                                   </span>
                                   <input type="text" name="codigo_postal" class="form-control" placeholder="Código Postal" value="{{ old('codigo_postal') }}">
                               </div>
                           </div>
                           <div class="col-sm-12">
                               <div class="input-group">
                                   <span class="input-group-addon">
                                       <i class="material-icons">email</i>
                                   </span>
                                   <input type="text" name="mail" class="form-control" placeholder="Correo" value="{{ old('mail') }}">
                               </div>
                           </div>
                        </div>
                        <div class="footer text-center">
                        	<div class="col-sm-6">
                           		<button class="btn btn-lg btn-default">Cancelar Pago</button>
                           	</div>
                           	<div class="col-sm-6">
                            	<button type="submit" class="btn btn-lg btn-info">Pagar</button>
                            </div>
                            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<form method="POST" action=" {{ url('/orders') }}">
	{{ csrf_field() }}
	 <div class="header header-filter" style="background-image: url('{{ asset('images/02-race.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
			    <div class="col-sm-12">
			        <div class="input-group">
			            <span class="input-group-addon">
			                <i class="material-icons">group</i>
			            </span>
			            <input type="text" name="nombre" class="form-control" placeholder="Nombre en Tarjeta" value="{{ old('nombre') }}">
			        </div>
			    </div>
			    <div class="col-sm-12">
			        <div class="input-group">
			            <span class="input-group-addon">
			                <i class="material-icons">payment</i>
			            </span>
			            <input type="text" name="numero_tarjeta" class="form-control" placeholder="Número en Tarjeta" value="{{ old('numero_tarjeta') }}">
			        </div>
			    </div>
			    <div class="col-sm-6">
			        <div class="form-group">
			          <label for="sel1" style="margin-left: 20px">Fecha de expiración:</label>
			          <select class="form-control" name="mes_expira" style="margin-left: 20px">
			            <option value="0"> Mes </option>
			            <option value="1"> Enero </option>
			            <option value="2"> Febrero </option>
			            <option value="3"> Marzo </option>
			            <option value="3"> Abril </option>
			            <option value="3"> Mayo </option>
			            <option value="3"> Junio </option>
			            <option value="3"> Julio </option>
			            <option value="3"> Agosto </option>
			            <option value="3"> Septiembre </option>
			            <option value="3"> Octubre </option>
			            <option value="3"> Noviembre </option>
			            <option value="3"> Diciembre </option>
			          </select>
			      </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group">
			          <label for="sel1" style="margin-left: 20px">&nbsp;</label>
			          <select class="form-control" name="anio_expira" style="margin-left: 20px">
			            <option value="0">Año</option>
			            <option value="2018"> 2018 </option>
			            <option value="2019"> 2019 </option>
			            <option value="2020"> 2020 </option>
			            <option value="2021"> 2021 </option>
			            <option value="2022"> 2022 </option>
			            <option value="2023"> 2023 </option>
			            <option value="2024"> 2024 </option>
			            <option value="2025"> 2025 </option>
			          </select>
			      </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="input-group">
			            <span class="input-group-addon">
			                <i class="material-icons">confirmation_number</i>
			            </span>
			            <input type="text" name="cvv" class="form-control" placeholder="CVV" value="{{ old('cvv') }}">
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="input-group">
			            <span class="input-group-addon">
			                <i class="material-icons">home</i>
			            </span>
			            <input type="text" name="codigo_postal" class="form-control" placeholder="Código Postal" value="{{ old('codigo_postal') }}">
			        </div>
			    </div>
			    <div class="col-sm-12">
			        <div class="input-group">
			            <span class="input-group-addon">
			                <i class="material-icons">email</i>
			            </span>
			            <input type="text" name="mail" class="form-control" placeholder="Correo" value="{{ old('mail') }}">
			        </div>
			    </div>
			</div>
		</div>
	</div>
	</div>
	</div>
</form>-->
@endsection