<?php use app\core\form\Form; ?>



<div class="d-flex justify-content-center align-items-center " style="min-height:80vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Add user</h1>
        <?php $form = Form::begin("",'post'); ?>
        <?php echo $form->field($model,'firstname',"") ?>
        <?php echo $form->field($model,'lastname',"") ?>
        <?php echo $form->field($model,'email',"")?>
        <?php echo $form->field($model,'date_naissance',"AAAA-MM-DD")?>
        <?php echo $form->field($model,'sexe',"");?>
        <?php echo $form->field($model,'password',"")->passwordField() ?>
        <?php echo $form->field($model,'confirmPassword',"")->passwordField() ?>
        <button class="btn btn-success">Register</button>
        <a class="btn btn-danger" href="/admin/users">cancel</a>
        <?php echo Form::end(); ?>
    </div>
</div>