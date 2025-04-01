<?php

namespace Deg540\DockerPHPBoilerplate;

class Calculator
{

    public function listaDeLaCompra(string $command): string
    {
        $listaActual = "";
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

        return $listaActual;
    }
}
