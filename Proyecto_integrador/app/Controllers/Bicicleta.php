<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bicicleta extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {
        $bicicletaModel = model('BicicletaModel');
        $data['bicicletas'] = $bicicletaModel->findAll();

        $marcaModel = model('MarcaModel');
        $data['marcas'] = $marcaModel->findAll();

        $modeloModel = model('ModeloModel');
        $data['modelos'] = $modeloModel->findAll();

        $componentesModel = model('ComponentesModel');
        $data['componentes'] = $componentesModel->findAll();

        $caracteristicasModel = model('CaracteristicasModel');
        $data['caracteristicas'] = $caracteristicasModel->findAll();

        return
            view('common/head') .
            view('common/menu') .
            view('bicicleta/mostrar', $data) .
            view('common/footer');
    }

    public function agregar()
    {
        helper(['form', 'url']);

        $marca = model('MarcaModel');
        $modelo = model('ModeloModel');
        $componentes = model('ComponentesModel');
        $caracteristicas = model('CaracteristicasModel');
        $data['marcas'] = $marca->findAll();
        $data['modelos'] = $modelo->findAll();
        $data['componentes'] = $componentes->findAll();
        $data['caracteristicas'] = $caracteristicas->findAll();
        $data['title'] = "Agregar Bicicleta";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head')
                . view('common/menu')
                . view('bicicleta/agregar', $data)
                . view('common/footer');
        }

        $rules = [
            'Marca' => 'required',
            'Modelo' => 'required',
            'Componentes' => 'required',
            'Caracteristicas' => 'required',
            'Precio' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('mascota/agregar', ['validation' => $validation, $data])
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/bicicletas');
            }
        }

    }

    public function insert()
    {
        $bici = model('BicicletaModel');
        $data = [
            "Marca" => $_POST['Marca'],
            "Modelo" => $_POST['Modelo'],
            "Caracteristicas" => $_POST['Caracteristicas'],
            "Componentes" => $_POST['Componentes'],
            "Precio" => $_POST['Precio'],
            "Foto" => $_POST['Foto']
        ];
        $bici->insert($data, false);
        return true;
    }

    public function delete($idMascota)
    {
        $mascotaModel = model('MascotaModel');
        $mascotaModel->delete($idMascota);
        return redirect('mascota/mostrar');
    }

    public function editar($id)
    {
        
        $modelo = model('ModeloModel');
        $componentes = model('ComponentesModel');
        $caracteristicas = model('CaracteristicasModel');
        $marca = model('MarcaModel');
        $bicicleta = model('BicicletaModel');
        $data['marcas'] = $marca->findAll();
        $data['modelos'] = $modelo->findAll();
        $data['componentes'] = $componentes->findAll();
        $data['caracteristicas'] = $caracteristicas->findAll();
        $data['bicicleta'] = $bicicleta->find($id);

        $validation = \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('bicicleta/editar', $data) .
                view('common/footer');
        }

        $rules = [
            'Marca' => 'required',
            'Modelo' => 'required',
            'Componentes' => 'required',
            'Caracteristicas' => 'required',
            'Precio' => 'required'
        ];

        if (!$this->validate($rules)) {
            return
                view('common/head', $data) .
                view('common/menu') .
                view('bicicleta/editar', ['validation' => $validation], $data) .
                view('common/footer');
        } else {
            if ($this->update()) {
                return redirect('administrador/bicicletas');
            }
        }
    }


    public function update()
    {

        $bicicleta = model('BicicletaModel');

        $data = [
            "Marca" => $_POST['Marca'],
            "Modelo" => $_POST['Modelo'],
            "Caracteristicas" => $_POST['Caracteristicas'],
            "Componentes" => $_POST['Componentes'],
            "Precio" => $_POST['Precio'],
            "Foto" => $_POST['Foto']
        ];
        $bicicleta->update($_POST['idBicicleta'], $data);
        return true;
    }

    public function buscar()
    {
        $mascotaModel = model('MascotaModel');
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $especie = $_GET['especie'];
            $sexo = $_GET['sexo'];
            $fechaNacimiento = $_GET['fechaNacimiento'];


            $data['mascotas'] = $mascotaModel->like('nombre', $nombre)
                ->like('especie', $especie)->like('sexo', $sexo)->like('fechaNacimiento', $fechaNacimiento)
                ->findAll();

        } else {
            $nombre = "";
            $data['mascotas'] = $mascotaModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('mascota/buscar', $data) .
            view('common/footer');
    }
}