<?php

namespace App\Controllers;

$session = \Config\Services::session();

class Home extends BaseController
{
    //Función para dirigir al inicio de sesión y crear la sesión
    public function index()
    {
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head') .
                view('home/home') .
                view('common/footer');
        }

        //Reglas de validación del formulario del inicio de sesión
        $rules = [
            'Correo_Elec' => 'required',
            'Contraseña' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head') .
                view('home/home') .
                view('common/footer');
        } else {
            //si pasa las reglas
            $email = $_POST['Correo_Elec'];
            $password = $_POST['Contraseña'];
            $usuarios = model('UsuarioModel');
            //Se busca el usuario
            $data['usuario'] = $usuarios->where('Correo_Elec', $email)
                ->where('Contraseña', $password)
                ->findAll();


            if (count($data['usuario']) > 0) {
                //Si se encuentra el usuario, se crea su sesión y se redirige a la siguiente vista
                $session = session();

                $newdata = [
                    'idUsuario' => $data['usuario'][0]->idUsuario,
                    'Nombre' => $data['usuario'][0]->Nombre,
                    'Correo_Elec' => $data['usuario'][0]->Correo_Elec,
                    'logged_in' => true,
                    'Perfil' => $data['usuario'][0]->Perfil
                ];

                $session->set($newdata);

                if ($newdata['Perfil'] == 1) {
                    return redirect('administrador');
                }

                if ($newdata['Perfil'] == 2) {
                    return redirect('cliente');
                }
            } else {
                return redirect('/');
            }
        }
    }

    //Vista que aparece si la sesión es de administrador
    public function Administrador()
    {
        return view('common/head') .
            view('common/menu') .
            view('administrador/opciones') .
            view('common/footer');
    }

    //Vista que aparece si la sesión es de cliente
    public function Cliente()
    {
        return view('common/head') .
            view('common/menu') .
            view('cliente/opciones') .
            view('common/footer');
    }

    public function CerrarSesion()
    {
        $session = \Config\Services::session();
        $session->destroy();

        return redirect('/');
    }
}
