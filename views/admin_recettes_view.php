

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
.rating {
  display: inline-block;
  position: relative;
  height: 30px;
  line-height: 30px;
  font-size: 30px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: orange;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}



.checked {
  color: orange;
}

.favori:focus{
    border-width:0px;
    outline-width:0px;
}

.link:hover {
        background-color:#000;
        color: #fff;
        transition:.3s;
    }


</style>




<ul class="bg-light shadow-lg fixed-top" style="padding:10px;display:flex;flex-direction:row;gap:30px;justify-content:center;margin-bottom:20px;">
    <a class="btn link" href="/admin/acceuil">Acceuil</a>
    <a class="btn link" href="/admin/users">Users</a>
    <a class="btn link" href="/admin/users_validation">Validation users</a>
    <a class="btn link" href="/admin/admin_users">Admins</a>
    <a class="btn link" href="/admin/recettes">Recettes</a>
    <a class="btn link" href="/admin/recettes_validation">Validation recettes</a>
    <a class="btn link" href="/admin/nutritions">Ingrediants</a>
    <a class="btn link" href="/admin/news">News</a>
    <a class="btn link" href="/admin/parametres">Parametres</a>
    <a class="btn btn-dark" href="/admin/logout">Logout</a>
</ul>


<body class="bg-light mt-5">



<?php

use app\core\Application;
?>


<div class=" d-flex" style="width:100vw">
    <div style="margin-bottom:20px;padding:20px">
        <h1 class="display-4" style="margin-bottom:20px ;font-family: 'Pacifico';font-size:3rem;color:#e74c3c"><?=$recette->nom?></h1>
        <img src="/images/recettes/images/<?=$recette->image?>" style="border-radius:15px;max-height:80vh;max-width:60vw;box-shadow:5px 5px 20px black;"/>
        <div style="margin-top:5px;margin-left:16px;width:full;display:flex;flex-direction:row;gap:100px;">
            <div class="row " >
                <h1  class="display-6">Healthy :</h1>
                <p style="margin-left:40px;font-size:2rem"><?=$recette->healthy?></p>
            </div>
            <div class="row">
                <h1  class="display-6">Saison :</h1>
                <p style="margin-left:40px;font-size:2rem"><?=$recette->saison?></p>
            </div>
        </div>
    </div>
    <div style="width:35vw;margin-top:85px;margin-left:40px;display:flex;flex-direction:column;gap:10px;" >

        <div>
            
            <div class="row " >
                <h1  class="display-6">Temp totale</h1>
                <p style="margin-left:40px;font-size:2rem"><?=$recette->tempTotale?></p>
            </div>
            <div>
                <div style="display:flex;flex-direction:row;gap:20px;">
                    <h1 style="font-size:1rem">Temp de preparation :</h1>
                    <p><?=$recette->tempPreparation?></p>
                </div>
                <div style="display:flex;flex-direction:row;gap:20px;">
                    <h1 style="font-size:1rem">Temp de cuisson :</h1>
                    <p><?=$recette->tempCuisson?></p>
                </div>
                <div style="display:flex;flex-direction:row;gap:20px;">
                    <h1 style="font-size:1rem">Temp de repos :</h1>
                    <p><?=$recette->tempRepos?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="display-6">Calories</h1>
            <p style="margin-left:40px;font-size:2rem"><?=$recette->estimationCalorie?> kcal</p>
        </div>
        <div class="row">
            <h1 class="display-6">Fete</h1>
            <p style="margin-left:40px;font-size:2rem"><?=$recette->fete?></p>
        </div>
    
        <div style="margin-left:-16px;width:full;display:flex;flex-direction:row;gap:40px;">
            <div>
                <h1 class="display-6">
                    Difficulte
                </h1>
                <p><?=$recette->difficulte?>/5</p>
                <?php
                    for ($i=0; $i < $recette->difficulte; $i++) { 
                        ?>
                            <span class="fa fa-star checked"></span>
                        <?php } ?>
                        <?php
                    for ($i=0; $i < 5-$recette->difficulte; $i++) { 
                        ?>
                            <span class="fa fa-star"></span>
                        <?php } ?>  
            </div>
            <div style="margin-left:40px;">
                <h1 class="display-6">
                Notation 
                </h1>
                <div style="display:flex;flex-direction:row;aligh-items:center;gap:10px">
                    <p><?=$recette->notation?>/5</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg>
                </div>
                <?php
                    for ($i=0; $i < $recette->notation; $i++) { 
                        ?>
                            <span class="fa fa-star checked"></span>
                        <?php } ?>
                        <?php
                    for ($i=0; $i < 5-$recette->notation; $i++) { 
                        ?>
                            <span class="fa fa-star"></span>
                        <?php } ?>  
            </div>
        </div>
        <div style="margin-left:-16px;">
            <p><?=$recette->created_at?></p>
        </div>
    </div>
</div>
<div style="margin-left:20px;margin-right:20px;">
        <h1>Description</h1>
        <p style="font-size:1.8rem;"><?=$recette->description?></p>
    </div> 
<div style="padding:20px 20px 20px 20px;">
<div style="margin-bottom:50px;" class="ps-5 pe-5 pt-4 ">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;">Les ingrédiants</h1>
  </div>
</div>
    <div style="display:flex;flex-direction:column;">
        <table class="table table-hover shadow-lg">
            <thead>
                <th>Nom</th>  
                <th>Quantitée</th>   
                <th>Saison</th>   
                <th>Healthy</th>   
                <th>Vitamines</th>   
                <th>Proteins</th>
                <th>Miniraux</th>
                <th>Glupide</th>
                <th>Lipide</th>
                <th>Voir ingrediant</th>      
            </thead>
            <tbody>
                
                    <?php
                    foreach ($ingrediants as $ingrediant) {
                        ?>
                        <tr>
                            <th><?=$ingrediant['nom']?></th>
                            <td ><?=$ingrediant['quantity']?> <?=$ingrediant['measureQuantity']?></td>
                            <td><?=$ingrediant['saison']?></td>
                            <td><?=$ingrediant['healthy']?></td>
                            <td><?=$ingrediant['vitamine']?></td>
                            <td><?=$ingrediant['protein']?></td>
                            <td><?=$ingrediant['miniraux']?></td>
                            <td><?=$ingrediant['glupide']?></td>
                            <td><?=$ingrediant['lipide']?></td>
                            <td ><a style="background-color:#e74c3c;color:white" href="/admin/nutritions/view?id=<?=$ingrediant['id']?>" class='btn text-decoration-none' >Consulte</a></td>
                        </tr>
                    <?php } ?>
                
            </tbody>
        </table>
    </div>
</div>

<div class="shadow-lg" style="padding:20px;margin-left:16px;margin-right:16px;margin-bottom:40px;border-radius:15px;">
<div class="ps-5 pe-5 mb-5">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;">Etapes</h1>
  </div>
</div>
    <ol style="display:flex;flex-direction:column;">
        <?php
            foreach ($etapes as $etape) {?>
                <li style="font-size:1.5rem">
                    <h1 style="font-size:1.2rem"><?=$etape['description']?></h1>
                    <hr/>
                </li>
            <?php }
        
        ?>
    </div>
</div>


</body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

        <script>
            $(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
        </script>