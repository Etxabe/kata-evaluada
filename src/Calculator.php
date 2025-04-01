<?php

namespace Deg540\DockerPHPBoilerplate;

class Calculator
{

    public function listaDeLaCompra(string $command): string
    {
        $listaActual = "";
        if(str_contains($command, "añadir")){
            $commandParts = explode(" ", $command);
            if (sizeof($commandParts) < 3) {
                $listaActual = $listaActual . $commandParts[1] . " x1";
            }
            else{
                $listaActual = $listaActual . $commandParts[1] . " x" . $commandParts[2];
            }
        }

        return $listaActual;
    }
}
