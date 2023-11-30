<?php

namespace App\Controllers;

use App\Controllers\BaseController;
$session = \Config\Services::session();
class Usuario extends BaseController
{
    public function index()
    {

    }

    /* Esta función es para recuperar todos los datos del modelo del Usuario, que vienen
    directamente de la tabla "usuarios" de la base de datos.
    Los datos se mandan a la vista de "mostrar" en la carpeta "usuarios" para tratarlos
    en tablas
    */
    public function mostrar()
    {
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/');
        }

        $usuarioModel = model('UsuarioModel');
        $data['usuarios'] = $usuarioModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('usuario/mostrar', $data) .
            view('common/footer');
    }

    /*
    Esta función es para insertar un nuevo elemento a la base de datos,
    a la tabla de "usuarios" por medio del modelo "UsuarioModel".
    Se agregan validaciones para el formulario del que se extraen los datos
    y también se protege la vista con sesiones
    */
    public function agregar()
    {
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/');
        }

        $data['title'] = "Agregar Usuario";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head', $data)
                . view('common/menu')
                . view('usuario/agregar', $data)
                . view('common/footer');
        }
        $rules = [
            'Nombre' => 'required',
            'Apell_Paterno' => 'required',
            'Pais' => 'required',
            'Correo_Elec' => 'required',
            'Contraseña' => 'required',
            'Perfil' => 'required'
        ];
        if (!$this->validate($rules)) {
            return view('common/head', $data)
                . view('common/menu')
                . view('usuario/agregar', ['validation' => $validation], $data)
                . view('common/footer');
        } else {
            if ($this->insert()) {
                return redirect('administrador/usuario');
            }
        }

    }

    /*
    Esta función realiza la inserción que se solicita en la función de agregar de 
    este controlador
    */
    public function insert()
    {
        $usuarioModel = model('UsuarioModel');
        $data = [
            "Nombre" => $_POST['Nombre'],
            "Apell_Paterno" => $_POST['Apell_Paterno'],
            "Pais" => $_POST['Pais'],
            "Correo_Elec" => $_POST['Correo_Elec'],
            "Contraseña" => $_POST['Contraseña'],
            "Perfil" => ($_POST['Perfil'])
        ];
        $usuarioModel->insert($data, false);
        return true;
    }
    
    /*
    Esta función elimina el registro que se desea, según el id del
    usuario que se quiera.
    Al terminar, redirecciona a la primera función de este controlador
    */
    public function delete($idUsuario)
    {
        $usuarioModel = model('UsuarioModel');
        $usuarioModel->delete($idUsuario);
        return redirect('administrador/usuario');
    }

    /*
    Función que recupera una inserción del modelo de los usuarios para luego 
    editar sus campos en una vista que contiene un formulario
    */
    public function editar($idUsuario)
    {
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/');
        }

        $usuarioModel = model('UsuarioModel');
        $data['usuario'] = $usuarioModel->find($idUsuario);

        return
            view('common/head') .
            view('common/menu') .
            view('usuario/editar', $data) .
            view('common/footer');
    }

    /*
    Función que realiza la actualización del resgistro que se encontró 
    en la función de editar de este controlador, utilizando el modelo 
    de los usuarios
    */
    public function update()
    {

        $usuarioModel = model('UsuarioModel');

        $data = [
            "Nombre" => $_POST['Nombre'],
            "Apell_Paterno" => $_POST['Apell_Paterno'],
            "Pais" => $_POST['Pais'],
            "Correo_Elec" => $_POST['Correo_Elec'],
            "Contraseña" => $_POST['Contraseña'],
            "Perfil" => $_POST['Perfil']
        ];

        $usuarioModel->update($_POST['idUsuario'], $data);
        return redirect('administrador/usuario');
    }


    /*
    Función que recupera registros específicos del modelo de los usuarios,
    en base a campos como el nombre, su correo o el país de origen 
    */
    public function buscar()
    {
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/');
        }

        $usuarioModel = model('UsuarioModel');
        if (isset($_GET['columnaBusqueda']) && isset($_GET['elementoBusqueda'])) {
            $columnaBusqueda = $_GET['columnaBusqueda'];
            $elementoBusqueda = $_GET['elementoBusqueda'];

            if ($columnaBusqueda == 'nombre') {
                $data['usuarios'] = $usuarioModel->like('Nombre', $elementoBusqueda)
                    ->orlike('Apell_Paterno', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'correo') {
                $data['usuarios'] = $usuarioModel->like('correo', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'pais') {
                $data['usuarios'] = $usuarioModel->like('pais', $elementoBusqueda)
                    ->findAll();
            }

            if ($columnaBusqueda == 'todo') {
                $data['usuarios'] = $usuarioModel->findAll();
            }

        } else {
            $columnaBusqueda = "";
            $elementoBusqueda = "";
            $data['usuarios'] = $usuarioModel->findAll();

        }

        return
            view('common/head') .
            view('common/menu') .
            view('usuario/buscar', $data) .
            view('common/footer');
    }
}