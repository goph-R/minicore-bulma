<?php

class BulmaSelectInput extends SelectInput {
    
    public function fetch() {
        $select = parent::fetch();
        $result = '<div class="select">'.$select.'</div>';
        return $result;
    }
    
}
