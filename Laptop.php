<?php 

require_once __DIR__ . '/Computer.php';

class Laptop extends Computer {
    public $screen_resolution;

    public $keyboard_layout;

    // override
    public function getInfoData() {   
        $ext_data = parent::getInfoData();
        $ext_data['screen_resolution'] = $this->screen_resolution;
        $ext_data['keyboard_layout'] = $this->keyboard_layout;        
        
        return $ext_data;
    }
}

?>