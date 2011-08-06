<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Bruens\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
     public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
?>
