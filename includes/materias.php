<?php
$fileList = get_included_files();
$topMost = $fileList[0];
if ($topMost == __FILE__) {
    echo '<h1>Página não encontrada</h1>';
} else {
    if (strpos($topMost, 'materias-direito.php')) {
        echo "<section class=\"materias\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <article>
                                <header>
                                    <h2 class=\"text-center\">Direito Penal</h2>
                                    <div class=\"\">
            
                                    </div>
                                </header>
                            </article>
                        </div>
                        <div class=\"col-md-4\">
                            <article>
                                <header>
                                    <h2 class=\"text-center\">Direito Penal</h2>
                                </header>
                            </article>
                        </div>
                        <div class=\"col-md-4\">
                            <article>
                                <header>
                                    <h2 class=\"text-center\">Direito Penal</h2>
                                </header>
                            </article>
                        </div>
                    </div>
                </div>
            </section>";
    } elseif (strpos($topMost, 'materias-engenharia.php')) {
        echo "<section class=\"materias\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <article>
                                <header>
                                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#eng-civil\">
                                        <i class=\"fa fa-building-o\" aria-hidden=\"true\"></i>
                                    </button>
                                    <h2 class=\"text-center\">Engenharia Civil</h2>
                                </header>
                                <div class=\"conteudo collapse\" id=\"eng-civil\">
                                    <ul>
                                        <li>Mecânica Vetorial</li>
                                        <li>Mecânica Geral</li>
                                        <li>Hidráulica</li>
                                        <li>Fenomenos de Transportes</li>
                                        <li>Transferencia de Calor</li>
                                        <li>Estruturas Metálicas</li>
                                        <li>Concreto Armado</li>
                                        <li>Ciência dos materiais e Tecnologia</li>
                                        <li>Resistência dos materiais</li>
                                        <li>Análise estrutural</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class=\"col-md-3\">
                            <article>
                                <header>
                                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#eng-mec\">
                                        <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                    </button>
                                    <h2 class=\"text-center\">Engenharia Mecânica</h2>
                                </header>
                                <div class=\"conteudo collapse\" id=\"eng-mec\">
                                    <ul>
                                        <li>Mecanica dos Fluidos e dos sólidos</li>
                                        <li>Termodinâmica Básica e Aplicada</li>
                                        <li>Cinemática e Dinâmica dos sólidos</li>
                                        <li>Ciência dos materiais e Tecnologia</li>
                                        <li>Elementos de máquinas</li>
                                        <li>Teoria do Controle</li>
                                        <li>Mecânica Fundamental eRacional</li>
                                        <li>Soldagem, Usinagem</li>
                                        <li>Processos de fabricação</li>
                                        <li>Tratamentos Térmicos</li>
                                        <li>Tratamentos Térmicos</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class=\"col-md-3\">
                            <article>
                                <header>
                                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#adm-eco1\">
                                        <i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                                    </button>
                                    <h2 class=\"text-center\">Administração e Economia</h2>
                                </header>
                                <div class=\"conteudo collapse\" id=\"adm-eco1\">
                                    <ul>
                                        <li>Estatística I e II</li>
                                        <li>Métodos quantitativos</li>
                                        <li>Mercado de capitais</li>
                                        <li>Matemática 1</li>
                                        <li>Contabilidade 1 e 2</li>
                                        <li>Orçamento empresarial</li>
                                        <li>Pesquisa Operacional</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class=\"col-md-3\">
                            <article>
                                <header>
                                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#adm-eco2\">
                                        <i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                                    </button>
                                </header>
                                <h2 class=\"text-center\">Administração e Economia</h2>
                                <div class=\"conteudo collapse\" id=\"adm-eco2\">
                                    <ul>
                                        <li>(Cálculo, Física, Limites, Derivadas, Integrais)</li>
                                        <li>Álgebra Vetorial</li>
                                        <li>Matemática Basica e Financeira</li>
                                        <li>Calculo 1, 2, 3, 4 e Numerico</li>
                                        <li>GAAV (Geometria Analítica e Algebra Vetorial)</li>
                                        <li>CVV (Calculo de Varias Variaveis)</li>
                                        <li>Estatistica Básica e Aplicada</li>
                                        <li>Geometria analítica e álgebra linear</li>
                                        <li>Fisica 1/2/3/4 , Mecânica, Eletromagnetismo</li>
                                        <li>Elétrica, Circuitos Elétricos</li>
                                        <li>EDO (Equações Diferenciais)</li>
                                        <li>Oscilações e ondas</li>
                                        <li>Quimica Básica</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            ";
    } elseif (strpos($topMost, 'materias-programacao.php')) {
        echo "<section class=\"materias\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <article>
                                <header>
                                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#prog\">
                                        <i class=\"fa fa-bug\" aria-hidden=\"true\"></i>
                                    </button>
                                    <h2 class=\"text-center\">Programação</h2>
                                </header>
                                <div class=\"conteudo collapse\" id=\"prog\">
                                    <ul>
                                        <li>C</li>
                                        <li>C++</li>
                                        <li>Java</li>
                                        <li>Desenvolvimento Android</li>
                                        <li>HTML5, CSS3, Bootstrap, PHP</li>
                                        <li>Python</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class=\"col-md-6\">
                            <article>
                                <header>
                                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#hardware\">
                                        <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                                    </button>
                                    <h2 class=\"text-center\">Hardware</h2>
                                </header>
                                <div class=\"conteudo collapse\" id=\"hardware\">
                                    <ul>
                                        <li>Sistemas Digitais</li>
                                        <li>Redes</li>
                                        <li>Projetos com embarcados</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>";
    }
}

?>