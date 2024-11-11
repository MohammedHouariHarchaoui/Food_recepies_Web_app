<?php 


namespace app\core\form;


abstract class BaseField{

    public $attribute;
    public $model;
    
    public function __construct($model,$attribute){
        $this->model = $model;
        $this->attribute = $attribute;
    }
    
    abstract public function renderInput();

    // public function __toString(){
    //     return sprintf('
    //         <div>
    //             <label>%s</label>
    //             %s
    //             <div>%s</div>
    //         </div>
    //     ',$this->model->labels()[$this->attribute],
    //     $this->renderInput(),
    //     $this->model->getFirstError($this->attribute));
    // }


    public function __toString()
    {
        return sprintf('<div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}