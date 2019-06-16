<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// Handle a request and create a response;
// Create and handle forms;
// Bind parameters;
// Get and set session objects;
// Redirects.

class CalculatorController extends AbstractController
{
    /**
     * @Route("/calculator")
     */
    public function index()
    {

    }

    /**
     * @Route("/calculator/plus")
     */
    public function plus()
    {

    }

    /**
     * @Route("/calculator/minus")
     */
    public function minus()
    {

    }

    /**
     * @Route("/calculator/multiply")
     */
    public function multiply()
    {

    }

    /**
     * @Route("/calculator/divide")
     */
    public function divide()
    {

    }

}

// create a simple calculator that can handle the following calculation types: plus,
// minus, multiplication, division.

// Your code should at least include a route to access the calculator page (e.g.
// /calculator), a controller to render the template and a very basic template for the form.

// Being a back-end position, we are not looking for a pretty web page with lots of
// Javascript and CSS - a basic layout that works and uses best practises will gain more points.