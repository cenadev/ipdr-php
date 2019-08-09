<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEMA DE CADASTRO IPDR</title>

    <link rel="stylesheet" href="<?php echo (BASE_URL); ?>/assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo (BASE_URL); ?>/assets/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo (BASE_URL); ?>/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/home">IPDR</a>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <?php //COLOCAR AQUI O NOME DO USUARIO QUE ESTA ACESSANDO NO MOMENTO ?>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-home" href="<?php echo (BASE_URL); ?>/home">
                        <span data-feather="home"></span>
                        Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-members" href="<?php echo (BASE_URL); ?>/membros">
                        <span data-feather="file"></span>
                        Membros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-users" href="<?php echo (BASE_URL); ?>/usuarios">
                        <span data-feather="shopping-cart"></span>
                        Usuários
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="nav-link-about" href="<?php echo (BASE_URL); ?>/about">
                        <span data-feather="layers"></span>
                        Sobre
                    </a>
                </li>
            </ul>


        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?php echo (ucfirst($viewName)); ?></h1>

                </div>
                <?php
                //MÉTODO DE CARREGAMENTO DA PÁGINA ATUAL
                $this->loadView($viewName, $viewData);
                ?>


            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo (BASE_URL); ?>/assets/js/index.js"></script>
</body>

</html>