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
        // Define los campos de filtrado de resultados.
        $filterFields = [
            'name'  => 'Nombre',
            'email' => 'Email',
        ];

        $filterList = implode(',', array_keys($filterFields));

        // Define los campos de ordenamiento de resultados.
        $sortByFields = [
            'name'       => 'Nombre',
            'created_at' => 'Fecha de registro',
        ];

        $sortByList = implode(',', array_keys($sortByFields));

        // Define los modos de ordenamiento de resultados.
        $sortOrderFields = [
            'asc'  => 'Ascendente',
            'desc' => 'Descendente',
        ];

        $sortOrderList = implode(',', array_keys($sortOrderFields));

        // Obtiene el patrón de búsqueda (por defecto: '').
        $queryParam = trimAll($this->request->getGet('q'));

        // Obtiene el campo de filtrado de resultados (por defecto: 'name').
        $filterParam = stripAllSpaces($this->request->getGet('filter')) ?: 'name';

        // Obtiene el campo de ordenamiento (por defecto: 'created_at').
        $sortByParam = stripAllSpaces($this->request->getGet('sortBy')) ?: 'created_at';

        // Obtiene el campo del modo de ordenamiento (por defecto: 'desc');
        $sortOrderParam = stripAllSpaces($this->request->getGet('sortOrder')) ?: 'desc';

        // Obtiene el campo de filtrado por rol (por defecto: '').
        $roleIdParam = stripAllSpaces($this->request->getGet('role_id'));

        // Obtiene el campo de filtrado por fecha desde (por defecto: '').
        $dateFromParam = stripAllSpaces($this->request->getGet('dateFrom'));

        // Obtiene el campo de filtrado por fecha hasta (por defecto: '').
        $dateToParam = stripAllSpaces($this->request->getGet('dateTo'));

        $roleModel = model('RoleModel');

        // Consulta todos los roles del backend.
        $roles = $roleModel->select('id, description')
            ->orderBy('description', 'asc')
            ->findAll();

        $userModel = model('UserModel');

        // Define los campos a seleccionar.
        $builder = $userModel->select('users.id, users.name, users.email, users.active, roles.description as role');

        /**
         * Consulta los datos de todos los usuarios
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $users = $builder->role()->paginate(8);

        return view('backend/users/index', [
            'queryParam'      => $queryParam,
            'filterFields'    => $filterFields,
            'filterParam'     => $filterParam,
            'sortByFields'    => $sortByFields,
            'sortByParam'     => $sortByParam,
            'sortOrderFields' => $sortOrderFields,
            'sortOrderParam'  => $sortOrderParam,
            'roles'           => $roles,
            'roleIdParam'     => $roleIdParam,
            'dateFromParam'   => $dateFromParam,
            'dateToParam'     => $dateToParam,
            'users'           => $users,
            'pager'           => $userModel->pager,
        ]);
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
