<?php use app\core\form\Form; 
use app\core\form\TextareaField;?>


<div class="d-flex justify-content-center align-items-center " style="min-height:100vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Edit news</h1>
        <?php $form = Form::begin('', 'post') ?>
        <input type="text" name="id" value="<?=$model->id?>" style="display:none;"/>
        <?php echo $form->field($model, 'titre',"$model->titre") ?>
        <?php echo new TextareaField($model,'description',"$model->description"); ?>
        <?php echo $form->field($model, 'image',"")->fileField() ?>
        <button class="btn btn-success">Edit</button>
        <a class="btn btn-danger" href="/admin/news">cancel</a>
        <?php Form::end() ?>
    </div>
</div>