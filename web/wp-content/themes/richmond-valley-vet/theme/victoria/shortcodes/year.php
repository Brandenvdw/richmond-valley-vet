<?php 

namespace Victoria\Shortcodes ;

use Victoria\Base\Thing;

class Year extends Thing {

  public function attach_hooks() {
    add_shortcode("sw_year", array($this, "sw_year"));
  }

  public function add_shortcode() {
    return date("Y");
  }

}
?>