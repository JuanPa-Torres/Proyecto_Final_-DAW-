<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Distribuidor extends BaseController
{
    public function index()
    {
        //
    }

    /* Esta función es para recuperar todos los datos del modelo del distribuiodr, que vienen
    directamente de la tabla "distribuidores" de la base de datos.
    Los datos se mandan a la vista de "mostrar" en la carpeta "distribuidor" para tratarlos
    en tablas
    */ 
    public function mostrar()
    {
        $distribuidorModel = model('DistribuidorModel');
        $data['distribuidores'] = $distribuidorModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('distribuidor/mostrar', $data) .
            view('common/footer');
    }

    /*
    Esta función es para insertar un nuevo elemento a la base de datos,
    a la tabla de "distribuidores" por medio del modelo "DistribuidorModel".
    Se agregan validaciones para el formulario del que se extraen los datos
    y también se protege la vista con sesiones
    */
    public function agregar()
    {
        helper(['form', 'url']);
        $data['title'] = "Agregar distribuidor";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head')
                . view('common/menu')
                . view('distribuidor/agregar', $data)
                . view('common/footer');
        }

        $rules = [
            'Nombre' => 'required',
            'Ciudad' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('distribuidor/agregar', ['validation' => $validation, $data])
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/distribuidor');
            }
        }
    }

     /*
    Esta función realiza la inserción que se solicita en la función de agregar de 
    este controlador
    */
    public function insert()
    {
        $distribuidor = model('DistribuidorModel');
        $data = [
            "Nombre" => $_POST['Nombre'],
            "Ciudad" => $_POST['Ciudad'],
            "Telefono" => $_POST['Telefono'],
            "Correo" => $_POST['Correo']
        ];
        $distribuidor->insert($data, false);
        return true;
    }

    /*
    Esta función elimina el registro que se desea, según el id del
    distribuidor que se quiera.
    Al terminar, redirecciona a la primera función de este controlador
    */
    public function delete($idDistribuidor)
    {
        $distribuidorModel = model('DistribuidorModel');
        $distribuidorModel->delete($idDistribuidor);
        return redirect('distribuidor/mostrar');
    }

    /*
    Función que recupera una inserción del modelo de los distribuidores para luego 
    editar sus campos en una vista que contiene un formulario
    */
    public function editar($id)
    {
        $distribuidor = model('DistribuidorModel');
        $data['distribuidor'] = $distribuidor->find($id);

        $validation = \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('distribuidor/editar', $data) .
                view('common/footer');
        }

        $rules = [
            'Nombre' => 'required',
            'Ciudad' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required'
        ];

        if (!$this->validate($rules)) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('distribuidor/editar', ['validation' => $validation], $data) .
                view('common/footer');
        } else {
            if ($this->update()) {
                return redirect('administrador/distribuidor');
            }
        }
    }

    /*
    Función que realiza la actualización del resgistro que se encontró 
    en la función de editar de este controlador, utilizando el modelo 
    de los distribuidores
    */
    public function update()
    {
        $dist = model('DistribuidorModel');
        $data = [
            "Nombre" => $_POST['Nombre'],
            "Ciudad" => $_POST['Ciudad'],
            "Telefono" => $_POST['Telefono'],
            "Correo" => $_POST['Correo']
        ];
        $dist->update($_POST['idDistribuidor'], $data);
        return true;
    }

    /*
    Función que recupera registros específicos del modelo de los distribuidores,
    en base a campos como el nombre, su teléfono o la ciudad de origen 
    */
    public function buscar()
    {
        $distribuidorModel = model('DistribuidorModel');
        if (isset($_GET['columnaBusqueda']) && isset($_GET['elementoBusqueda'])) {
            $columnaBusqueda = $_GET['columnaBusqueda'];
            $elementoBusqueda = $_GET['elementoBusqueda'];

            if ($columnaBusqueda == 'nombre') {
                $data['distribuidores'] = $distribuidorModel->like('Nombre', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'telefono') {
                $data['distribuidores'] = $distribuidorModel->like('Telefono', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'ciudad') {
                $data['distribuidores'] = $distribuidorModel->like('Ciudad', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'correo') {
                $data['distribuidores'] = $distribuidorModel->like('Correo', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'todo') {
                $data['distribuidores'] = $distribuidorModel->findAll();
            }

        } else {
            $elementoBusqueda = "";
            $columnaBusqueda = "";
            $data['distribuidores'] = $distribuidorModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('distribuidor/buscar', $data) .
            view('common/footer');
    }
}