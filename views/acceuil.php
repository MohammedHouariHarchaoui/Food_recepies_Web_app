<?php 

$this->title = 'Acceuil';
?>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>


<style>

#myCarousel {
    margin-top: 50px;
}

@media (max-width: 768px) {
    .carousel-inner .carousel-item>div {
        display: none;
    }

    .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-start,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

@media (min-width: 768px) {

    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next,
    .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(25%) !important;
    }

    .carousel-inner .carousel-item-left.active,
    .carousel-item-prev:not(.carousel-item-end),
    .active.carousel-item-start,
    .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }

    .carousel-item-next.carousel-item-start,
    .active.carousel-item-end {
        transform: translateX(0) !important;
    }

    .carousel-inner .carousel-item-prev,
    .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }
}



.d1 {
  width: 100%;
  height: 80vh;
  background-size: cover;
  background-position: center;
  animation: fondu 25s ease-in-out infinite both;
}

.d1:hover{
  cursor: pointer;
}

@keyframes fondu {
  0% {
    background-image: url("https://img.freepik.com/free-photo/buddha-bowl-dish-with-vegetables-legumes-top-view_1150-42589.jpg?w=2000");
    background-repeat: no-repeat;
  }

  10% {
    background-image: url("https://img.freepik.com/free-photo/different-vegetables-seeds-fruits-table-healthy-diet-flat-lay-top-view_1150-42611.jpg?w=2000");
    background-repeat: no-repeat;
  }

  30% {
    background-image: url("https://s1.1zoom.me/big3/973/364057-svetik.jpg");
    background-repeat: no-repeat;
  }

  50% {
    background-image: url("https://s1.1zoom.me/big3/529/353277-admin.jpg");
    background-repeat: no-repeat;
  }

  70%{
    background-image: url("https://cloudfront.slrlounge.com/wp-content/uploads/2019/08/Food-Photography-On-Location-figandfennel_img2-SLR-Lounge-2000x1333.png");
    background-repeat: no-repeat;
  }
  90%,100%{
    background-image: url("https://img.freepik.com/free-photo/buddha-bowl-dish-with-vegetables-legumes-top-view_1150-42589.jpg?w=2000");
    background-repeat: no-repeat;
  }
}



</style>


<div className='relative'>
        <div class='pt-20'>
          <div class="d1" ></div>
        </div>
</div>




<div class="ps-5 pe-5 pt-4 mb-5">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;"><a style="color:#e74c3c;" class="text-decoration-none" href="/entrees">Entrées</a></h1>
  </div>
</div>

<div id="entrees" style="padding-bottom:30px;" class="carousel slide container " data-bs-ride="carousel">
    <div class="carousel-inner w-100">
    <?php $entreeActive = $entrees[0];
      unset($entrees[0]); ?>
        <div class="carousel-item active shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$entreeActive['image']?>">
                    <h5 class="card-title mt-3"><?=$entreeActive['nom']?></h5>
                    <h5 class="card-title"><?=$entreeActive['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$entreeActive['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$entreeActive['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php foreach ($entrees as $recette){ ?>
          <div class="carousel-item shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$recette['image']?>">
                    <h5 class="card-title mt-3"><?=$recette['nom']?></h5>
                    <h5 class="card-title"><?=$recette['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$recette['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$recette['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#entrees" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next " style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#entrees" data-bs-slide="next">
        <span   class="carousel-control-next-icon" aria-hidden="true"></span>
        <span  class="visually-hidden">Next</span>
    </button>
</div>








<div class="ps-5 pe-5 pt-4 mb-5">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;"><a style="color:#e74c3c;" class="text-decoration-none" href="/plats">Plats</a></h1>
  </div>
</div>

<div id="plats" style="padding-bottom:30px;" class="carousel slide container " data-bs-ride="carousel">
    <div class="carousel-inner w-100">
    <?php $platsActive = $plats[0];
      unset($plats[0]); ?>
        <div class="carousel-item active shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$platsActive['image']?>">
                    <h5 class="card-title mt-3"><?=$platsActive['nom']?></h5>
                    <h5 class="card-title"><?=$platsActive['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$platsActive['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$platsActive['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php foreach ($plats as $recette){ ?>
          <div class="carousel-item shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$recette['image']?>">
                    <h5 class="card-title mt-3"><?=$recette['nom']?></h5>
                    <h5 class="card-title"><?=$recette['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$recette['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$recette['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#plats" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next " style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#plats" data-bs-slide="next">
        <span   class="carousel-control-next-icon" aria-hidden="true"></span>
        <span  class="visually-hidden">Next</span>
    </button>
</div>











<div class="ps-5 pe-5 pt-4 mb-5">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;"><a style="color:#e74c3c;" class="text-decoration-none" href="/desserts">Desserts</a></h1>
  </div>
</div>

<div id="desserts" style="padding-bottom:30px;" class="carousel slide container " data-bs-ride="carousel">
    <div class="carousel-inner w-100">
    <?php $dessertActive = $desserts[0];
      unset($desserts[0]); ?>
        <div class="carousel-item active shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$dessertActive['image']?>">
                    <h5 class="card-title mt-3"><?=$dessertActive['nom']?></h5>
                    <h5 class="card-title"><?=$dessertActive['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$dessertActive['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$dessertActive['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php foreach ($desserts as $recette){ ?>
          <div class="carousel-item shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$recette['image']?>">
                    <h5 class="card-title mt-3"><?=$recette['nom']?></h5>
                    <h5 class="card-title"><?=$recette['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$recette['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$recette['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#desserts" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next " style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#desserts" data-bs-slide="next">
        <span   class="carousel-control-next-icon" aria-hidden="true"></span>
        <span  class="visually-hidden">Next</span>
    </button>
</div>















<div class="ps-5 pe-5 pt-4 mb-5">
  <div class="row text-center d-flex justify-centent-center pb-2" style="border-bottom: 2px solid #e74c3c;">
    <h1 class="display-4 col" style="color:#e74c3c;"><a style="color:#e74c3c;" class="text-decoration-none" href="/boissons">Boissons</a></h1>
  </div>
</div>

<div id="boissons" style="padding-bottom:30px;" class="carousel slide container " data-bs-ride="carousel">
    <div class="carousel-inner w-100">
    <?php $boissonActive = $boissons[0];
      unset($boissons[0]); ?>
        <div class="carousel-item active shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$boissonActive['image']?>">
                    <h5 class="card-title mt-3"><?=$boissonActive['nom']?></h5>
                    <h5 class="card-title"><?=$boissonActive['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$boissonActive['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$boissonActive['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php foreach ($boissons as $recette){ ?>
          <div class="carousel-item shadow-lg">
            <div class="col-md-3">
                <div class="card card-body">
                    <img style="height:200px;" class="img-fluid rounded-2 shadow-lg" src="/images/recettes/images/<?=$recette['image']?>">
                    <h5 class="card-title mt-3"><?=$recette['nom']?></h5>
                    <h5 class="card-title"><?=$recette['notation']?>/5<svg style="margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-award-fill" viewBox="0 0 16 16"> <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> </svg></h5>
                  <div >
                    <span class="far fa-clock"> <p style="display:inline;"><?=$recette['tempTotale']?></p></span>
                  </div>
                  <a href="/recette?id=<?=$recette['id']?>" class="btn mt-3" style="background-color:#e74c3c;color:white">Afficher plus</a>
                </div>
            </div>
          </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#boissons" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next " style="border-radius:10px;background-color:#e74c3c;color:#000;width:20px;height:50px;margin-top:150px;" type="button" data-bs-target="#boissons" data-bs-slide="next">
        <span   class="carousel-control-next-icon" aria-hidden="true"></span>
        <span  class="visually-hidden">Next</span>
    </button>
</div>







<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>











    </div>
</div>



<script>
  $('.carousel .carousel-item').each(function () {
var minPerSlide = 3;
var next = $(this).next();
if (!next.length) {
next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });
</script>




