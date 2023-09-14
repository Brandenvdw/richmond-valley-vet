<?php

namespace Victoria;

class Utils {

  public static function get_link($field, $default_title = "", $default_target = "_self"){
    if(!isset($field["url"]) || !$field["url"]) {
      return false;
    }

    $link["url"] = $field["url"];
    $link["title"] = isset($field["title"]) ? $field["title"] : $default_title;
    $link["target"] = (isset($field["target"]) && !!$field["target"]) ? $field["target"] : $default_target;
    return $link;
  }

  public static function get_link_attributes($field, $default_title = "", $default_target = "_self") {

    $link_data = self::get_link($field, $default_title, $default_target);
    $title = isset($link_data["title"]) ? $link_data["title"] : $default_title;
    $target = isset($link_data["target"]) ? $link_data["target"] : $default_target;

    return sprintf('href="%s" target="%s" rel="%s" title="%s"',
      esc_attr($link_data["url"]),
      esc_attr($target),
      strtolower($target) === "_blank" ? "noopener noreferrer": "",
      esc_attr(wp_strip_all_tags(strip_shortcodes($title))),
  );
  }

  public static function nl2p($string) {

    $paragraph = "";

    foreach(explode("\n", $string) as $line) {
      if(trim($line)) {
        $paragraph .= "<p>" . $line . "</p>";
      }
    }

    return $paragraph;
  }


}
