
<div class="container">


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