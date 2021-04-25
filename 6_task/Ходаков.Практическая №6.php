<?php
Class Snake {

    public $line;
    protected $pos;

    public function __construct($line) {

        $this->line = $line;
    }

    public function move($stop) {

        $this->pos = strpos($this->line, $stop, $this->pos) + strlen($stop);
    }

    public function eating($stop) {

        $start = $this->pos;
        $this->move($stop);

        for($i = $start; $i < $this->pos - strlen($stop); $i++) {

            $this->line[$i] = "*";
        }
    }
}
$step1 = new Snake(">------------------");
$step1->eating(">");

echo $step1->line;
echo "<br>";


$step2 = new Snake("*>-----------------");
$step2->eating(">");

echo $step2->line;
echo "<br>";


$step3 = new Snake("************>------");
$step3->eating(">");

echo $step3->line;
echo "<br>";


$step4 = new Snake("*****************>-");
$step4->eating(">");

echo $step4->line;
echo "<br>";
?>
