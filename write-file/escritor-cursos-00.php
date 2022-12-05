<?php

$arquivo = fopen('cursos-php.txt', 'w');

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso, 21);

fclose($arquivo);