<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;
use App\Libraries\ImageCompressor;
use CodeIgniter\I18n\Time;
use RuntimeException;

class PopUps extends BaseController
{
    /**
     * Renderiza la página para registrar un Pop Up
     * y registra los datos de un Pop Up.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) !== 'post' || ! $this->validate(
            [
                'name'        => 'required|max_length[256]|is_unique[popups.name]',
                'image'       => 'uploaded[image]|max_size[image,4096]|is_image[image]',
                'finished_at' => 'permit_empty|valid_date[Y-m-d]|date_greater_than_equal_to_now',
                'active'      => 'if_exist|in_list[active]',
            ],
            [
                'finished_at' => [
                    'date_greater_than_equal_to_now' => lang('Validation.valid_date'),
                ],
            ]
        )) {
            return view('backend/modules/popups/create', [
                'date' => Time::parse('+1 day')->toDateString(),
            ]);
        }

        $image = $this->request->getFile('image');

        // Valida si la imagen está disponible.
        if (! $image->isValid() || $image->hasMoved()) {
            throw new RuntimeException($image->getErrorString() . '(' . $image->getError() . ')');
        }

        $newImageName = $image->getRandomName();

        // Define la ruta de las imágenes.
        $path = FCPATH . 'uploads/popups/';

        // Almacena la imagen.
        $image->move($path, $newImageName);

        $finished_at = stripAllSpaces($this->request->getPost('finished_at'));

        $popUpModel = model('PopUpModel');

        // Registra el nuevo Pop Up.
        $popUpModel->insert([
            'name'        => trimAll($this->request->getPost('name')),
            'image'       => $newImageName,
            'finished_at' => $finished_at ?: null,
            'active'      => (bool) stripAllSpaces($this->request->getPost('active')),
        ]);

        // Comprime la imagen del Pop Up.
        ImageCompressor::getInstance()->run($path . $newImageName);

        return redirect()
            ->route('backend.modules.popups.index')
            ->with('toast-success', 'El Pop Up se ha registrado correctamente');
    }

    /**
     * Renderiza la página de todos los Pop Ups.
     */
    public function index()
    {
        return view('backend/modules/popups/index');
    }

    /**
     * Renderiza la página para modificar Pop Ups
     * y modifica los datos de un Pop Up.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/modules/popups/update');
    }

    /**
     * Elimina el registro de un Pop Up.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
    }
}
