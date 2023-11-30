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

    public function mostrar(){
        $caracteristicasModel = model('CaracteristicasModel');
        $data['caracteristicas'] = $caracteristicasModel->findAll();
        return 
        view('common/head') .
        view('common/menu') .
        view('caracteristicas/mostrar',$data) .
        view('common/footer');
    }
    public function agregar(){
        helper(['form','url']);


        $data['title']="Agregar Características";   
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head')
                .  view('common/menu')
                .  view('caracteristicas/agregar',$data)
                .  view('common/footer');
            }

            $rules = [
                'Talla_Cuadro' => 'required',
                'Material'=>'required',
                'Colores_Disponibles'=>'required',
                'Geometrias'=>'required',
                'Peso'=>'required',
                'Limite_Peso'=>'required',
                'Garantia'=>'required'
            ];

            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('common/menu')
                .  view('caracteristicas/agregar',['validation' => $validation,$data])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('administrador/caracteristicas');
                }
            }

    }

    public function insert(){
        $caracteristicas = model('CaracteristicasModel');
        $data = [
            "Talla_Cuadro" => $_POST['Talla_Cuadro'],
            "Material" => $_POST['Material'],
            "Colores_Disponibles" => $_POST['Colores_Disponibles'],
            "Geometrias"=>$_POST['Geometrias'],
            "Peso"=>$_POST['Peso'],
            "Limite_Peso"=>$_POST['Limite_Peso'],
            "Garantia"=>$_POST['Garantia']  
        ];
        $caracteristicas->insert($data, false);
        return true;
    }

    public function delete($idCaracteristica){
        $caracteristicas = model('CaracteristicasModel');
        $caracteristicas->delete($idCaracteristica);
        return redirect('administrador/caracteristicas');
    }

    public function editar($id)
    {
        
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
                'Material'=>'required',
                'Colores_Disponibles'=>'required',
                'Geometrias'=>'required',
                'Peso'=>'required',
                'Limite_Peso'=>'required',
                'Garantia'=>'required'
        ];

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


    public function update (){

        $caracteristicas = model('CaracteristicasModel');

        $data = [
            "Talla_Cuadro" => $_POST['Talla_Cuadro'],
            "Material" => $_POST['Material'],
            "Colores_Disponibles" => $_POST['Colores_Disponibles'],
            "Geometrias"=>$_POST['Geometrias'],
            "Peso"=>$_POST['Peso'],
            "Limite_Peso"=>$_POST['Limite_Peso'],
            "Garantia"=>$_POST['Garantia'] 
        ];

        $caracteristicas->update($_POST['idCaracteristicas'],$data);
        return true;
    }

    public function buscar(){

        $caracteristicasModel = model('CaracteristicasModel');

        if(isset($_GET['Campo']) && isset($_GET['Valor'])){
        $campo =$_GET['Campo']; 
        $valor =$_GET['Valor'];
        
        
        if($campo == 'Material'){
            $data['caracteristicas']=$caracteristicasModel->like('Material',$valor)
            ->findAll();
        }

        if($campo == 'Limite_Peso'){
            $data['caracteristicas']=$caracteristicasModel->like('Limite_Peso',$valor)
            ->findAll();
        }

        if($campo == 'Talla_Cuadro'){
            $data['caracteristicas']=$caracteristicasModel->like('Talla_Cuadro',$valor)
            ->findAll();
        }

        if($campo == 'Geometrias'){
            $data['caracteristicas']=$caracteristicasModel->like('Geometrias',$valor)
            ->findAll();
        }

        if($campo == 'Todo'){
            $data ['caracteristicas']=$caracteristicasModel->findAll();
        }

       
    }
    else{
        $campo = "";
        $valor = "";
        $data ['caracteristicas']=$caracteristicasModel->findAll();
        
    }
        return 
        view('common/head') .
        view('common/menu') .
        view('caracteristicas/buscar',$data) .
        view('common/footer');
    }
}