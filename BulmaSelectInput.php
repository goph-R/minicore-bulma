<?php

class BulmaSelectInput extends SelectInput {
    
    public function fetch() {
        $select = parent::fetch();
        $result = '<div class="select '.join(' ', $this->getClasses()).'">'.$select.'</div>';
        return $result;
    }
    
}
