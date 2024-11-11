<?php use app\core\form\Form;
use app\core\form\TextareaField; ?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

        <?php 

$data = array();
foreach ($nutritions as $nutrition) {
    $data[]= array(
        'label'=>$nutrition['nom'],
    );
}

?>



        
<script>

    

$(document).ready(function(){
    $("#add_ingrediant").click(function(){
        if(nb_ingrediant<=max){
            const node = document.getElementById("clone");
            const clone = node.cloneNode(true);
            console.log(clone);
            $("#table_ingrediants").append(clone);
            nb_ingrediant++;
        }
    });

    $("#table_ingrediants").on('click','#remove_ingrediant',function(){
        $(this).closest('tr').remove();
        nb_ingrediant--;
    });


    

    var nb_ingrediant = 1;
    var max = 50;
    var html = '<tr><td><input class="form-control" text="text" name="Nom_ingrediant[]" ></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="remove"></td></tr>';



})

</script>




<script>

    $(document).ready(function(){
        $("#add").click(function(){
            if(x<=max){
                $("#table_field").append(html);
                x++;
            }
        });

        $("#table_field").on('click','#remove',function(){
            $(this).closest('tr').remove();
            x--;
        });
        var x = 1;
        var max = 25;
        var html = '<tr><td><textarea class="form-control" text="text" name="etapes[]" ></textarea></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="remove"></td></tr>';
    })

</script>

<div class="d-flex justify-content-center align-items-center " style="min-height:100vh">
    <div class="col-4">
        <h1 class="display-4 mb-4 text-center">Add recette</h1>
        <?php $form = Form::begin('', 'post') ?>
        <?php echo $form->field($model, 'nom',"") ?>
        <?php echo $form->field($model, 'difficulte',"") ?>
        <?php echo $form->field($model, 'tempPreparation',"") ?>
        <?php echo $form->field($model, 'tempCuisson',"") ?>
        <?php echo $form->field($model, 'tempRepos',"") ?>
        <?php echo $form->field($model, 'tempTotale',"") ?>
        <?php echo $form->field($model, 'estimationCalorie',"") ?>
        <?php echo $form->field($model, 'categorie',"") ?>
        <?php echo $form->field($model, 'notation',"") ?>
        <?php echo $form->field($model, 'fete',"") ?>
        <?php echo $form->field($model, 'healthy',"") ?>
        <?php echo $form->field($model, 'saison',"") ?>
        <?php echo new TextareaField($model,'description',""); ?>
        <?php echo $form->field($model, 'image',"")->fileField() ?>



    <div class="input-field">
        <table class="table table-bordered rounded " id="table_field">
            <tr>
                <th>Les etapes</th>
                <th>Add or remove</th>
            </tr>
            <tr>
                <td><textarea class="form-control" text="text" name="etapes[]"></textarea></td>
                <td><input class="btn btn-warning" type="button" name="add" id="add" value="add"></td>
            </tr>
        </table>
    </div>

    <div class="input-field">
        <table class="table table-bordered" id="table_ingrediants">
            <tr>
                <th>Nom ingrediant</th>
                <th>Quantity</th>
                <th>Add or remove</th>
            </tr>
            <tr id="clone">
                <td>
                    <select class="form-select" id="select1" name="ingrediants[]">
                        <?php
                            foreach ($data as $ingrediant) {
                                echo "<option>".$ingrediant['label']."</option>";
                            }
                        ?>
                    </select>
                </td>
                <td><input class="form-control" text="text" name="quantitys[]" ></td>
                <td><input class="btn btn-danger" type="button" name="remove" id="remove_ingrediant" value="remove"></td>
            </tr>
        </table>
        <center>

            <td><input class="btn btn-warning" type="button" name="add" id="add_ingrediant" value="add"></td>
        </center>
    </div>


        <button class="btn btn-success">Add</button>
        <a class="btn btn-danger" href="/admin/recettes">cancel</a>
        <?php Form::end() ?>
    </div>
</div>