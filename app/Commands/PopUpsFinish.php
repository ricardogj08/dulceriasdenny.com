<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\I18n\Time;

/**
 * Finaliza todos los Pop Ups publicados
 * que cuentan con una fecha de término.
 */
class PopUpsFinish extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Genotipo';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'popups:finish';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Comprueba y finaliza todos los Pop Ups publicados que cuentan con una fecha de término.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'popups:finish';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     */
    public function run(array $params)
    {
        $popUpModel = model('PopUpModel');

        /**
         * Consulta todos los Pop Ups registrados
         * que cuentan con una fecha de término.
         */
        $popups = $popUpModel->select('id, name, active, finished_at')
            ->where('active', true)
            ->where('finished_at !=', null)
            ->orderBy('finished_at', 'desc')
            ->findAll();

        $tbody = [];

        helper('text');

        foreach ($popups as $popup) {
            // Valida la fecha de término del Pop Up.
            if (Time::now()->isAfter(Time::parse($popup['finished_at']))) {
                // Deshabilita el Pop Up.
                $popUpModel->update($popup['id'], [
                    'active' => false,
                ]);

                $popup['active'] = false;
            }

            $tbody[] = [
                $popup['id'],
                character_limiter($popup['name'], 32, '...'),
                $popup['active'] ? 'Sí' : 'No',
                Time::parse($popup['finished_at'])->toDateString(),
            ];
        }

        $thead = ['ID', 'Nombre', 'Habilitado', 'Fecha de término'];

        CLI::write('Pop Ups finalizados:', 'black', 'yellow');
        CLI::newLine();
        CLI::table($tbody, $thead);
    }
}
