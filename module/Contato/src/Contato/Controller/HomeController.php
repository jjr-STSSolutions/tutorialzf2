<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

# namespace de localizacao HomeController.php
namespace Contato\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class HomeController extends AbstractActionController
{
 
    # action index
    public function indexAction()
    {
        return new ViewModel();
    }
 
}

?>
