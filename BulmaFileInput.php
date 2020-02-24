<?php

class BulmaFileInput extends FileInput {
    
    public function fetch() {
        $result = '<div class="file"><label class="file-label">';
        $this->addClass('file-input');        
        $result .= parent::fetch();
        $result .= '<span class="file-cta">';
        $result .= '<span class="file-icon"><i class="fas fa-upload"></i></span>';
        $result .= '<span class="file-label">'.text('bulma', 'choose_a_file').'</span>';
        $result .= '</span>';
        $result .= '</label></div>';
        return $result;
    }
    
}
