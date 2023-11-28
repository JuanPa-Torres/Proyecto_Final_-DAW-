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
    
    public function agregar(){
        helper(['form','url']);


        $data['title']="Agregar Raza";   
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head')
                .  view('common/menu')
                .  view('raza/agregar',$data)
                .  view('common/footer');
            }

            $rules = [
                'nombre' => 'required|max_length[30]|min_length[3]',
                'descripcion'=>'required',
                'origen'=>'required'
                
            ];

            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('common/menu')
                .  view('raza/agregar',['validation' => $validation,$data])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('raza/mostrar');
                }
            }

    }

    public function insert(){
        $razaModel = model('RazaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "origen" => $_POST['origen']
            
        ];
        $razaModel->insert($data, false);
        return true;
    }

    public function delete($idRaza){
        $razaModel = model('RazaModel');
        $razaModel->delete($idRaza);
        return redirect('raza/mostrar');
    }

    public function editar($idRaza){
        $razaModel = model('RazaModel');
        $data['raza'] = $razaModel->find($idRaza);

        return 
        view('common/head') .
        view('common/menu') .
        view('raza/editar',$data) .
        view('common/footer');
    }


    public function update (){

        $razaModel = model('RazaModel');

        $data = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "origen" => $_POST['origen']
        ];

        $razaModel->update($_POST['idRaza'],$data);
        return redirect('raza/mostrar');
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