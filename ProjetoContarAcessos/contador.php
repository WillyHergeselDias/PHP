<?php
/**
 * Função que conta o total de acessos de usuários e salva este número em um arquivo de texto
 * @param void - função sem parâmetros
 * @return int - retorna o número de total de acessos
 */
function contador(){
    //Inicialização da variável que recebe o arquivo de texto
    $arquivo = null;

    //Checando se o arquivo existe, caso verdadeiro, incrementa a variável $n e adiciona ela no arquivo de texto
  if(file_exists("contador.txt") && $_SERVER['REMOTE_PORT'] != null){
      $n = file_get_contents('contador.txt');
      $n++;
      file_put_contents("contador.txt",$n);
  }
  //Criando o arquivo de texto caso ele não exista.
  else if(file_exists("contador.txt") == false){ 
    $arquivo = fopen("contador.txt","w");
    fwrite($arquivo,$n);
  }
  //Retornando a váriavel $n
  return $n;
}
?>