<?php 

class Computer {
    public $marca;

    public $modello;

    public $processore;

    public $GB_ram;

    public $GB_storage;

    public function __construct($_marca, $_modello, $_processore, $_GB_ram, $_GB_storage) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->processore = $_processore;
        $this->GB_ram = $_GB_ram;
        $this->GB_storage = $_GB_storage;
    }

    public function getInfoData() {
        return [
            'marca' => $this->marca,
            'modello' => $this->modello,
            'processore' => $this->processore,
            'GB_ram' => $this->GB_ram,
        ];
    }
}

?>