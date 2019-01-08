<?php


return array(	
	"get" => array(
		"Categorias" => array(
			"route" => "categorias",
			"resource" => "categorias",
			"action" => "getAll"
		),

		"Categoria" => array(
			"route" => "categorias/:categoria",
			"resource" => "categorias",
			"action" => "getById"
		),

		"CategoriasNombre" => array (
			"route" => "categorias/:categoria",
			"resource" => "categorias",
			"action" => "getByNombre"
		),

		"Imagenes" => array(
			"route" => "imagenes",
			"resource" => "imagenes",
			"action" => "getAll"
		),

		"Imagen" => array (
			"route" => "imagenes/:imagen",
			"resource" => "imagenes",
			"action" => "getById"
		),

		"ImagenesNombre" => array (
			"route" => "imagenes/:imagen",
			"resource" => "imagenes",
			"action" => "getByNombre"
		),

		"ImagenesTipo" => array (
			"route" => "imagenes/:imagen",
			"resource" => "imagenes",
			"action" => "getByTipo"
		),

	)

);


