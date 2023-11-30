<?php

namespace App\Controllers;

use App\Controllers\BaseController;

$session = \Config\Services::session();

class Componentes extends BaseController
{
    public function index()
    {
        //
    }


    //Se recuperan los datos para mostrar los componentes de las bicicletas
    public function mostrar()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        $componentesModel = model('ComponentesModel');
        $data['componentes'] = $componentesModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('componentes/mostrar', $data) .
            view('common/footer');
    }

    //Para añadir nuevos componentes a la vista de componentes en los registros
    public function agregar()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        helper(['form', 'url']);

        $data['title'] = "Agregar Componentes";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head')
                . view('common/menu')
                . view('componentes/agregar', $data)
                . view('common/footer');
        }

        $rules = [
            'Tija' => 'required',
            'Amortiguador' => 'required',
            'Ruedas_Delanteras' => 'required',
            'Ruedas_Traseras' => 'required',
            'Llantas' => 'required',
            'Cambio_Delantero' => 'required',
            'Cambio_Trasero' => 'required',
            'Casstte' => 'required',
            'Bielas' => 'required',
            'Frenos' => 'required',
            'Rotores_Frenos' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('componentes/agregar', ['validation' => $validation, $data])
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/componentes');
            }
        }
    }



    //Se añaden los componentes de la función anterior a la tabla de todas los componentes de bicicletas
    public function insert()
    {
        $componentes = model('ComponentesModel');
        $data = [
            "Tija" => $_POST['Tija'],
            "Amortiguador" => $_POST['Amortiguador'],
            "Ruedas_Delanteras" => $_POST['Ruedas_Delanteras'],
            "Ruedas_Traseras" => $_POST['Ruedas_Traseras'],
            "Llantas" => $_POST['Llantas'],
            "Cambio_Delantero" => $_POST['Cambio_Delantero'],
            "Cambio_Trasero" => $_POST['Cambio_Trasero'],
            "Casstte" => $_POST['Casstte'],
            "Bielas" => $_POST['Bielas'],
            "Frenos" => $_POST['Frenos'],
            "Rotores_Frenos" => $_POST['Rotores_Frenos']

        ];
        $componentes->insert($data, false);
        return true;
    }

    //Se elimina un grupo de componentes de bicicletas a partir de su id
    public function delete($idComponente)
    {
        $componentes = model('ComponentesModel');
        $componentes->delete($idComponente);
        return redirect('administrador/componentes');
    }

    //Se edita un grupo de componentes de bicicletas a partir de su id

    public function editar($id)
    {
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        $componentes = model('ComponentesModel');
        $data['componentes'] = $componentes->find($id);

        $validation = \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('componentes/editar', $data) .
                view('common/footer');
        }

        $rules = [
            'Tija' => 'required',
            'Amortiguador' => 'required',
            'Ruedas_Delanteras' => 'required',
            'Ruedas_Traseras' => 'required',
            'Llantas' => 'required',
            'Cambio_Delantero' => 'required',
            'Cambio_Trasero' => 'required',
            'Casstte' => 'required',
            'Bielas' => 'required',
            'Frenos' => 'required',
            'Rotores_Frenos' => 'required'
        ];

        if (!$this->validate($rules)) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('componentes/editar', ['validation' => $validation], $data) .
                view('common/footer');
        } else {
            if ($this->update()) {
                return redirect('administrador/componentes');
            }
        }
    }


    //Se actualiza un grupo de componentes de bicicletas
    public function update()
    {
        $componentes = model('ComponentesModel');

        $data = [
            "Tija" => $_POST['Tija'],
            "Amortiguador" => $_POST['Amortiguador'],
            "Ruedas_Delanteras" => $_POST['Ruedas_Delanteras'],
            "Ruedas_Traseras" => $_POST['Ruedas_Traseras'],
            "Llantas" => $_POST['Llantas'],
            "Cambio_Delantero" => $_POST['Cambio_Delantero'],
            "Cambio_Trasero" => $_POST['Cambio_Trasero'],
            "Casstte" => $_POST['Casstte'],
            "Bielas" => $_POST['Bielas'],
            "Frenos" => $_POST['Frenos'],
            "Rotores_Frenos" => $_POST['Rotores_Frenos']
        ];

        $componentes->update($_POST['idComponentes'], $data);
        return true;
    }


    //Se busca un grupo de componentes en especial que cumplan con los campos de un formulario de componentes
    public function buscar()
    {

        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        $componentes = model('ComponentesModel');

        if (isset($_GET['Campo']) && isset($_GET['Valor'])) {
            $campo = $_GET['Campo'];
            $valor = $_GET['Valor'];


            if ($campo == 'Casstte') {
                $data['componentes'] = $componentes->like('Casstte', $valor)
                    ->findAll();
            }

            if ($campo == 'Bielas') {
                $data['componentes'] = $componentes->like('Bielas', $valor)
                    ->findAll();
            }

            if ($campo == 'Cambio') {
                $data['componentes'] = $componentes->like('Cambio_Delantero', $valor)
                    ->orlike('Cambio_Trasero', $valor)
                    ->findAll();
            }

            if ($campo == 'Ruedas') {
                $data['componentes'] = $componentes->like('Ruedas_Delanteras', $valor)
                    ->orlike('Ruedas_Traseras', $valor)
                    ->findAll();
            }

            if ($campo == 'Todo') {
                $data['componentes'] = $componentes->findAll();
            }


        } else {
            $campo = "";
            $valor = "";
            $data['componentes'] = $componentes->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('componentes/buscar', $data) .
            view('common/footer');
    }
}