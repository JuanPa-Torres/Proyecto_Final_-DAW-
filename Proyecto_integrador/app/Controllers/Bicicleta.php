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

    public function delete($idBicicleta)
    {
        $bicicleta = model('BicicletaModel');
        $bicicleta->delete($idBicicleta);
        return redirect('administrador/bicicletas');
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
        $bicicletaModel = model('BicicletaModel');
        $marcaModel = model('MarcaModel');
        $modeloModel = model('ModeloModel');
        $componentesModel = model('ComponentesModel');
        $caracteristicasModel = model('CaracteristicasModel');

        if (isset($_GET['Campo']) && isset($_GET['Valor'])) {
            $campo = $_GET['Campo'];
            $valor = $_GET['Valor'];


            if ($campo == 'Marca') {
                $data['marcas'] = $marcaModel->like('Nombre', $valor)
                ->findAll();
                if (isset($data['marcas'][0])) {
                    $data['bicicletas'] = $bicicletaModel->where('Marca',($data['marcas'][0]->idMarca))->findAll();    
                    $data['modelos'] = $modeloModel->where('idModelo',($data['bicicletas'][0]->Modelo))->findAll();
                    $data['componentes'] = $componentesModel->where('idComponentes',($data['bicicletas'][0]->Componentes))->findAll();
                    $data['caracteristicas'] = $caracteristicasModel->where('idCaracteristicas',($data['bicicletas'][0]->Caracteristicas))->findAll();
                }
                else{
                    $campo = 'Todo';
                }
            }

            if ($campo == 'Modelo') {
                $data['modelos'] = $modeloModel->like('Nombre', $valor)
                ->findAll();
                if (isset($data['modelos'][0])) {
                    $data['bicicletas'] = $bicicletaModel->where('Modelo',($data['modelos'][0]->idModelo))->findAll();    
                    $data['marcas'] = $marcaModel->where('idMarca',($data['bicicletas'][0]->Marca))->findAll();
                    $data['componentes'] = $componentesModel->where('idComponentes',($data['bicicletas'][0]->Componentes))->findAll();
                    $data['caracteristicas'] = $caracteristicasModel->where('idCaracteristicas',($data['bicicletas'][0]->Caracteristicas))->findAll();
                }
                else{
                    $campo = 'Todo';
                }
            }

            if ($campo == 'Precio') {
                $data['bicicletas'] = $bicicletaModel->where('Precio',$valor)->findAll();    
                $data['marcas'] = $marcaModel->find();
                $data['modelos'] = $modeloModel->findAll();
                $data['componentes'] = $componentesModel->findAll();
                $data['caracteristicas'] = $caracteristicasModel->findAll();
            }

            if ($campo == 'Todo') {
                $data['bicicletas'] = $bicicletaModel->findAll();    
                $data['marcas'] = $marcaModel->find();
                $data['modelos'] = $modeloModel->findAll();
                $data['componentes'] = $componentesModel->findAll();
                $data['caracteristicas'] = $caracteristicasModel->findAll();
            }
            

        } else {
            $campo =
            $valor =

            $data['bicicletas'] = $bicicletaModel->findAll();    
            $data['marcas'] = $marcaModel->find();
            $data['modelos'] = $modeloModel->findAll();
            $data['componentes'] = $componentesModel->findAll();
            $data['caracteristicas'] = $caracteristicasModel->findAll();
        }
        return
            view('common/head') .
            view('common/menu') .
            view('bicicleta/buscar', $data) .
            view('common/footer');
    }

}