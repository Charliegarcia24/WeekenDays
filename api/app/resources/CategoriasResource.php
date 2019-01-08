<?php

use core\MVC\Resource as Resource;

class CategoriasResource extends Resource {
    //protected $id = 'Nombre';

    public function getAllAction() {
        $this->sql = 'SELECT * FROM categorias';
        $this->execSQL();
        $this->setData();
    }

    public function getByIdAction() {
        $id = $this->controller->getParam('categoria');
        $this->sql = 'SELECT * FROM categorias WHERE id = :idCategoria';
        $params = array(
            'id' => $id,
        );
        $this->execSQL($params);
        $this->setData();
    }

    public function getByNombreAction() {
        $nombreCategoria = $this->controller->getParam('categoria');
        $this->sql = 'SELECT * FROM categorias WHERE nombre = :nombreCategoria';
        $params = array(
            'nombre' => $nombreCategoria,
        );
        $this->execSQL($params);
        $this->setData();
    }


}