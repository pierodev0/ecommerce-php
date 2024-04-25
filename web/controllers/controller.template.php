<?php
class TemplateController
{
  public function index()
  {
    $path = self::path();
    echo blade()->run("template", compact("path"));
  }

  // Dominio del sitio
  static public function path()
  {
    if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])) {

      return "https://" . $_SERVER["SERVER_NAME"] . "/";
    } else {
      return "http://" . $_SERVER["SERVER_NAME"] . "/";
    }
  }
}
