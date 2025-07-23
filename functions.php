<?php
function generate_password($length)
{
  $caratteri = [
    0 => range('A', 'Z'),
    1 => range('a', 'z'),
    2   => range(0, 9),
    3   => str_split('!@#$%^&*()-_=+[]{}<>?/|~'),
  ];

  $password = '';
  $contatore = 0;

  while ($contatore < $length) {
    $scelta_tipologia = rand(0, 3);
    $caratteri_categoria = $caratteri[$scelta_tipologia];
    $scelta_indice = rand(0, count($caratteri_categoria) - 1);
    $scelta_carattere = $caratteri_categoria[$scelta_indice];
    $password .= $scelta_carattere;
    $contatore++;
  }
  return $password;
}
