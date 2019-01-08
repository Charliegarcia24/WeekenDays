<?php

use core\MVC\Resource as Resource;

class ImagenesResource extends Resource {
    //protected $id = 'Nombre';

    public function getAllAction() {
        $this->sql = 'SELECT * FROM imagenes';
        $this->execSQL();
        $this->setData();
    }

    public function getByIdAction() {
        $imagen = $this->controller->getParam('imagen');
        $this->sql = 'SELECT * FROM imagenes WHERE Nombre = :nombre';
        $params = array(
            'nombre' => $imagen,
        );
        $this->execSQL($params);
        $this->setData();
    }

    public function getByNombreAction() {
        $equipo = $this->controller->getParam('imagen');
        $this->sql = 'SELECT * FROM equipos WHERE Nombre = :nombre';
        $params = array(
            'nombre' => $equipo,
        );
        $this->execSQL($params);
        $this->setData();
    }

    public function getByTipoAction() {
        $equipo = $this->controller->getParam('equipo');
        $this->sql = 'SELECT * FROM equipos WHERE Nombre = :nombre';
        $params = array(
            'nombre' => $equipo,
        );
        $this->execSQL($params);
        $this->setData();
    }

}