<?php
declare(strict_types=1);

/** Monta parâmetros; não realiza chamadas de rede. */
function prepararConsulta(array $args): array
{
    if (($args[0] ?? '')!=='operadora') throw new InvalidArgumentException('Use operadora TELEFONE_COM_DDD.');
    $telefone=str_replace(['(',')','-',' ','.'],'',$args[1] ?? '');
    if (!preg_match('/^[0-9]{10,11}$/D',$telefone)) throw new InvalidArgumentException('Este exemplo aceita DDD e número nacional, com dez ou onze dígitos.');
    return ['operadora',['telefone'=>$telefone]];
}
