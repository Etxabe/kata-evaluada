<?php

namespace Deg540\DockerPHPBoilerplate;

class Calculator
{
    private string $listaActual = "";

    public function listaDeLaCompra(string $command): string
    {
        $listaActual = $this->listaActual;
        if ($listaActual !== "") {
            $listaActual = $listaActual . "\n";
        }

        if(str_contains($command, "añadir")){
            $commandParts = explode(" ", $command);
            $listaActual = $listaActual . $commandParts[1] . " x";
            if (sizeof($commandParts) < 3) {
                $listaActual = $listaActual . "1";
            }
            else{
                $listaActual = $listaActual . $commandParts[2];
            }
        }

        $this->listaActual = $listaActual;

        return $listaActual;
    }
}
