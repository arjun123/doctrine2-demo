<?php

class Default_IndexController extends Zend_Controller_Action
{
    private $_em ;
    public function init()
    {
        $this->_em = $this->getDoctrineContainer()->getEntityManager();
    }
    public function getDoctrineContainer()
    {
        return $this->getInvokeArg('bootstrap')->getResource('doctrine');
    }

    public function indexAction()
    {
       
        $articles = $this->_em->getRepository('\Application\Entity\Article')
                    ->findAll();
        
        $this->view->article = $articles;
        
    }


}

