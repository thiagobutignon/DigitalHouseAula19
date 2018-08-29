<?php 

    $caminhoDoArquivo = "hobbies.html";
    $recurso = fopen($caminhoDoArquivo, 'a');
    fwrite($recurso, "Hackathon <br>");
    
    for ($i = 1; $i <= 10; $i++) {
        fwrite($recurso, "$i <br>");
    }

    fclose($recurso);

    $handle = fopen($caminhoDoArquivo, "r");
    $tamanho = filesize($caminhoDoArquivo);
    $conteudo = fread($handle, $tamanho);
    echo $conteudo;
    fclose($handle);
?>