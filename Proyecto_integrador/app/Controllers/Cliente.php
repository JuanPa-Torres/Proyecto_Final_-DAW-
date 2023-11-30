<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cliente extends BaseController
{
    public function index()
    {
        //
    }


    public function buscarBicicleta()
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
            view('cliente/bicicleta/buscar', $data) .
            view('common/footer');
    }

    public function buscarCaracteristicas(){

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
        view('cliente/caracteristicas/buscar',$data) .
        view('common/footer');
    }

    public function buscarComponentes(){

        $componentes = model('ComponentesModel');

        if(isset($_GET['Campo']) && isset($_GET['Valor'])){
        $campo =$_GET['Campo']; 
        $valor =$_GET['Valor'];
        
        
        if($campo == 'Casstte'){
            $data['componentes']=$componentes->like('Casstte',$valor)
            ->findAll();
        }

        if($campo == 'Bielas'){
            $data['componentes']=$componentes->like('Bielas',$valor)
            ->findAll();
        }

        if($campo == 'Cambio'){
            $data['componentes']=$componentes->like('Cambio_Delantero',$valor)
            ->orlike('Cambio_Trasero',$valor)
            ->findAll();
        }

        if($campo == 'Ruedas'){
            $data['componentes']=$componentes->like('Ruedas_Delanteras',$valor)
            ->orlike('Ruedas_Traseras',$valor)
            ->findAll();
        }

        if($campo == 'Todo'){
            $data ['componentes']=$componentes->findAll();
        }

       
    }
    else{
        $campo = "";
        $valor = "";
        $data ['componentes']=$componentes->findAll();
        
    }
        return 
        view('common/head') .
        view('common/menu') .
        view('cliente/componentes/buscar',$data) .
        view('common/footer');
    }

    public function buscarModelo(){

        $modeloModel = model('ModeloModel');

        if(isset($_GET['Campo']) && isset($_GET['Valor'])){
        $campo =$_GET['Campo']; 
        $valor =$_GET['Valor'];
        
        
        if($campo == 'Nombre'){
            $data['modelos']=$modeloModel->like('Nombre',$valor)
            ->findAll();
        }

        if($campo == 'Gama'){
            $data['modelos']=$modeloModel->like('Gama',$valor)
            ->findAll();
        }

        if($campo == 'Año'){
            $data['modelos']=$modeloModel->like('Año',$valor)
            ->findAll();
        }

        if($campo == 'Modalidad'){
            $data['modelos']=$modeloModel->like('Modalidad',$valor)
            ->findAll();
        }

        if($campo == 'Todo'){
            $data ['modelos']=$modeloModel->findAll();
        }

       
    }
    else{
        $campo = "";
        $valor = "";
        $data ['modelos']=$modeloModel->findAll();
        
    }
        return 
        view('common/head') .
        view('common/menu') .
        view('cliente/modelo/buscar',$data) .
        view('common/footer');
    }


    public function buscarMarca()
    {
        $marcaModel = model('MarcaModel');
        $distribuidorModel = model('DistribuidorModel');

        if (isset($_GET['columnaBusqueda']) && isset($_GET['elementoBusqueda'])) {
            $columnaBusqueda = $_GET['columnaBusqueda'];
            $elementoBusqueda = $_GET['elementoBusqueda'];

            if ($columnaBusqueda == 'Nombre') {
                $data['marcas'] = $marcaModel->like('Nombre', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'Todo') {
                $data['marcas'] = $marcaModel->findAll();
            }

            if ($columnaBusqueda == 'Pais_Origen') {
                $data['marcas'] = $marcaModel->like('Pais_Origen', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'Pais_Distribuidor') {
                $data['marcas'] = $marcaModel->like('Pais_Distribuidor', $elementoBusqueda)
                    ->findAll();
            }

            $data['distribuidores'] = $distribuidorModel->findAll();

        } else {
            $columnaBusqueda = "";
            $elementoBusqueda = "";
            $data['marcas'] = $marcaModel->findAll();
            $data['distribuidores'] = $distribuidorModel->findAll();

        }
        return
            view('common/head') .
            view('common/menu') .
            view('cliente/marca/buscar', $data) .
            view('common/footer');
    }
}