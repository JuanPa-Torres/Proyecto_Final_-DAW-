<?php

namespace App\Controllers;

use App\Controllers\BaseController;

$session = \Config\Services::session();

class Caracteristicas extends BaseController
{
    public function index()
    {
        //
    }
    //Se recuperan los datos para mostrar las características

    public function mostrar()
    {

        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        //Se cargan los modelos
        $caracteristicasModel = model('CaracteristicasModel');
        $data['caracteristicas'] = $caracteristicasModel->findAll();

        //Se redirige a la vista para mostrar las bicicletas
        return
            view('common/head') .
            view('common/menu') .
            view('caracteristicas/mostrar', $data) .
            view('common/footer');
    }
    //Para añadir un nuevo grupo de característica en los registros
    public function agregar()
    {
        //Se valida si ya se inición la sesión

        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        helper(['form', 'url']);

        //Se incluye la validación de los formularios

        $data['title'] = "Agregar Características";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head')
                . view('common/menu')
                . view('caracteristicas/agregar', $data)
                . view('common/footer');
        }

        $rules = [
            'Talla_Cuadro' => 'required',
            'Material' => 'required',
            'Colores_Disponibles' => 'required',
            'Geometrias' => 'required',
            'Peso' => 'required',
            'Limite_Peso' => 'required',
            'Garantia' => 'required'
        ];
        //Si pasa las reglas se manda a la vista de las características

        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('caracteristicas/agregar', ['validation' => $validation, $data])
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/caracteristicas');
            }
        }

    }

    //Se añade la bicicleta de la función anterior a la tabla de todas las bicicletas

    public function insert()
    {
        $caracteristicas = model('CaracteristicasModel');
        $data = [
            "Talla_Cuadro" => $_POST['Talla_Cuadro'],
            "Material" => $_POST['Material'],
            "Colores_Disponibles" => $_POST['Colores_Disponibles'],
            "Geometrias" => $_POST['Geometrias'],
            "Peso" => $_POST['Peso'],
            "Limite_Peso" => $_POST['Limite_Peso'],
            "Garantia" => $_POST['Garantia']
        ];
        $caracteristicas->insert($data, false);
        return true;
    }

    //Se elimina el grupo de características a partir de su id
    public function delete($idCaracteristica)
    {
        $caracteristicas = model('CaracteristicasModel');
        $caracteristicas->delete($idCaracteristica);
        return redirect('administrador/caracteristicas');
    }


    //Se editan las características a partir de su id
    public function editar($id)
    {
        //Se verifica que se iniciara sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }


        //Se cargan los modelos
        $caracteristicas = model('CaracteristicasModel');
        $data['caracteristicas'] = $caracteristicas->find($id);


        $validation = \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('caracteristicas/editar', $data) .
                view('common/footer');
        }

        $rules = [
            'Talla_Cuadro' => 'required',
            'Material' => 'required',
            'Colores_Disponibles' => 'required',
            'Geometrias' => 'required',
            'Peso' => 'required',
            'Limite_Peso' => 'required',
            'Garantia' => 'required'
        ];

        //Se validan los formularios
        if (!$this->validate($rules)) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('caracteristicas/editar', ['validation' => $validation], $data) .
                view('common/footer');
        } else {
            if ($this->update()) {
                return redirect('administrador/caracteristicas');
            }
        }
    }

    //Se actualizan las características con los datos del formulario anterior
    public function update()
    {

        $caracteristicas = model('CaracteristicasModel');
        //Se recuperan los datos 
        $data = [
            "Talla_Cuadro" => $_POST['Talla_Cuadro'],
            "Material" => $_POST['Material'],
            "Colores_Disponibles" => $_POST['Colores_Disponibles'],
            "Geometrias" => $_POST['Geometrias'],
            "Peso" => $_POST['Peso'],
            "Limite_Peso" => $_POST['Limite_Peso'],
            "Garantia" => $_POST['Garantia']
        ];

        $caracteristicas->update($_POST['idCaracteristicas'], $data);
        return true;
    }

    //Se busca una bicicleta entre todas las que se tienen
    public function buscar()
    {
        //Se revisa que esté iniciada la sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        $caracteristicasModel = model('CaracteristicasModel');

        //Se verifica si se mandaron datos en el formulario de búsqueda
        if (isset($_GET['Campo']) && isset($_GET['Valor'])) {
            $campo = $_GET['Campo'];
            $valor = $_GET['Valor'];


            if ($campo == 'Material') {
                $data['caracteristicas'] = $caracteristicasModel->like('Material', $valor)
                    ->findAll();
            }

            if ($campo == 'Limite_Peso') {
                $data['caracteristicas'] = $caracteristicasModel->like('Limite_Peso', $valor)
                    ->findAll();
            }

            if ($campo == 'Talla_Cuadro') {
                $data['caracteristicas'] = $caracteristicasModel->like('Talla_Cuadro', $valor)
                    ->findAll();
            }

            if ($campo == 'Geometrias') {
                $data['caracteristicas'] = $caracteristicasModel->like('Geometrias', $valor)
                    ->findAll();
            }

            if ($campo == 'Todo') {
                $data['caracteristicas'] = $caracteristicasModel->findAll();
            }


        } else {
            $campo = "";
            $valor = "";
            $data['caracteristicas'] = $caracteristicasModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('caracteristicas/buscar', $data) .
            view('common/footer');
    }
}