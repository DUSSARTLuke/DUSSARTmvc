<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace APP\Model;

use \PDO;
use APP\Entity\Client;
use Tools\Connexion;
/**
 * Description of GestionClientModel
 *
 * @author dussart.luke
 */
class GestionClientModel
{
  public function find(int $id) : Client{
    $unObjetPdo = Connexion::getConnexion();
    $sql = "selet * from CLIENT where id=:id";
    $ligne = $unObjetPdo->prepare($sql);
    $ligne->BindValue('id', $id, PDO::PARAM_INT);
    $ligne->execute();
    return $ligne->fetchObject(Client::class);
  }
}
