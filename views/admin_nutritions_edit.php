<?php use app\core\form\Form; ?>


<div class="d-flex justify-content-center align-items-center " style="min-height:100vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Edit nutrition</h1>
        <?php $form = Form::begin('', 'post') ?>
        <input type="text" name="id" value="<?=$model->id?>" style="display:none;"/>
        <?php echo $form->field($model, 'nom',"$model->nom") ?>
        <?php echo $form->field($model, 'class',"$model->class") ?>
        <?php echo $form->field($model, 'healthy',"$model->healthy") ?>
        <?php echo $form->field($model, 'saison',"$model->saison") ?>
        <?php echo $form->field($model, 'measureQuantity',"$model->measureQuantity") ?>
        <?php echo $form->field($model, 'calorie',"$model->calorie") ?>
        <?php echo $form->field($model, 'calorieReference',"$model->calorieReference") ?>
        <?php echo $form->field($model, 'glupide',"$model->glupide") ?>
        <?php echo $form->field($model, 'glupideReference',"$model->glupideReference") ?>
        <?php echo $form->field($model, 'lipide',"$model->lipide") ?>
        <?php echo $form->field($model, 'lipideReference',"$model->lipideReference") ?>
        <?php echo $form->field($model, 'protein',"$model->protein") ?>
        <?php echo $form->field($model, 'proteinReference',"$model->proteinReference") ?>
        <?php echo $form->field($model, 'miniraux',"$model->miniraux") ?>
        <?php echo $form->field($model, 'minirauxReference',"$model->minirauxReference") ?>
        <?php echo $form->field($model, 'vitamine',"$model->vitamine") ?>
        <?php echo $form->field($model, 'vitamineReference',"$model->vitamineReference") ?>
        <?php echo $form->field($model, 'image',"")->fileField() ?>
        <button class="btn btn-success">Edit</button>
        <a class="btn btn-danger" href="/admin/nutritions">cancel</a>
        <?php Form::end() ?>
    </div>
</div>