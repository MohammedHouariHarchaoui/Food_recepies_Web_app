<?php use app\core\form\Form;
use app\core\form\TextareaField;
use app\core\form\SelectFeteField;
use app\core\form\SelectHealthyField;
use app\core\form\SelectSaisonField; 
use app\core\form\SelectNotationField;
use app\core\form\SelectCategorieField; 
use app\core\form\SelectIngrediantClass;
use app\core\form\UniteIngrediant;
?>


<div class="d-flex justify-content-center align-items-center " style="min-height:100vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Add nutrition</h1>
        <?php $form = Form::begin('', 'post') ?>
        <?php echo $form->field($model, 'nom',"") ?>
        <?php echo new SelectIngrediantClass($model,'class',""); ?>
        <?php echo new SelectHealthyField($model,'healthy',""); ?>
        <?php echo new SelectSaisonField($model,'saison',""); ?>
        <?php echo new UniteIngrediant($model,'measureQuantity',""); ?>
        <?php echo $form->field($model, 'calorie',"Kcal") ?>
        <?php echo $form->field($model, 'calorieReference',"g") ?>
        <?php echo $form->field($model, 'glupide',"g") ?>
        <?php echo $form->field($model, 'glupideReference',"g") ?>
        <?php echo $form->field($model, 'lipide',"g") ?>
        <?php echo $form->field($model, 'lipideReference',"g") ?>
        <?php echo $form->field($model, 'miniraux',"g") ?>
        <?php echo $form->field($model, 'minirauxReference',"g") ?>
        <?php echo $form->field($model, 'protein',"g") ?>
        <?php echo $form->field($model, 'proteinReference',"g") ?>
        <?php echo $form->field($model, 'vitamine',"g") ?>
        <?php echo $form->field($model, 'vitamineReference',"g") ?>
        <?php echo $form->field($model, 'cholesterol',"g") ?>
        <?php echo $form->field($model, 'cholesterolReference',"g") ?>
        <?php echo $form->field($model, 'image',"")->fileField() ?>
        <button class="btn btn-success">Add</button>
        <a class="btn btn-danger" href="/admin/nutritions">cancel</a>
        <?php Form::end() ?>
    </div>
</div>