<?php

namespace Deg540\DockerPHPBoilerplate;

class Calculator
{
    private string $listaActual = "";

    public function listaDeLaCompra(string $command): string
    {
        if ($this->listaActual !== "") {
            $this->listaActual = $this->listaActual . "\n";
        }

        if(str_contains($command, "añadir")){
            $commandParts = explode(" ", $command);
            $this->listaActual = $this->listaActual . $commandParts[1] . " x";

            if (sizeof($commandParts) < 3) {
                $this->listaActual = $this->listaActual . "1";
            }
            else{
                $this->listaActual = $this->listaActual . $commandParts[2];
            }
        }

        return $this->listaActual;
    }
}
