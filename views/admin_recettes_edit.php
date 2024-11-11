<?php use app\core\form\Form; 
use app\core\form\TextareaField;?>


<div class="d-flex justify-content-center align-items-center " style="min-height:100vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Edit recette</h1>
        <?php $form = Form::begin('', 'post') ?>
        <input type="text" name="id" value="<?=$model->id?>" style="display:none;"/>
        <?php echo $form->field($model, 'nom',"$model->nom") ?>
        <?php echo $form->field($model, 'difficulte',"$model->difficulte") ?>
        <?php echo $form->field($model, 'tempPreparation',"$model->tempPreparation") ?>
        <?php echo $form->field($model, 'tempCuisson',"$model->tempCuisson") ?>
        <?php echo $form->field($model, 'tempRepos',"$model->tempRepos") ?>
        <?php echo $form->field($model, 'tempTotale',"$model->tempTotale") ?>
        <?php echo $form->field($model, 'categorie',"$model->categorie") ?>
        <?php echo $form->field($model, 'estimationCalorie',"$model->estimationCalorie") ?>
        <?php echo $form->field($model, 'notation',"$model->notation") ?>
        <?php echo $form->field($model, 'fete',"$model->fete") ?>
        <?php echo $form->field($model, 'healthy',"$model->healthy") ?>
        <?php echo $form->field($model, 'saison',"$model->saison") ?>
        <?php echo new TextareaField($model,'description',"$model->description"); ?>
        <?php echo $form->field($model, 'image',"$model->image")->fileField() ?>
        <button class="btn btn-success">Add</button>
        <a class="btn btn-danger" href="/admin/recettes">cancel</a>
        <?php Form::end() ?>
    </div>
</div>