<?php

namespace App\Controllers;

use App\Controllers\BaseController;

$session = \Config\Services::session();

class Bicicleta extends BaseController
{
    public function index()
    {
        //
    }

    //Se recuperan los datos para mostrar las bicicletas
    public function mostrar()
    {

        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        //Se cargan los modelos
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

        //Se redirige a la vista para mostrar las bicicletas
        return
            view('common/head') .
            view('common/menu') .
            view('bicicleta/mostrar', $data) .
            view('common/footer');
    }

    //Para añadir una nueva bicicleta en los registros
    public function agregar()
    {
        //Se valida si ya se inición la sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        helper(['form', 'url']);

        //Se cargan los modelos
        $marca = model('MarcaModel');
        $modelo = model('ModeloModel');
        $componentes = model('ComponentesModel');
        $caracteristicas = model('CaracteristicasModel');
        $data['marcas'] = $marca->findAll();
        $data['modelos'] = $modelo->findAll();
        $data['componentes'] = $componentes->findAll();
        $data['caracteristicas'] = $caracteristicas->findAll();
        $data['title'] = "Agregar Bicicleta";

        //Se incluye la validación de los formularios
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

        //Si pasa las reglas se manda a la vista de las bicicletas
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

    //Se añade la bicicleta de la función anterior a la tabla de todas las bicicletas
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
    //Se elimina la bicicleta a partir de su id
    public function delete($idBicicleta)
    {
        $bicicleta = model('BicicletaModel');
        $bicicleta->delete($idBicicleta);
        return redirect('administrador/bicicletas');
    }


    //Se edita la bicicleta a partir de su id
    public function editar($id)
    {
        //Se verifica que se iniciara sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        //Se cargan los modelos
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

        //Se validan los formularios
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

        //Se redirige a la vista que muetsra las bicicletas
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


    //Se actualiza una bicicleta con los datos del formulario anterior
    public function update()
    {

        $bicicleta = model('BicicletaModel');
        //Se recuperan los datos 
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

    //Se busca una bicicleta entre todas las que se tienen
    public function buscar()
    {
        //Se revisa que esté iniciada la sesión
        $session = session();
        if ($session->get('logged_in') != TRUE) {
            return redirect('/');
        }

        $bicicletaModel = model('BicicletaModel');
        $marcaModel = model('MarcaModel');
        $modeloModel = model('ModeloModel');
        $componentesModel = model('ComponentesModel');
        $caracteristicasModel = model('CaracteristicasModel');

        //Se verifica si se mandaron datos en el formulario de búsqueda
        if (isset($_GET['Campo']) && isset($_GET['Valor'])) {
            $campo = $_GET['Campo'];
            $valor = $_GET['Valor'];


            if ($campo == 'Marca') {
                $data['marcas'] = $marcaModel->like('Nombre', $valor)
                    ->findAll();
                if (isset($data['marcas'][0])) {
                    $data['bicicletas'] = $bicicletaModel->where('Marca', ($data['marcas'][0]->idMarca))->findAll();
                    $data['modelos'] = $modeloModel->where('idModelo', ($data['bicicletas'][0]->Modelo))->findAll();
                    $data['componentes'] = $componentesModel->where('idComponentes', ($data['bicicletas'][0]->Componentes))->findAll();
                    $data['caracteristicas'] = $caracteristicasModel->where('idCaracteristicas', ($data['bicicletas'][0]->Caracteristicas))->findAll();
                } else {
                    $campo = 'Todo';
                }
            }

            if ($campo == 'Modelo') {
                $data['modelos'] = $modeloModel->like('Nombre', $valor)
                    ->findAll();
                if (isset($data['modelos'][0])) {
                    $data['bicicletas'] = $bicicletaModel->where('Modelo', ($data['modelos'][0]->idModelo))->findAll();
                    $data['marcas'] = $marcaModel->where('idMarca', ($data['bicicletas'][0]->Marca))->findAll();
                    $data['componentes'] = $componentesModel->where('idComponentes', ($data['bicicletas'][0]->Componentes))->findAll();
                    $data['caracteristicas'] = $caracteristicasModel->where('idCaracteristicas', ($data['bicicletas'][0]->Caracteristicas))->findAll();
                } else {
                    $campo = 'Todo';
                }
            }

            if ($campo == 'Precio') {
                $data['bicicletas'] = $bicicletaModel->where('Precio', $valor)->findAll();
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