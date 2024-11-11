
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">


<style>
    .link:hover {
        background-color:#000;
        color: #fff;
        transition:.3s;
    }
</style>





<style>


@import url('https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@100;200&family=Encode+Sans+Semi+Expanded:wght@200&family=Poppins:wght@100;200;300;400;500;600&display=swap');

html,
tbody {
    font: 'Poppins';
    font-size: 16px;
    line-height: 1.5;
    box-sizing: border-box;
    margin: 0;
    overflow-x: hidden;
    top: 0;
    left: 0;
}

.lien-menu {
    text-decoration: none;
    color: rgba(34, 54, 69, .7);
    font-weight: 500;
}

.lien-menu:hover {
    color: #e74c3c;
}

.navbar {
    background: white;
    padding: 1rem 2rem;
    height: 0rem;
    min-height: 12vh;
}

.navbar .navbar-brand a {
    padding: 1rem 0;
    display: block;
    text-decoration: none;
}

.navbar-toggler {
    background: #e74c3c;
    border: none;
    padding: 10px 6px;
    outline: none;
}

.navbar-toggler span {
    display: block;
    width: 27px;
    height: 2px;
    border: 1px;
    background: #fff;
}

.navbar-toggler span+span {
    margin-top: 4px;
    width: 18px;
    margin-left: 4px;
}

.navbar-toggler span+span+span {
    width: 10px;
    margin-left: 8px;
}

.navbar-expand-lg .navbar-nav .nav-link {
    position: relative;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
    margin: 4px;
}

.navbar-expand-lg .navbar-nav .nav-link:hover {
    border-bottom: 4px solid #e74c3c;
}

.navbar-expand-lg .navbar-nav .nav-link.active {
    border-top: 4px solid #e74c3c;
    border-bottom: 4px solid #e74c3c;
    color: #e74c3c;
}

.navbar-nav .btn {
    background-color: #e74c3c;
    color: white;
    border: 2px solid #e74c3c;
    border-radius: 10px;
}

.navbar-nav .btn:hover {
    border: 2px solid #e74c3c;
    color: #e74c3c;
    background-color: #fff;
}

.titre-footer {
    color:  rgba(34, 54, 69, .7);
}

.icon-flex{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
}

.icon{
    margin-right: 30px;
}

.hr-vertical{
    border-right-color: lightgray;
    border-right-width: 1px;
    border-right-style: solid ;
}









.card-line{
        margin: 0px;
        padding: 0px;
        height:70vh;
        align-items:center;
        font-family:sans-serif;
        display:flex;
    }
    
    
    
    .container-s{
        display: flex;
        justify-content:center;
    }
    
    img{
        height: 300px;
        width:350px;
        border-radius:3px;
        background-position: center;
        background-size: cover;
        transition:.5s;
        object-position:center;
    }
    
    .card-s{
        height:300px;
        border-radius:5px;
        margin:20px;
        box-shadow:5px 5px 20px black;
        overflow:hidden;
    }
    
    .intro{
        height:70px;
        width:350px;
        padding:6px;
        box-sizing:border-box;
        position:absolute;
        background:rgba(0,0,0,0.5);
        color:white;
        bottom:0px;
        transition:.5s;
        border-radius:5px;
    }
    
    h1{
        margin:10px;
        font-size:40px;
    }
    
    p{
        font-size:20px;
        margin:20px;
        visibility:hidden;
        opacity:0;
        border-radius:5px;
    }
    
    .card-s:hover{
        cursor:pointer;
    }
    
    .card-s:hover .intro{
        height:220px;
        bottom:0px;
        background:rgba(0,0,0,0.5);
    }
    
    .card-s:hover p{
        opacity:1;
        visibility:visible;
    }
    
    .card-s:hover img{
        transform: scale(1.1) rotate(-3deg) ;
    }

    .checked {
  color: orange;
}




    .select-element{
        width:200px;
        height:38px;
        outline-width:0px;
        border-radius:10px;
        border-width:1px;
        padding-left:4px;
        transition:.5s;
    }

    .select-element:hover{
        outline-width:0px; 
    }
    


    </style>
</head>

<header class="header">
        <nav class="navbar navbar-expand-lg fixed-top shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand lien-menu" style="font-family: 'Pacifico';font-size:2.5rem;color:#e74c3c"
                    href="#">Recette</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="active nav-link lien-menu" aria-current="page" href="/">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/idee_recette">Idée Recette</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/healthy">Healthy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/saison">Saison</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/fete">Fete</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/nutrition">Nutrition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/recettes">Recettes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lien-menu" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto row align-items-center">
                    <li class="icons-flex">
                            <a href="/register" class="text-decoration-none">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#e74c3c"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                            <a href="/register" class="text-decoration-none">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#e74c3c"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </li>
                        <?php use app\core\Application;
                            if (Application::isGuest()): ?>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link btn" href="/login">Login</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link btn" href="/register">Register</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link btn" href="/profile">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link btn" href="/logout">
                                        <?php echo Application::$app->user->getDisplayName() ?> (Logout)
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>






<div class="container  mb-5 p-4 rounded shadow-lg" style="margin-top:100px;overflow:scroll;">
<table id="example" class="table table-striped table-hover " style="width:100%">
        <thead>
            <tr>
                <!-- <th >Id</th> -->
                <th>Nom</th>
                <th>Categorie</th>
                <th>Difficulte</th>
                <th>Temp preparation</th>
                <th>Temp cuisson</th>
                <th>Temp repos</th>
                <th>Temp totale</th>
                <th>Calorie</th>
                <th>Notation</th>
                <th>Healthy</th>
                <th>Ocasion</th>
                <th>Saison</th>
                <th>Voir plus</th>
            </tr>
        </thead>
        <tbody>
        <?php 
    foreach ($recettes as $recette) {
        ?>
            <tr>
                <!-- <th scope="row"><?php echo $recette['id'] ?></th> -->
                <td class="fs-3"><?php echo $recette['nom'] ?></td>
                <td><?php echo $recette['categorie'] ?></td>
                <td><?php echo $recette['difficulte'] ?></td>
                <td><?php echo $recette['tempPreparation'] ?></td>
                <td><?php echo $recette['tempCuisson'] ?></td>
                <td><?php echo $recette['tempRepos'] ?></td>
                <td><?php echo $recette['tempTotale'] ?></td>
                <td><?php echo $recette['estimationCalorie'] ?></td>
                <td><?php echo $recette['notation'] ?></td>
                <td><?php echo $recette['healthy'] ?></td>
                <td><?php echo $recette['fete'] ?></td>
                <td><?php echo $recette['saison'] ?></td>
                <td><a  href="/recette?id=<?=$recette['id']?>"><img style="height:120px;width:120px;border-radius:15px;" src="/images/recettes/images/<?=$recette['image']?>" /></a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <!-- <th >Id</th> -->
            <th>Nom</th>
            <th>Difficulte</th>
            <th>Temp preparation</th>
            <th>Temp cuisson</th>
            <th>Temp repos</th>
            <th>Notation</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
</div>


<footer class="py-5 mt-5  bg-light">
        <div class="container py-5">
            <div class="row border-bottom border-1">
                <div class="col-lg-4 mb-3 hr-vertical">
                    <a class="navbar-brand lien-menu" style="font-family: 'Pacifico';font-size:2.5rem;color:#e74c3c"
                        href="#">Recette</a>
                    <ul class="list-unstyled small text-muted">
                        <li>Site web destinner a la communote algerienne</li>
                        <li class="mt-4 icons-flex">
                            <a href="" class="text-decoration_none">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#e74c3c"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            </a>
                            <a href="" class="text-decoration_none">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#e74c3c"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                            <a href="" class="text-decoration_none">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#e74c3c"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 offset-lg-1 mb-3 hr-vertical">
                    <h5 class="titre-footer">Lien</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Acceuil</a></li>
                        <li class="mb-2"><a href="/news">News</a></li>
                        <li class="mb-2"><a href="/idee_recette">Idées recette</a></li>
                        <li class="mb-2"><a href="/healthy">Healthy</a></li>
                        <li class="mb-2"><a href="/saison">Saison</a></li>
                        <li class="mb-2"><a href="/fete">Fete</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mb-3 offset-1">
                    <h5 class="titre-footer">Contactez nous</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"  width="22" height="22" fill="#e74c3c"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <a href="">+213 696588062</a>
                        </li>
                        <li class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="22" height="22" viewBox="0 0 512 512">
                                <title>ionicons-v5-o</title>
                                <rect x="48" y="96" width="416" height="320" rx="40" ry="40"
                                    style="fill:none;stroke:#e74c3c;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                <polyline points="112 160 256 272 400 160"
                                    style="fill:none;stroke:#e74c3c;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            </svg>
                            <a href="">jm_harchaoui@esi.dz</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-center text-muted">© 2022 Recette, tous les droits sont réservés</p>
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script>
        $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
    </script>