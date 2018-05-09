<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
	public function create(){
		return view('checkout');//formulario de registro
	}
    public function store(Request $request){
    	$rules = [
         		'nombre' => 'required',
         		'numero_tarjeta' => 'required',
         		'mes_expira' => 'required',
         		'anio_expira' => 'required',
         		'cvv' => 'required',
         		'codigo_postal' => 'required',
         		'mail' => 'required'
         ];
         $messages = [
               'nombre.required' => 'El campo es Nombre requerido',
               'numero_tarjeta.required' => 'El campo Número de Tarjeta es requerido',
               'mes_expira.required' => 'El campo Mes es requerido',
               'anio_expira.required' => 'El campo año es requerido',
               'cvv.required' => 'El campo CVV es requerido',
               'codigo_postal.required' => 'El campo Código Postal es requerido',
               'mail.required' => 'El campo Mail es requerido'
         ];
        $this -> validate($request, $rules, $messages);
   		//registrar producto
   		$order = new Order();
   		$order -> nombre = $request->input('nombre');
   		$order -> numero_tarjeta = $request->input('numero_tarjeta');
   		$order -> mes_expira = $request->input('mes_expira');
   		$order -> anio_expira = $request->input('anio_expira');
   		$order -> cvv = $request->input('cvv');
   		$order -> codigo_postal = $request->input('codigo_postal');
   		$order -> mail = $request->input('mail');

   		$order -> save(); //INSERT

   		return redirect('/exito');
   }
}
