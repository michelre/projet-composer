<?php

namespace App\Controllers;

use Twig\Environment;

class FrontController
{
    private $twig;

    public function __construct($twig)
    {
        /** @var Environment $twig */
        $this->twig = $twig;
    }

    public function index()
    {
        echo $this->twig->render('index.html.twig', ['name' => 'Rémi']);
    }
}