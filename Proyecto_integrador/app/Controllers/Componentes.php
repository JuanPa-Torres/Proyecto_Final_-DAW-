<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Componentes extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {
        $componentesModel = model('ComponentesModel');
        $data['componentes'] = $componentesModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('componentes/mostrar', $data) .
            view('common/footer');
    }

    public function agregar()
    {
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

    public function delete($idHistorial_Medico)
    {
        $historial_MedicoModel = model('Historial_MedicoModel');
        $historial_MedicoModel->delete($idHistorial_Medico);
        return redirect('historial_Medico/mostrar');
    }

    public function editar($id)
    {
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

    public function buscar()
    {
        $historial_MedicoModel = model('Historial_MedicoModel');
        if (isset($_GET['nombre'])) {
            $estadoSalud = $_GET['estadoSalud'];
            $alergias = $_GET['alergias'];
            $vacunas = $_GET['vacunas'];
            $tratamientos = $_GET['tratamientos'];



            $data['historiales_Medicos'] = $historial_MedicoModel->like('estadoSalud', $estadoSalud)
                ->like('alergias', $alergias)->like('vacunas', $vacunas)->like('tratamientos', $tratamientos)
                ->findAll();

        } else {
            $nombre = "";
            $data['historiales_Medicos'] = $historial_MedicoModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('historial_Medico/buscar', $data) .
            view('common/footer');
    }
}