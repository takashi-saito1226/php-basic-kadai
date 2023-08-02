<body>
    <p>
    <?php
class Food {
    private $name,
            $price;

            public function construct($name,$price) {
                $this->name=$name;
                $this->price=$price;
           }
        
           public function show_price(){
            return $this->price;
        }

}

?>
<?php
class Animal {
    private $name,
            $height,
            $weight;

            public function __construct($name,$height,$weight){
                $this->name=$name;
                $this->height=$height;
                $this->weight=$weight;
            }
            public function show_height(){
                 return $this->height;
            }
}

public function __construct($name,$height,$weight){
    $this->name=$name;
    $this->height=$height;
    $this->weight=$weight;
}
public function show_height(){
     return $this->height;
}

?>
    </p>
</body>

</html>