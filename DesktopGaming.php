<?php 

require_once __DIR__ . '/Computer.php';

class DesktopGaming extends Computer {
    public $scheda_video;

    public $rgb;

    // override
    public function getInfoData() {   
        $ext_data = parent::getInfoData();
        $ext_data['Scheda_video'] = $this->scheda_video;        

        return $ext_data;
    }
}

?>