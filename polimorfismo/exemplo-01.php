<?php

abstract class Animal {
    
    public function falar()
    {
        return "som";
    }

    public function mover()
    {
        return "caminha";
    }

}


class Cachorro extends Animal {

    // Usa o mesmo método da classe Mãe mas tem outro valor
    public function falar()
    {
        return "late";
    }

}

class Gato extends Animal {

    // Usa o mesmo método da classe Mãe mas tem outro valor
    public function falar()
    {
        return "mia";
    }

}

class Passaro extends Animal {

    // Usa o mesmo método da classe Pai mas tem outro valor
    public function falar()
    {
        return "canta";
    }

    public function mover()
    {
        return "Voa e " . parent::mover();
    }

}

$cao = new Cachorro();
echo $cao->falar() . "<br />";
echo $cao->mover() . "<br />";

echo "------------------------<br />";

$cat = new Gato();
echo $cat->falar() . "<br />";
echo $cat->mover() . "<br />";

echo "------------------------<br />";

$bird = new Passaro();
echo $bird->falar() . "<br />";
echo $bird->mover() . "<br />";

?>