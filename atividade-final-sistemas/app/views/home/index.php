<?php 
    $this->view('home/cabecario');
?>
<!-- Navigation-->
<?php
            $this->view('home/menu');
        ?>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Clarence
                <span class="text-primary">Taylor</span>
            </h1>
            <div class="subheading mb-5">
                3542 Benedito · Tocantins, CO 77300 · (63)9 9585-8468 ·
                <a href="mailto:name@email.com">jpmp@email.com</a>
            </div>
            <p class="lead mb-5">Experinencia na criação de frameworks acacademico em computção, e técnico em
                informática</p>
            <div class="social-icons">
                <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experiencia</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Técnico em informática</h3>
                    <div class="subheading mb-3">Desenvolvedor</div>
                    <p>Se formou em TI pelo IFTO em nível técnico.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">2014 - Present</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Desenvolvedor Web</h3>
                    <div class="subheading mb-3">Técnico em informática</div>
                    <p>Em fase de expecialização na área de desenvolvedor</p>
                </div>

            </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Educação</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">IFTO</h3>
                    <div class="subheading mb-3">Técnico</div>
                    <div>Atualmente Cursando LCC Computação</div>
                </div>

                <!-- Skills-->
                <section class="resume-section" id="skills">
                    <div class="resume-section-content">
                        <h2 class="mb-5">Habilidades</h2>
                        <div class="subheading mb-3">Linguagens de Programação</div>
                        <ul class="list-inline dev-icons">
                            <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                            <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                            <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                            <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                            <li class="list-inline-item"><i class="fab fa-react"></i></li>
                            <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                            <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                            <li class="list-inline-item"><i class="fab fa-less"></i></li>
                            <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                            <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                            <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                            <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                        </ul>
                        <div class="subheading mb-3">Workflow</div>
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Design Responsivo
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Java, JS e PHP
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Desenvolvedor Fullstack
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>

                            </li>
                        </ul>
                    </div>
                </section>
                <hr class="m-0" />
                <!-- Interests-->
                <section class="resume-section" id="interests">
                    <div class="resume-section-content">
                        <?php 
                    $this->view('home/form');
                ?>
                    </div>
                </section>
                <hr class="m-0" />
                <!-- Awards-->
                <section class="resume-section" id="awards">
                    <div class="resume-section-content">
                        <h2 class="mb-5">Fez Parte</h2>
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                                DCE IFTO
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                                1º Semana Acadêmica do Curso de Licenciatura em Computação
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                                1
                                <sup>st</sup>
                                Presença em palestras do Perifa CODE
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                                1
                                <sup>st</sup>
                                Participação Hackathon na Campus Party
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <?php 
    $this->view('home/rodape');
?>