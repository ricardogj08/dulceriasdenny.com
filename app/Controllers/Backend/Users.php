<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Users extends BaseController
{
    /**
     * Renderiza la página para registrar un usuario de acceso
     * y registra los datos de un usuario de acceso.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) !== 'post' || ! $this->validate(
            [
                'name'         => 'required|max_length[128]',
                'email'        => 'required|max_length[256]|valid_email|is_unique[users.email]',
                'role_id'      => 'required|is_natural_no_zero|is_not_unique[roles.id]',
                'password'     => 'required|min_length[8]|max_length[32]|password',
                'pass_confirm' => 'required|matches[password]',
            ],
            [
                'password' => [
                    'password' => lang('Validation.regex_match'),
                ],
            ]
        )) {
            $roleModel = model('RoleModel');

            // Consulta todos los roles del backend.
            $roles = $roleModel->select('id, description')
                ->orderBy('description', 'asc')
                ->findAll();

            return view('backend/users/create', [
                'roles' => $roles,
            ]);
        }

        $userModel = model('UserModel');

        // Registra el nuevo usuario.
        $userModel->insert([
            'name'     => trimAll($this->request->getPost('name')),
            'email'    => lowerCase(stripAllSpaces($this->request->getPost('email'))),
            'role_id'  => stripAllSpaces($this->request->getPost('role_id')),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()
            ->route('backend.users.index')
            ->with('toast-success', 'El usuario de acceso se ha registrado correctamente');
    }

    /**
     * Renderiza la página de todos los usuarios de acceso.
     */
    public function index()
    {
        return view('backend/users/index');
    }

    /**
     * Renderiza la página para modificar usuarios de acceso
     * y modifica los datos de un usuario de acceso.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/users/update');
    }

    /**
     * Alterna el estado de cuenta de un usuario de acceso.
     *
     * @param mixed|null $id
     */
    public function toggleActive($id = null)
    {
    }

    /**
     * Elimina el registro de un usuario de acceso.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
    }
}
