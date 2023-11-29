<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Marca extends BaseController
{
    public function index()
    {
        //
    }

    /* Esta función es para recuperar todos los datos del modelo de las marcas, que vienen
    directamente de la tabla "marcas" de la base de datos.
    Los datos se mandan a la vista de "mostrar" en la carpeta "marca" para tratarlos
    en tablas
    */
    public function mostrar()
    {
        $marcaModel = model('MarcaModel');
        $data['marcas'] = $marcaModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('marca/mostrar', $data) .
            view('common/footer');
    }

    /*
    Esta función es para insertar un nuevo elemento a la base de datos,
    a la tabla de "marcas" por medio del modelo "MarcaModel".
    Se agregan validaciones para el formulario del que se extraen los datos
    y también se protege la vista con sesiones
    */
    public function agregar()
    {
        helper(['form', 'url']);
        $distribuidor = model('DistribuidorModel');
        $data['distribuidores'] = $distribuidor->findAll();
        $data['title'] = "Agregar Marca";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head')
                . view('common/menu')
                . view('marca/agregar', $data)
                . view('common/footer');
        }

        $rules = [
            'Nombre' => 'required',
            'Pais_Origen' => 'required',
            'Pais_Distribuidor' => 'required',
            'Distribuidor' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('marca/agregar', ['validation' => $validation, $data])
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/marca');
            }
        }
    }

    /*
   Esta función realiza la inserción que se solicita en la función de agregar de 
   este controlador
   */
    public function insert()
    {
        $marcaModel = model('MarcaModel');
        $data = [
            "Nombre" => $_POST['Nombre'],
            "Pais_Origen" => $_POST['Pais_Origen'],
            "Logo" => $_POST['Logo'],
            "Pais_Distribuidor" => $_POST['Pais_Distribuidor'],
            "Distribuidor" => $_POST['Distribuidor']
        ];
        $marcaModel->insert($data, false);
        return true;
    }
    /*
    Esta función elimina el registro que se desea, según el id de
    la marca que se quiera.
    Al terminar, redirecciona a la primera función de este controlador
    */
    public function delete($idMarca)
    {
        $marcaModel = model('MarcaModel');
        $marcaModel->delete($idMarca);
        return redirect('marca/mostrar');
    }

    /*
    Función que recupera una inserción del modelo de las direcciones para luego 
    editar sus campos en una vista que contiene un formulario
    */
    public function editar($id)
    {
        $distribuidores = model('DistribuidorModel');
        $marca = model('MarcaModel');
        $data['marca'] = $marca->find($id);
        $data['distribuidores'] = $distribuidores->findAll();

        $validation = \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('marca/editar', $data) .
                view('common/footer');
        }

        $rules = [
            'Nombre' => 'required',
            'Pais_Origen' => 'required',
            'Pais_Distribuidor' => 'required',
            'Distribuidor' => 'required'
        ];

        if (!$this->validate($rules)) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('marca/editar', ['validation' => $validation], $data) .
                view('common/footer');
        } else {
            if ($this->update()) {
                return redirect('administrador/marca');
            }
        }
    }



    /*
    Función que realiza la actualización del resgistro que se encontró 
    en la función de editar de este controlador, utilizando el modelo 
    de las marcas
    */
    public function update()
    {

        $marca = model('MarcaModel');

        $data = [
            "Nombre" => $_POST['Nombre'],
            "Pais_Origen" => $_POST['Pais_Origen'],
            "Logo" => $_POST['Logo'],
            "Pais_Distribuidor" => $_POST['Pais_Distribuidor'],
            "Distribuidor" => $_POST['Distribuidor']
        ];

        $marca->update($_POST['idMarca'], $data);
        return true;
    }


    /*
    Función que recupera registros específicos del modelo de las marcas,
    en base a campos como el nombre,  país de origen o el distribuidor 
    */
    public function buscar()
    {
        $marcaModel = model('MarcaModel');
        if (isset($_GET['columnaBusqueda']) && isset($_GET['elementoBusqueda'])) {
            $columnaBusqueda = $_GET['columnaBusqueda'];
            $elementoBusqueda = $_GET['elementoBusqueda'];

            if ($columnaBusqueda == 'Nombre') {
                $data['marcas'] = $marcaModel->like('Nombre', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'Todo') {
                $data['marcas'] = $marcaModel->findAll();
            }

            if ($columnaBusqueda == 'Pais_Origen') {
                $data['marcas'] = $marcaModel->like('Pais_Origen', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'Pais_Distribuidor') {
                $data['marcas'] = $marcaModel->like('Pais_Distribuidor', $elementoBusqueda)
                    ->findAll();
            }

        } else {
            $columnaBusqueda = "";
            $elementoBusqueda = "";
            $data['marcas'] = $marcaModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('marca/buscar', $data) .
            view('common/footer');
    }
}