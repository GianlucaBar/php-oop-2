<?php 

require_once __DIR__ . '/Computer.php';

class DesktopGaming extends Computer {
    public $Scheda_Video;

    public $rgb;

    // override
    public function getInfoData() {   
        $ext_data = parent::getInfoData();
        $ext_data['Scheda_video'] = $this->Scheda_Video;        
        
        return $ext_data;
    }
}

?>