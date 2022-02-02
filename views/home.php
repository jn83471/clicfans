<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV["TITLE"] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?= $_ENV['URL']; ?>style/css/style.css">
</head>

<body>
    
    <nav>
        <img src="<?= $_ENV['URL']; ?>style/img/icono.png" alt="Icono">
        <ul class="navbar">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"><i class="fas fa-graduation-cap"></i>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <i class="fas fa-question"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
            <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user-circle p-2"></i>Bryan zarco
                </a>
                <ul class="dropdown-menu position-absolute end-2" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                    <li><a class="dropdown-item" href="#">Mis imagenes</a></li>
                    <li><a class="dropdown-item" href="#">Cambiar de cuenta</a></li>
                    <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <main class="main-container">
        <aside class="side">
            <ul class="list">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="fas fa-broadcast-tower"></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-broadcast-tower"></i>
                        Embudos
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="far fa-envelope"></i>
                        Correos
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-users"></i>
                        Contactos
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-chart-pie"></i> 
                        Workflows
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-plug" style="transform: rotate(45deg);"></i>
                        Plugins
                    </a>
                </li>
            </ul>
            <ul class="list">
                <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="fas fa-cog"></i>
                        Api
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="far fa-copy"></i>
                        Copiar url de afiliado
                    </a>
                </li>
            </ul>
        </aside>
        <section>
            <div class="row">
                <div class="col-6 p-2">
                    <div class="card ">
                        <span class="h2 text-center text-danger mt-2"><i
                                style="font-size:5rem" class="fas fa-broadcast-tower"></i><p class="d-inline-block" style="vertical-align: middle !important;">Mis Embudos</p> </span>
                        <div class="card-body">
                            <p class="card-text text-center">Crea tus páginas, administra subdominios y mucho más.</p>
                        </div>
                        <div class="card-footer">
                            <small class="col-6 d-flex justify-content-between mx-auto">
                                <p>Funnels totales</p>
                                <p class="h5 text-danger" id="Embudos">0</p>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="card">
                        <span class="h2 text-center text-primary mt-2">
                            <i style="font-size:5rem" class="far fa-envelope"></i>
                                <p class="d-inline-block m-0" style="vertical-align: middle !important; height: 100%;">Mis Correos</p>
                            </span>
                        <div class="card-body">
                            <p class="card-text text-center">Crea tus correos, administrar información y mucho más.</p>
                        </div>
                        <div class="card-footer ">
                            <small class="col-6 d-flex justify-content-between mx-auto">
                                <p>Correos totales</p>
                                <p class="h5 text-danger" id="Correos">0</p>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="card">
                        <span style="vertical-align: middle !important;" class="h2 text-center text-warning mt-2">
                            <i style="font-size:5rem" class="fas fa-users"></i>
                                <p class="d-inline-block m-0" style="vertical-align: middle !important; height: 100%;">Mis contactos</p></span>
                        <div class="card-body">
                            <p class="card-text text-center">Tus contactos de funnels, administrar contactos, asigna
                                información.</p>
                        </div>
                        <div class="card-footer ">
                            <small class="col-6 d-flex justify-content-between mx-auto">
                                <p>Contactos totales</p>
                                <p class="h5 text-danger" id="Contactos">0</p>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="card">
                        <span style="vertical-align: middle !important;" class="h2 text-center text-success mt-2">
                            <i style="font-size:5rem" class="fas fa-chart-pie"></i> 
                                <p class="d-inline-block m-0" style="vertical-align: middle !important; height: 100%;">Mis Workflows</p>
                            </span>
                        <div class="card-body">
                            <p class="card-text text-center">Crear flujo de correos, manda correos a tus concatos y mucho
                                más.</p>
                        </div>
                        <div class="card-footer ">
                            <small class="col-6">
                                <p>Workflows totales</p>
                                <p class="h5 text-danger" id="Workflows">0</p>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    Visitas Totales: 0
                </div>
                <div class="col-6 text-center">
                    Contactos Añadidos Hoy: 0
                </div>
            </div>
        </section>
    </main>
    <aside>

    </aside>
</body>
<script src="<?= $_ENV['URL']; ?>style/js/app.js"></script>
</html>