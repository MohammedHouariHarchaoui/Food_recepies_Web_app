<?php 

$this->title = 'Acceuil';
?>


<style>



.d1 {
  width: 100%;
  height: 80vh;
  background-size: cover;
  background-position: center;
  animation: fondu 25s ease-in-out infinite both;
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
<div>
    <div class="bg-light p-5">
        <div class="row text-center d-flex justify-centent-center pb-2 mb-3" style="border-bottom: 2px solid #e74c3c;">
            <h1 class="display-4 col" style="color:#e74c3c;">Entrée</h1>
        </div>
        




        <div class="container px-4 py-5" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col card-img">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://media.soscuisine.com/images/recettes/large/2173.jpg');background-size: cover;background-position: center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>








    </div>
    <div class="bg-light p-5">
        <div class="row text-center d-flex justify-centent-center pb-2 mb-3" style="border-bottom: 2px solid #e74c3c;">
            <h1 class="display-4 col" style="color:#e74c3c;">Plats</h1>
        </div>
        



        <div class="container px-4 py-5" id="custom-cards">

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
  <div class="col card-img">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
            <small>Earth</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
            <small>3d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://media.soscuisine.com/images/recettes/large/2173.jpg');background-size: cover;background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
            <small>Pakistan</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
            <small>4d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
            <small>California</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
            <small>5d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>










    </div>
    <div class="bg-light p-5">
        <div class="row text-center d-flex justify-centent-center pb-2 mb-3" style="border-bottom: 2px solid #e74c3c;">
            <h1 class="display-4 col" style="color:#e74c3c;">Desserts</h1>
        </div>
        




        <div class="container px-4 py-5" id="custom-cards">

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
  <div class="col card-img">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
            <small>Earth</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
            <small>3d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://media.soscuisine.com/images/recettes/large/2173.jpg');background-size: cover;background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
            <small>Pakistan</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
            <small>4d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
            <small>California</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
            <small>5d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>






    </div>
    <div class="bg-light p-5">
        <div class="row text-center d-flex justify-centent-center pb-2 mb-3" style="border-bottom: 2px solid #e74c3c;">
            <h1 class="display-4 col" style="color:#e74c3c;">Boissons</h1>
        </div>
        



        <div class="container px-4 py-5" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col card-img">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://media.soscuisine.com/images/recettes/large/2173.jpg');background-size: cover;background-position: center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://img.taste.com.au/TectJLK4/taste/2016/11/rockmelon-bruschetta-with-goats-cheese-and-prosciutto-70235-1.jpeg');background-size: cover;background-position: center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container text-center my-3"> 
    <h2 class="font-weight-light">Bootstrap Multi Slide Carousel</h2> 
    <div class="row mx-auto my-auto justify-content-center"> 
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel"> 
        <div class="carousel-inner" role="listbox"> 
          <div class="carousel-item active"> 
            <div class="col-md-3"> 
              <div class="card"> 
                <div class="card-img"> 
                  <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid"> 
                </div> 
                <div class="card-img-overlay">Slide 1</div> 
              </div> 
            </div> 
          </div> 
          <div class="carousel-item"> 
            <div class="col-md-3"> 
              <div class="card"> 
                <div class="card-img"> 
                  <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid"> 
                </div> 
                <div class="card-img-overlay">Slide 2</div> 
              </div> 
            </div> 
          </div> 
          <div class="carousel-item"> 
            <div class="col-md-3"> 
              <div class="card"> 
                <div class="card-img"> 
                  <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid"> 
                </div> 
                <div class="card-img-overlay">Slide 3</div> 
              </div> 
            </div> 
          </div> 
          <div class="carousel-item"> 
            <div class="col-md-3"> 
              <div class="card"> 
                <div class="card-img"> 
                  <img src="//via.placeholder.com/500x400?text=4" class="img-fluid"> 
                </div> 
                <div class="card-img-overlay">Slide 4</div> 
              </div> 
            </div> 
          </div> 
          <div class="carousel-item"> 
            <div class="col-md-3"> 
              <div class="card"> 
                <div class="card-img"> 
                  <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid"> 
                </div> 
                <div class="card-img-overlay">Slide 5</div> 
              </div> 
            </div> 
          </div> 
          <div class="carousel-item"> 
            <div class="col-md-3"> 
              <div class="card"> 
                <div class="card-img"> 
                  <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid"> 
                </div> <div class="card-img-overlay">Slide 6</div> 
              </div> 
            </div> 
          </div> 
        </div> 
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev"> 
          <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
        </a> 
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next"> 
          <span class="carousel-control-next-icon" aria-hidden="true"></span> 
        </a> 
      </div> 
    </div> 
    <h5 class="mt-2 fw-light">advances one slide at a time</h5>
</div>







    </div>
</div>