<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function getDoctrineContainer()
    {
        return $this->getInvokeArg('bootstrap')->getResource('doctrine');
    } 

    public function indexAction()
    {
        // action body
         $doctrine = $this->getDoctrineContainer();
        $em = $doctrine->getEntityManager();
        $articles = $em->getRepository('\Application\Entity\Article')
                    ->findAll();
                    
                    print_r($articles);die;
    }


}

