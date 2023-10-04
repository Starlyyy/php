<?php

$tempo_fumado = 3;
$tempo_perdido_por_cigarro = 11;
$cigarros_dia = 10;
$tempo_perdido_total = 0; 
$dias_peridos = 0;


$cigarros_fumados = $cigarros_dia * 365 * $tempo_fumado;
$tempo_perdido_total = $cigarros_fumados * $tempo_perdido_por_cigarro;
$dias_perdidos = $tempo_perdido_total / 60 / 24;
$dias_perdidos = floor($dias_perdidos);

print("Você perderá $dias_perdidos dias de vida\n");

