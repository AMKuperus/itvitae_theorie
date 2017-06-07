<?php
namespace Base;

require 'Extend.php';
require 'extendextend.php';
use Extend\This;
use Extend\Ex\Ex as X;

class Base {
  public const SAY = 'say a thing';
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
echo Base::SAY;

echo X::TRY;
?>
