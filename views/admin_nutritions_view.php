<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
.checked {
  color: orange;
}

.link:hover {
        background-color:#000;
        color: #fff;
        transition:.3s;
    }
</style>

<body class="bg-light">


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

<div class=" d-flex mt-5" style="width:100vw">
    <div style="margin-bottom:20px;padding:20px">
        <h1 class="display-4" style="margin-bottom:20px ;font-family: 'Pacifico';font-size:3rem;color:#e74c3c"><?=$nutrition->nom?></h1>
        <img src="/images/nutritions/<?=$nutrition->image?>" style="border-radius:15px;max-height:80vh;max-width:60vw;box-shadow:5px 5px 20px black;"/>
    </div>
    <div style="width:35vw;margin-top:180px;margin-left:40px;display:flex;flex-direction:column;gap:10px;" >
        <div class="row">
            <h1 class="display-6">Classe :</h1>
            <p style="margin-left:40px;font-size:2rem"><?=$nutrition->class?></p>
        </div>
        <div class="row">
            <h1 class="display-6">Saison :</h1>
            <p style="margin-left:40px;font-size:2rem"><?=$nutrition->saison?></p>
        </div>
        <div class="row">
            <h1 class="display-6">Healthy :</h1>
            <p style="margin-left:40px;font-size:2rem"><?=$nutrition->healthy?></p>
        </div>
        <div class="row">
            <h1 class="display-6">Unite de measure :</h1>
            <p style="margin-left:40px;font-size:2rem"><?=$nutrition->measureQuantity?></p>
        </div>
        <div class="row">
            <p><?=$nutrition->created_at?></p>
        </div>
    </div> 
</div>

<div class="p-4">
    
<table class="table table-hover shadow-lg" >
            <thead>         
                <th>Calorie</th>
                <th>Vitamines</th>   
                <th>Proteins</th>
                <th>Miniraux</th>
                <th>Glupide</th>
                <th>Lipide</th> 
                <th>Cholesterol</th>    
            </thead>
            <tbody>
                <tr>
                    <td><?=$nutrition->calorie?>/<?=$nutrition->calorieReference?> Kcal</td>
                    <td><?=$nutrition->vitamine?> / <?=$nutrition->vitamineReference?></td>
                    <td><?=$nutrition->protein?> / <?=$nutrition->proteinReference?></td>
                    <td><?=$nutrition->miniraux?> / <?=$nutrition->minirauxReference?></td>
                    <td><?=$nutrition->glupide?> / <?=$nutrition->glupideReference?></td>
                    <td><?=$nutrition->lipide?> / <?=$nutrition->lipideReference?></td>
                    <td><?=$nutrition->cholesterol?> / <?=$nutrition->cholesterolReference?></td>
                </tr>
                
            </tbody>
        </table>
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