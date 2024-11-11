<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    
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
        background:white;
    }

    .select-element:hover{
        outline-width:0px; 
    } 
    </style>

<div style="display:flex;flex-direction:row;justify-content:right;align-items:center;padding-right:40px;padding-top:20px;gap:20px;">
<form action="" method="post">
    <select class="select-element" name="fete" >
        <?php foreach ($fetes as $fete) { ?>
            <option class="select-element"><?=$fete['nom']?></option>
        <?php } ?>
    </select>
    <input type="submit" class="btn btn-success"/>
</form>
</div>


<div class="row justify-content-center gap-4">
    <?php foreach ($recettes as $recette){ ?>
        <a href="/recette?id=<?=$recette['id']?>">
            <div class="card-line">
                <div class="container-s ">
                    <div class="card-s">
                        <img src="/images/recettes/images/<?=$recette['image']?>" />
                        <div style="position:relative;">
                            <div class="intro">
                                <h1 style="padding-left:5px;font-size:1.5rem;"><?=$recette['nom']?></h1>
                                <div style="display:flex;flex-direction:column;justify-content:center;">
                                    <div style="margin-bottom:10px;display:flex;flex-direction:row;align-items:center;height:20px;">
                                        <p><?=$recette['categorie']?></p>
                                    </div>
                                    <div style="margin-bottom:10px;display:flex;flex-direction:row;align-items:center;height:20px;padding-left:20px;">
                                        <span class="fas fa-fire-alt"></span>
                                        <p><?=$recette['estimationCalorie']?>  Kcal</p>
                                    </div>

                                    <div style="margin-bottom:10px;display:flex;flex-direction:row;align-items:center;height:20px;padding-left:20px;">
                                        <span class="far fa-clock"></span>
                                        <p><?=$recette['tempTotale']?></p>
                                    </div>
                                
                                    <!-- <p><?=$recette['notation']?></p> -->
                                    <div style="margin-bottom:10px;height:20px;padding-left:20px;">                                        
                                        <?php
                                            for ($i=0; $i < $recette['notation']; $i++) { 
                                            ?>
                                                <span class="fa fa-star checked"></span>
                                        <?php } ?>
                                        <?php
                                            for ($i=0; $i < 5-$recette['notation']; $i++) { 
                                            ?>
                                                <span class="fa fa-star"></span>
                                        <?php } ?>  
                                    </div>
                                    <div style="margin-bottom:10px;display:flex;flex-direction:row;align-items:center;height:10px;padding-left:20px;">
                                        <span class="far fa-calendar-alt"></span>
                                        <p style="font-size:1rem;"><?=$recette['created_at']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <?php } ?>
</div>

