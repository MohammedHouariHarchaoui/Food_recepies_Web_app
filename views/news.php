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
    }

    .select-element:hover{
        outline-width:0px; 
    }
    
    </style>







<div class="row justify-content-center gap-4">
    <?php foreach ($news as $new){ ?>
        <a href="/news_view?id=<?=$new['id']?>">
            <div class="card-line">
                <div class="container-s ">
                    <div class="card-s">
                        <img src="/images/news/images/<?=$new['image']?>" />
                        <div style="position:relative;">
                            <div class="intro">
                                <h1 style="padding-left:5px;font-size:1.5rem;"><?=$new['titre']?></h1>
                                <div style="display:flex;flex-direction:column;justify-content:center;">
                                    <div style="margin-bottom:10px;display:flex;flex-direction:row;align-items:center;height:20px;">
                                        <!-- <p><?=$new['description']?></p> -->
                                    </div>
                                    <div style="margin-top:10px;display:flex;flex-direction:row;align-items:center;height:10px;padding-left:20px;">
                                        <span class="far fa-calendar-alt"></span>
                                        <p style="font-size:1rem;"><?=$new['created_at']?></p>
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

