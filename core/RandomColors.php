
<?php

class RandomColors {

  private static $colors;

  static function addColors($colors) {
    self::$colors = $colors;
  }

  static function getColor(): string {
    return self::$colors[rand(0, count(self::$colors) - 1)];
  }
}
