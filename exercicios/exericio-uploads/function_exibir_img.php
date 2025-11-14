<?php 

function exibirImg() {
    $caminho = "uploads/";
    
    // Verifica se o diretório existe
    if (!is_dir($caminho)) {
        echo "<p>Nenhuma imagem enviada ainda.</p>";
        return;
    }

    // Usa glob() para encontrar todos os arquivos de imagem permitidos
    $imagens = glob($caminho . "*.{jpg,jpeg,png}", GLOB_BRACE);

    if (empty($imagens)) {
        echo "<p>Nenhuma imagem encontrada na galeria.</p>";
    } else {
        // Adiciona um estilo simples para a galeria
        echo "<div class='galeria'>";
        foreach ($imagens as $imagem) {
            // $imagem já contém o caminho "uploads/nomearquivo.jpg"
            echo "<img class='img-galeria' src='$imagem' alt='Imagem da Galeria'>";
        }
        echo "</div>";
    }
}

?>