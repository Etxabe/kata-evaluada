<?php

namespace Deg540\DockerPHPBoilerplate;

class Calculator
{
    private string $listaActual = "";

    public function listaDeLaCompra(string $command): string
    {
        if ($this->listaActual !== '') {
            $this->listaActual = $this->listaActual . ', ';
        }

        if(str_contains($command, 'añadir')){
            $commandParts = explode(' ', $command);
            $cantidadActual = '0';

            if (str_contains($this->listaActual, $commandParts[1])) {
                $listElements = explode(', ', $this->listaActual);
                $this->listaActual = '';
                foreach ($listElements as $element) {
                    if (str_contains($element, $commandParts[1])) {
                        $cantidadActual = substr($element, strlen($element) - 1);
                        $element = '';
                    }
                    $this->listaActual = $this->listaActual . $element;
                }
            }

            $this->listaActual = $this->listaActual . $commandParts[1] . ' x';

            if (sizeof($commandParts) < 3) {
                $this->listaActual = $this->listaActual . '1';
            }

            if (sizeof($commandParts) >= 3) {
                $cantidadActual = intval($cantidadActual) + intval($commandParts[2]);

                $this->listaActual = $this->listaActual . $cantidadActual;
            }
        }

        if(str_contains($command, 'vaciar')){
            $this->listaActual = '';
        }

        return $this->listaActual;
    }
}
