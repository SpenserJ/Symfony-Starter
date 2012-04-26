<?php

namespace SpenserJ\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GeneralController extends Controller
{
    /**
     * @Template
     * @Route("/")
     */
    public function indexAction()
    {
        return array();
    }
}