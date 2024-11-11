<?php


namespace app\core\form;
use app\models\Healthy;

class SelectHealthyField extends BaseField
{
    public function renderInput()
    {
        $healthy = new Healthy();
        $healthy = $healthy->getAll();
        $options = '';
        foreach ($healthy as $health) {
            $nom = $health['nom'];
            $options = $options."<option>$nom</option>";
        }
        return sprintf("<div ><select class='form-control% p-5' style='width:390px;padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;' name='%s'>%s</select></div>",
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $options
        );
    }
}