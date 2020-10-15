<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace APP\Controller;

use APP\Model\GestionCommandeModel;
use ReflectionClass;
use Exception;
/**
 * Description of GestionCommandeController
 *
 * @author dussart.luke
 */
class GestionCommandeController
{
  public function chercheUne(array $params)
  {
    // appel de la méthode find($id) de la classe Model adequate 
    $model = new GestionCommandeModel();
    $id = filter_var(intval($params['id']), FILTER_VALIDATE_INT);
    $uneCommande = $model->find($id);
    if ($uneCommande) {
      $r = new ReflectionClass($this);
      include_once PATH_VIEW . str_replace('Controller', 'View', $r->getShortName()) . "/uneCommande.php";
    } else {
      throw new Exception("Commande" . $id . " inconnue");
    }
  }
  
  public function chercheToutes()
  {
    // appel de la méthode findAll() de la classe Model adequate
    $model = new GestionCommandeModel();
    $commandes = $model->FindAll();
    if ($commandes) {
      $r = new ReflectionClass($this);
      include_once PATH_VIEW . str_replace('Controller', 'View', $r->getShortName()) . "/plusieursCommandes.php";
    } else {
      throw new Exception("Aucune commande à afficher");
    }
  }
}
