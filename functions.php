<?php
function generate_password($length, $indici_utilizzati)
{
  $caratteri_totali = [
    0 => range('a', 'z'),
    1 => range('A', 'Z'),
    2   => range(0, 9),
    3   => str_split('!@#$%^&*()-_=+[]{}<>?/|~'),
  ];

  $caratteri = array_intersect_key($caratteri_totali, array_flip($indici_utilizzati));

  $password = '';
  $contatore = 0;

  while ($contatore < $length) {
    $tipi_disponibili = array_keys($caratteri);
    $scelta_tipologia = $tipi_disponibili[array_rand($tipi_disponibili)];
    $caratteri_categoria = $caratteri[$scelta_tipologia];
    $scelta_indice = rand(0, count($caratteri_categoria) - 1);
    $scelta_carattere = $caratteri_categoria[$scelta_indice];
    $password .= $scelta_carattere;
    $contatore++;
  }
  return $password;
}
