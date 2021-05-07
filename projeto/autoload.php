<?php

spl_autoload_register(function(string $nomeCompletoDaClasse)
{
  $caminnhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
  $caminnhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminnhoArquivo);
  $caminnhoArquivo .= '.php';

  if (file_exists($caminnhoArquivo)
  {
    require_once $caminnhoArquivo;
  })
});