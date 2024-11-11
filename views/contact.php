

<?php
use app\core\form\Form; 
use app\core\form\TextareaField;
?>


<div class="d-flex justify-content-center align-items-center " style="height:80vh">
    <div class="col-5">
        <h1 class="display-4 mb-4 text-center">Contactez nous</h1>
        <?php $form = Form::begin('','post'); ?>
        <?php echo $form->field($model,'subject',""); ?>
        <?php echo $form->field($model,'email',""); ?>
        <?php echo new TextareaField($model,'body',""); ?>
        <button class="btn btn-success">Envoyer</button>
        <?php Form::end(); ?>
    </div>
</div>

