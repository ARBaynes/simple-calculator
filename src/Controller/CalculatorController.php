<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/calculator")
     */
    public function index()
    {
        return new Response(
            '<html></html>'
        );
    }

    /**
     * @Route("/calculator/plus")
     */
    public function plus()
    {
        return new Response(
            '<html></html>'
        );
    }

    /**
     * @Route("/calculator/minus")
     */
    public function minus()
    {
        return new Response(
            '<html></html>'
        );
    }

    /**
     * @Route("/calculator/multiply")
     */
    public function multiply()
    {
        return new Response(
            '<html></html>'
        );
    }

    /**
     * @Route("/calculator/divide")
     */
    public function divide()
    {
        return new Response(
            '<html></html>'
        );
    }

}

// create a simple calculator that can handle the following calculation types: plus,
// minus, multiplication, division.

// Your code should at least include a route to access the calculator page (e.g.
// /calculator), a controller to render the template and a very basic template for the form.

// Being a back-end position, we are not looking for a pretty web page with lots of
// Javascript and CSS - a basic layout that works and uses best practises will gain more points.