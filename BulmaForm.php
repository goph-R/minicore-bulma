<?php

class BulmaForm extends Form {

    protected function getInputClassMap() {
        return [
            'TextInput' => 'input',
            'PasswordInput' => 'input',
            'TextareaInput' => 'textarea',
            'CheckboxInput' => 'checkbox',
            'SubmitInput' => 'button is-link'
        ];
    }
    
    public function fetch($path = ':form/form', $params = []) {
        $inputClassMap = $this->getInputClassMap();
        foreach (array_values($this->inputs) as $input) {
            $class = get_class($input);
            if (isset($inputClassMap[$class])) {
                $input->addClass($inputClassMap[$class]);
            }
            if ($input->hasError()) {
                $input->addClass('is-danger');
            }
        }
        
        return parent::fetch($path, $params);
    }    
    
    
}
