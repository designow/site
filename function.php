<?php

  class MyClass {
    public $x;
    public $y;
    const pi = 3.1415926;

    public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
      echo "Был создан объект с параметрами: $x и $y";
    }
      
  function sum() {
      $sum = $this->x + $this->y;
      return $sum;
    }
      
    function getPI() {
      return self::pi; 
    }
    
}


function mail_form($group) {
    $str="<form action=\"send.php?group=".$group."\">";
    $str.="<input type=\"text\"><br>";
    $str.="<input type=\"submit\"><br>";
    $str.="</form>";
    return $str;
}

 $myobj = new MyClass(15, 17);
  echo "<br />";
  echo $myobj->x;
  echo "<br />";
  echo $myobj->y;
  echo "<br />";
  echo MyClass::pi;
  echo "<br />";
  echo $myobj->sum();
  echo "<br />";
  echo $myobj->getPI();

echo mail_form("3");
?>