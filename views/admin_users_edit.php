<?php use app\core\form\Form; ?>

<div class="d-flex justify-content-center align-items-center " style="height:80vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Edit user</h1>
        <?php $form = Form::begin("",'post'); ?>
        <input type="text" name="id" value="<?=$model->id?>" style="display:none;"/>
        <?php echo $form->field($model,'firstname',$model->firstname) ?>
        <?php echo $form->field($model,'lastname',$model->lastname) ?>
        <?php echo $form->field($model,'email',$model->email)?>
        <button class="btn btn-success">Edit</button>
        <a class="btn btn-danger" href="/admin/users">cancel</a>
        <?php echo Form::end(); ?>
    </div>
</div>