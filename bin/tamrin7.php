<?php
class Entree
{
    public $name;
    public $ingredients;

    public function __construct($name, $ingredients)
    {
        $this->name = $name;

        if (!is_array($ingredients)) {
            $ingredients = [$ingredients];
        }

        $this->ingredients = $ingredients;
    }

    function hasIngredient($ing)
    {
        return in_array($ing, $this->ingredients);
    }
    
}

try {
    $drink = new Entree('class of milk', ['milk']);
} catch (Exception $e) {
    print "couldent create the drink :" . $e->getMessage();
}

$soup = new Entree('noshabe', ['sibzemini']);
$sandwich = new Entree('khiar', ['goge']);

$soup->name = 'chicken soup';
$soup->ingredients = ['chicken', 'water'];

foreach (['chicken', 'lemon'] as $ing) {
    if ($soup->hasIngredient($ing)) {
        print "Soup contains $ing.\n";
    }
}
?>
<!-- >>>>>>> b7fd065751ed0059d791f3b2dc7cc73e67edad85:bin/tamrin7.php -->
