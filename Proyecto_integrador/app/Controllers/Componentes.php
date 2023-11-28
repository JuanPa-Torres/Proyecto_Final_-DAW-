<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Componentes extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $componentesModel = model('ComponentesModel');
        $data['componentes'] = $componentesModel->findAll();
        return 
        view('common/head') .
        view('common/menu') .
        view('componentes/mostrar',$data) .
        view('common/footer');
    }
    
    public function agregar(){
        helper(['form','url']);


        $data['title']="Agregar Historial_Medico";   
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head')
                .  view('common/menu')
                .  view('historial_Medico/agregar',$data)
                .  view('common/footer');
            }

            $rules = [
                'estadoSalud' => 'required',
                'alergias'=>'required',
                'vacunas'=>'required',
                'tratamientos'=>'required'
                
            ];

            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('common/menu')
                .  view('historial_Medico/agregar',['validation' => $validation,$data])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('historial_Medico/mostrar');
                }
            }

    }

    public function insert(){
        $historial_MedicoModel = model('Historial_MedicoModel');
        $data = [
            "estadoSalud" => $_POST['estadoSalud'],
            "alergias" => $_POST['alergias'],
            "vacunas" => $_POST['vacunas'],
            "tratamientos" => $_POST['tratamientos']
            
        ];
        $historial_MedicoModel->insert($data, false);
        return true;
    }

    public function delete($idHistorial_Medico){
        $historial_MedicoModel = model('Historial_MedicoModel');
        $historial_MedicoModel->delete($idHistorial_Medico);
        return redirect('historial_Medico/mostrar');
    }

    public function editar($idHistorial_Medico){
        $historial_MedicoModel = model('Historial_MedicoModel');
        $data['historial_Medico'] = $historial_MedicoModel->find($idHistorial_Medico);

        return 
        view('common/head') .
        view('common/menu') .
        view('historial_Medico/editar',$data) .
        view('common/footer');
    }


    public function update (){

        $historial_MedicoModel = model('Historial_MedicoModel');

        $data = [
           "estadoSalud" => $_POST['estadoSalud'],
            "alergias" => $_POST['alergias'],
            "vacunas" => $_POST['vacunas'],
            "tratamientos" => $_POST['tratamientos']
        ];

        $historial_MedicoModel->update($_POST['idHistorial_Medico'],$data);
        return redirect('historial_Medico/mostrar');
    }

    public function buscar(){
    $historial_MedicoModel = model('Historial_MedicoModel');
    if(isset($_GET['nombre'])){
        $estadoSalud =$_GET['estadoSalud']; 
        $alergias =$_GET['alergias'];
        $vacunas =$_GET['vacunas'];
        $tratamientos =$_GET['tratamientos'];
        
        

        $data['historiales_Medicos']=$historial_MedicoModel->like('estadoSalud',$estadoSalud)
       ->like('alergias', $alergias)->like('vacunas', $vacunas)->like('tratamientos', $tratamientos)
        ->findAll();

    }
    else{
        $nombre = "";
        $data ['historiales_Medicos']=$historial_MedicoModel->findAll();
        
    }
        return 
        view('common/head') .
        view('common/menu') .
        view('historial_Medico/buscar',$data) .
        view('common/footer');
    }
}