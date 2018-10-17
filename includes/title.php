<header class="title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $fileList = get_included_files();
                $topMost = $fileList[0];
                if ($topMost == __FILE__) {
                    echo '<h1>Página não encontrada</h1>';
                } else {
                    if (strpos($topMost, 'index.php') !== false) {
                        echo "<h1>Professor</h1>
                        <h2>EnsinamentoFodones</h2>";
                    } elseif (strpos($topMost, 'materias-direito.php')) {
                        echo "<h1>Direito</h1>
                        <h2>Matérias Abordadas</h2>";
                    } elseif (strpos($topMost, 'materias-engenharia.php')) {
                        echo "<h1>Engenharia</h1>
                        <h2>Matérias Abordadas</h2>";
                    } elseif (strpos($topMost, 'materias-programacao.php')) {
                        echo "<h1>Programação</h1>
                        <h2>Matérias Abordadas</h2>";
                    }
                }

                ?>
            </div>
        </div>
    </div>
</header>