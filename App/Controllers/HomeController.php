<?php


class HomeController
{
    function __construct()
    {

    }

    // funcion para llamar la pagina que se muestra la entrar por primera vez
    function index()
    {
        require_once('Views/Home/welcome.php');
    }
}