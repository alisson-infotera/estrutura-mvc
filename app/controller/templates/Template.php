<?php 
// echo "teste";
namespace App\Controller\Templates;

use \App\Utils\View;

class Template {
  /**
   * Método responsável por retornar o conteudo (View) da nossa página genérica
   * @return string
   */
  public static function getTemplate ($title, $content) {
    return View::render('templates/template', [
      "title" => $title,
      "content" => $content
    ]); 
  }
}