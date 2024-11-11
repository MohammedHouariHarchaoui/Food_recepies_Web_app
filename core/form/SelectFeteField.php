<?php


namespace app\core\form;
use app\models\Fete;

class SelectFeteField extends BaseField
{
    public function renderInput()
    {
        $fetes = new Fete();
        $fetes = $fetes->getAll();
        $options = '';
        foreach ($fetes as $fete) {
            $nom = $fete['nom'];
            $options = $options."<option>$nom</option>";
        }
        return sprintf("<div ><select class='form-control% p-5' style='width:390px;padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;' name='%s'>%s</select></div>",
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $options
        );
    }
}