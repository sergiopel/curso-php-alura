<?php

class MinhaExcecao extends DomainException //ou Exception
{
    public function exibe()
    {
        echo "Sergio";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibe();
}