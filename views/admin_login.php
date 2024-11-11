<?php

use app\core\form\Form;

?>

<div class="d-flex justify-content-center align-items-center " style="height:100vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Login</h1>
        <?php $form = Form::begin('', 'post',"") ?>
        <?php echo $form->field($model, 'email',"") ?>
        <?php echo $form->field($model, 'password',"")->passwordField() ?>
        <button class="btn btn-success">Login</button>
        <?php Form::end() ?>
    </div>
</div>

   


