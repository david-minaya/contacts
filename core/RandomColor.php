
<?php

class RandomColor {

  private static $colors = ['aliceblue', 'lavender', 'lightsalmon', 'antiquewhite', 'pink'];

  static function getColor(): string {
    return self::$colors[rand(0, count(self::$colors) - 1)];
  }
}
