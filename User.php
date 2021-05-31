<?php 

class User {

    public $name;

    public $lastname;

    public $age;

    public $email;

    private $password;

    private $cart = [];

    public function __construct($_name, $_lastname, $_email, $_password){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
    }

    // aggiunge un prodotto al carrello utente 
    public function addToCart($product){
        $this->cart[] = $product;
    }

    // permette di stampare il carrello 
    public function getCart(){
        return $this->cart;
    }
}

?>