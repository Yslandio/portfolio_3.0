<div class="d-flex flex-wrap justify-content-center">
    <h1 class="w-100 text-center fs-3 py-3">Sobre</h1>
    <div class="row g-4 align-items-stretch">
        <div class="box bg-box border border-1 border-light rounded shadow-lg p-3 d-flex flex-wrap gap-2 justify-content-center">
            <a class="btn btn-outline-warning text-uppercase" href="http://lattes.cnpq.br/2559305365009282" target="_blank">
                Currículo Lattes
            </a>
            <a class="btn btn-outline-success text-uppercase" href="" target="_blank">
                Currículo Profissional
            </a>
        </div>

        <div class="box bg-box border border-1 border-light rounded shadow-lg p-3">
            <h4 class="text-uppercase">
                <strong>Sobre Mim</strong>
            </h4>
            <p class="fs-5" style="text-align: justify;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meu nome é Yslândio de Souza Cruz e sou um programador. Destaco-me especialmente no Back-End, mas também gosto bastante do Front-End e sempre estive trabalhando em ambas as áreas nos projetos em que participei. Portanto, me considero um desenvolvedor Full Stack.
                Passei a gostar muito de programação desde meu primeiro contato com lógica de programação na faculdade. Fiquei fascinado pelas possibilidades que ela oferece. Desde então, tenho me dedicado aos estudos com o objetivo de construir uma carreira sólida como desenvolvedor.
                Atualmente, considero-me um programador júnior, com significativa experiência no desenvolvimento de sistemas WEB.
            </p>
            <p class="fs-5" style="text-align: justify;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em 2021, participei do Projeto de Oficinas 4.0 no Instituto Federal do Campus Petrolina-PE, em parceria com a Fundação FACTO, liderando uma equipe no desenvolvimento de um sistema de gestão de processos de produção cervejeira. Foi minha primeira experiência no desenvolvimento de software para a indústria, e nesse projeto, tive meu primeiro contato com tecnologias como os frameworks Bootstrap e Laravel.
            </p>
            <p class="fs-5" style="text-align: justify;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em 2022, destaco minha participação em outro projeto significativo. Liderei uma equipe de desenvolvimento e atuei como programador Full Stack na construção de um sistema para atender à demanda de um professor que lecionava a matéria de TCC da faculdade de Licenciatura em Computação. O sistema gerenciava todos os processos de documentação e interação entre professor e aluno, desde o cadastro até a geração de relatórios e documentos em PDF, abrangendo diversos requisitos essenciais. Além do sistema mencionado, desenvolvi outras aplicações menores e também atuei como freelancer.
            </p>
            <p class="fs-5" style="text-align: justify;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em 2023, prestei serviços para a empreza Re9Agência, uma startup de tecnologia de serviços de marketing e sistemas WEB. Foi minha primeira experiência no mercado de trabalho na área de programação. Nessa empresa eu desenvolvi vários sistemas, realizei manutenção e atuei como programador Full Stack. Tive ao meu lado uma equipe de programadores que contribuiram no desenvolvimento de projetos. Aprendi a lidar com APIs, gerenciamento de banco de dados e segurança, além da utilização de várias tecnologias no desenvolvimento de sistemas.
            </p>
        </div>

        <div class="box bg-box border border-1 border-light rounded shadow-lg p-3 mb-3">
            <h4 class="text-uppercase">
                <strong>Sobre Tecnologias</strong>
            </h4>

            <p class="fs-5" style="text-align: justify;">
                Tenho um certo domínio:
            </p>
            <div class="column">
                <ul class="tech-list-1">
                    <!-- Tecnologias da primeira coluna -->
                </ul>
            </div>

            <p class="fs-5" style="text-align: justify;">
                Já utilizei, mas não me aprofundei nos estudos:
            </p>
            <div class="column">
                <ul class="tech-list-2">
                    <!-- Tecnologias da segunda coluna -->
                </ul>
            </div>

            <p class="fs-5" style="text-align: justify;">
                Pretendo estudar futuramente:
            </p>
            <div class="column">
                <ul class="tech-list-3">
                    <!-- Tecnologias da terceira coluna -->
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Função para dividir as tecnologias em três colunas
        function divideTecnologias() {
            var techLists = [
                /* Primeira lista */
                ["HTML", "CSS", "JavaScript", "Jquery", "Ajax", "SQL", "PHP", "Linguagem C", "Bootstrap", "Laravel", "GitHub", "Bitbucket", "Figma", "clickup", "BR Modelo", "DataTables", "Dompdf", "LavaCharts", "API do Pagarme", "API do PagSeguro"],
                /* Segunda lista */
                ["TypeScript", "Python", "C#", "Java", "Ionic", "Angular", "Trello", "Jira"],
                /* Terceira lista */
                ["Docker", "React", "Tailwind", "Node.Js", "Flutter"]
            ];

            for (var i = 0; i < techLists.length; i++) {
                var columnNumber = i + 1;
                var columnSelector = ".tech-list-" + columnNumber;

                for (var j = 0; j < techLists[i].length; j++) {
                    $(columnSelector).append("<li>" + techLists[i][j] + "</li>");
                }
            }
        }

        divideTecnologias();
    });
</script>
