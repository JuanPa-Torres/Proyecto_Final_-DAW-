<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Modelo extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $modeloModel = model('ModeloModel');
        $data['modelos'] = $modeloModel->findAll();
        return 
        view('common/head') .
        view('common/menu') .
        view('modelo/mostrar',$data) .
        view('common/footer');
    }
    
    public function agregar()
    {
        helper(['form', 'url']);

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

    public function delete($idRaza){
        $razaModel = model('RazaModel');
        $razaModel->delete($idRaza);
        return redirect('raza/mostrar');
    }

    public function editar($id)
    {
        
        $modelo = model('ModeloModel');
        $data['modelo'] = $modelo->find($id);

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


    public function update()
    {
        $modelo = model('ModeloModel');

        $data = [
            "Nombre" => $_POST['Nombre'],
            "Modalidad" => $_POST['Modalidad'],
            "Año" => $_POST['Año'],
            "Gama" => $_POST['Gama']
        ];

        $modelo->update($_POST['idModelo'], $data);
        return true;
    }

    public function buscar(){
    $razaModel = model('RazaModel');
    if(isset($_GET['nombre'])){
        $nombre =$_GET['nombre']; 
        $descripcion =$_GET['descripcion'];
        $origen =$_GET['origen'];
        
        

        $data['razas']=$razaModel->like('nombre',$nombre)
       ->like('descripcion', $descripcion)->like('origen', $origen)
        ->findAll();

    }
    else{
        $nombre = "";
        $data ['razas']=$razaModel->findAll();
        
    }
        return 
        view('common/head') .
        view('common/menu') .
        view('raza/buscar',$data) .
        view('common/footer');
    }
}