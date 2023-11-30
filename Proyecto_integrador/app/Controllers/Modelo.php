<?php

namespace App\Controllers;

use App\Controllers\BaseController;

$session = \Config\Services::session();

class Modelo extends BaseController
{
    public function index()
    {
        //
    }

    //Se recuperan los datos para mostrar los modelos de bicicletas
    public function mostrar()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }
        $modeloModel = model('ModeloModel');
        $data['modelos'] = $modeloModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('modelo/mostrar', $data) .
            view('common/footer');
    }

    //Para añadir un nuevo modelo de bicicleta en los registros
    public function agregar()
    {
        //Se valida si ya se inición la sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        helper(['form', 'url']);

        //Se incluye la validación de los formularios
        $data['title'] = "Agregar Modelo";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head')
                . view('common/menu')
                . view('modelo/agregar', $data)
                . view('common/footer');
        }

        $rules = [
            'Nombre' => 'required',
            'Modalidad' => 'required',
            'Año' => 'required',
            'Gama' => 'required'
        ];

        //Si pasa las reglas se manda a la vista de las bicicletas
        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('modelo/agregar', ['validation' => $validation, $data])
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/modelo');
            }
        }
    }

    //Se añade el modelo de la bicicleta de la función anterior a la tabla de todos los modelos
    public function insert()
    {
        $modelo = model('ModeloModel');
        $data = [
            "Nombre" => $_POST['Nombre'],
            "Modalidad" => $_POST['Modalidad'],
            "Año" => $_POST['Año'],
            "Gama" => $_POST['Gama']
        ];
        $modelo->insert($data, false);
        return true;
    }

    //Se elimina el modelo a partir de su id
    public function delete($idModelo)
    {
        $modelo = model('ModeloModel');
        $modelo->delete($idModelo);
        return redirect('administrador/modelo');
    }

    //Se edita el modelo a partir de su id
    public function editar($id)
    {
        //Se verifica que se iniciara sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        //Se cargan los modelos
        $modelo = model('ModeloModel');
        $data['modelo'] = $modelo->find($id);

        //Se validan los formularios
        $validation = \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('modelo/editar', $data) .
                view('common/footer');
        }

        $rules = [
            'Nombre' => 'required',
            'Modalidad' => 'required',
            'Año' => 'required',
            'Gama' => 'required'
        ];

        //Se redirige a la vista que muetsra los modelos de bicicletas
        if (!$this->validate($rules)) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('modelo/editar', ['validation' => $validation], $data) .
                view('common/footer');
        } else {
            if ($this->update()) {
                return redirect('administrador/modelo');
            }
        }
    }

    //Se actualizan los modelos de las bicicletas con los datos del formulario anterior
    public function update()
    {
        $modelo = model('ModeloModel');

        //Se recuperan los datos 
        $data = [
            "Nombre" => $_POST['Nombre'],
            "Modalidad" => $_POST['Modalidad'],
            "Año" => $_POST['Año'],
            "Gama" => $_POST['Gama']
        ];

        $modelo->update($_POST['idModelo'], $data);
        return true;
    }

    //Se busca un modelo de bicicleta entre todos los que se tienen
    public function buscar()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        $modeloModel = model('ModeloModel');

        //Se verifica si se mandaron datos en el formulario de búsqueda
        if (isset($_GET['Campo']) && isset($_GET['Valor'])) {
            $campo = $_GET['Campo'];
            $valor = $_GET['Valor'];


            if ($campo == 'Nombre') {
                $data['modelos'] = $modeloModel->like('Nombre', $valor)
                    ->findAll();
            }

            if ($campo == 'Gama') {
                $data['modelos'] = $modeloModel->like('Gama', $valor)
                    ->findAll();
            }

            if ($campo == 'Año') {
                $data['modelos'] = $modeloModel->like('Año', $valor)
                    ->findAll();
            }

            if ($campo == 'Modalidad') {
                $data['modelos'] = $modeloModel->like('Modalidad', $valor)
                    ->findAll();
            }

            if ($campo == 'Todo') {
                $data['modelos'] = $modeloModel->findAll();
            }


        } else {
            $campo = "";
            $valor = "";
            $data['modelos'] = $modeloModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('modelo/buscar', $data) .
            view('common/footer');
    }
}