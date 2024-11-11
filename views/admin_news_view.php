<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
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

<div class="container mt-5">


<div class="ps-5 pe-5 pt-4 mb-5">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;"><?=$news->titre?></h1>
  </div>
  <div class="row mt-5">
    <div class="col-6">
        <p><?=$news->description?></p>
        <p><?=$news->created_at?></p>
    </div>
    <div class="col-6">
        <div><img class="shadow-lg" style="height:400px;width:530px;border-radius:20px;" src="/images/news/images/<?=$news->image?>"/></div>
    </div>
  </div>
  <div class="row">
    <div class="mt-5 col-6">
        <?php foreach ($paragraphes as $key=> $paragraphe) { ?>
            <p class='mb-4'><?=$paragraphe['paragraphe'] ?></p>
        <?php } ?>
    </div>
    <div class="mt-5 col-6">
        <?php foreach ($images as $image) { ?>
            <div><img class="shadow-lg mb-4" style="height:400px;width:530px;border-radius:20px;" src="/images/news/images/<?=$image['image']?>"/></div>
        <?php } ?>
    </div>
  </div>
</div>


</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>