<?php

$arquivo = new SplFileObject('arquivo.txt','a');

$arquivo->fwrite('Olá Mundo' . PHP_EOL);