<?php
namespace Core\HTML;
class BootstrapForm extends Form{

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<div class=\"Aligne\">{$html}</div>";
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = [], $messageError = null){
        $type = isset($options['type']) ? $options['type'] : 'text';
        if($type === 'textarea'){
            $input = '<div class="Aligne">
                        <textarea name="' . $name . '" placeholder="' . $label . '" class="font20 policeCHAKRA">' . $this->getValue($name) . '</textarea>
                        <p class="policeCHAKRA font16">' . $messageError . '</p>
                    </div>';
        }
        else{
            $input = '<div class="Aligne">
                        <input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $label . '" class="policeCHAKRA font20" step="any">
                        <p class="policeCHAKRA font16">' . $messageError . '</p>
                     </div>';
        }
        return $input;
    }

    public function select($name, $label, $options){
        $label = '<label class="CHAKRAMedium font20">' . $label . '</label>';
        $input = '<select class="policeCHAKRA font20" name="' . $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option class=\"policeCHAKRA font20\" value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}