<?php
namespace Base;

require 'Extend.php';
use Extend\This;

class Base {
  public function scare() {
    return "<p><code>Scary sounds and evil sprites</code></p>";
  }

  public function way() {
    return "<p>One way, or another, we gonna catch you like a ... </p>";
  }
}

$e = new This();
echo $e->boo();

echo $e::rawr();

$b = new Base();
echo $b->scare();

echo Base::way();
?>
