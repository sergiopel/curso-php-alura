<?php

//trait - pega um codigo e injeta em outras classes

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    // esse é um método mágico que devolve o nome do atributo
    // terá lógica para mostrar o método do get Atributo
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}