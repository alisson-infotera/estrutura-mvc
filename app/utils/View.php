<?php

namespace App\Utils;

class View {
  /**
   * Método responsável por verificar se existe o arquivo e retornar o conteúdo dele
   * @param string $viewName
   * @return string
   */
  public static function getContent($viewName) {
    $file = __DIR__."/../../resources/view/{$viewName}.html";
    return file_exists($file) ? file_get_contents($file) : '';
  }

  /**
   * Método reponsável por retornar o conteúdo renderizado da View.
   * @param string $view
   * @param array $arrVars (string/numeric)
   * @return string
   */
  public static function render($view, $arrVars = []) {
    $contentView = self::getContent($view);

    $keys = array_keys($arrVars);
    $keys = array_map(function($key) {
      return '{{'.$key.'}}';
    }, $keys);

    return str_replace($keys, array_values($arrVars), $contentView);
  }

  public static function formatPhone($phone) {
    $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
    $matches = [];
    preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
    if ($matches) {
        return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
    }

    return $phone;
  }
}