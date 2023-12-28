<?php
 class Car{
    public $colour;
    public $model;
    public function __construct($colour, $model) {
        $this->colour = $colour;
        $this->model = $model;
     }
     public function Message(){
        return ("My Car is ".$this->model ." And colour is " .$this->colour);
     }
 }
 $Mycar=new car("black","Bwm");
 echo $Mycar->Message();

?>