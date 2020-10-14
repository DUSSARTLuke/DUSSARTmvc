<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace APP\Controller;

use APP\Model\GestionClientModel;
use ReflectionClass;
use Exception;
/**
 * Description of GestionClientController
 *
 * @author dussart.luke
 */
class GestionClientController
{
 
  public function chercheUn(array $params) : void{
    // appel de la méthode find($id) de la classe Model adequate 
    $model = new GestionClientModel();
    $id = filter_var(intval($params['id']), FILTER_VALIDATE_INT);
    $unClient = $model->find($id);
    if($unClient){
      $r = new ReflectionClass($this);
      include_once PATH_VIEW . str_replace('Controller', 'View', $r->getShortName()) . "/unClient.php";
    } else {
      throw new Exception("Client" . $id . " inconnu");
    }
  }
}
