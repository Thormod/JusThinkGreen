<?php

class ControlPublicaciones extends \BaseController {



	public function index()
	{

		$publicaciones = Publicacion::orderBy('calificacionPromedio', 'desc')->get();

		return View::make('publicaciones.index', ['publicaciones'=>$publicaciones]);

	}

	public function show($id)
	{
		$publicacion = Publicacion::find($id);
		$comentarios = Comentario::where('idPublicacion','=',1)->get();

		if($publicacion){
			return View::make('publicaciones.show', ['publicacion'=>$publicacion , 'comentarios'=>$comentarios]);
		}else{
			return "Publicacion no existe";
		}
	}






}