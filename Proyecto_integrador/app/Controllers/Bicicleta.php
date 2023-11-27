<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bicicleta extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $mascotaModel = model('MascotaModel');
        $data['mascotas'] = $mascotaModel->findAll();
        return 
        view('common/head') .
        view('common/menu') .
        view('mascota/mostrar',$data) .
        view('common/footer');
    }
    public function agregar(){
        helper(['form','url']);


        $data['title']="Agregar Mascota";   
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head')
                .  view('common/menu')
                .  view('mascota/agregar',$data)
                .  view('common/footer');
            }

            $rules = [
                'nombre' => 'required|max_length[30]|min_length[3]',
                'especie'=>'required',
                'sexo'=>'required',
                'fechaNacimiento'=>'required'
            ];

            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('common/menu')
                .  view('mascota/agregar',['validation' => $validation,$data])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('mascota/mostrar');
                }
            }

    }

    public function insert(){
        $mascotaModel = model('MascotaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "especie" => $_POST['especie'],
            "sexo" => $_POST['sexo'],
            "fechaNacimiento" => $_POST['fechaNacimiento']
        ];
        $mascotaModel->insert($data, false);
        return true;
    }

    public function delete($idMascota){
        $mascotaModel = model('MascotaModel');
        $mascotaModel->delete($idMascota);
        return redirect('mascota/mostrar');
    }

    public function editar($idMascota){
        $mascotaModel = model('MascotaModel');
        $data['mascota'] = $mascotaModel->find($idMascota);

        return 
        view('common/head') .
        view('common/menu') .
        view('mascota/editar',$data) .
        view('common/footer');
    }


    public function update (){

        $mascotaModel = model('MascotaModel');

        $data = [
            "nombre" => $_POST['nombre'],
            "especie" => $_POST['especie'],
            "sexo" => $_POST['sexo'],
            "fechaNacimiento" => $_POST['fechaNacimiento']
        ];

        $mascotaModel->update($_POST['idMascota'],$data);
        return redirect('mascota/mostrar');
    }

    public function buscar(){
    $mascotaModel = model('MascotaModel');
    if(isset($_GET['nombre'])){
        $nombre =$_GET['nombre']; 
        $especie =$_GET['especie'];
        $sexo =$_GET['sexo'];
        $fechaNacimiento =$_GET['fechaNacimiento'];
        

        $data['mascotas']=$mascotaModel->like('nombre',$nombre)
       ->like('especie', $especie)->like('sexo', $sexo)->like('fechaNacimiento', $fechaNacimiento)
        ->findAll();

    }
    else{
        $nombre = "";
        $data ['mascotas']=$mascotaModel->findAll();
        
    }
        return 
        view('common/head') .
        view('common/menu') .
        view('mascota/buscar',$data) .
        view('common/footer');
    }
}