<?php

namespace App\Controller;

use Minion\Application;
use Minion\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController.
 *
 * Default template controller.
 *
 * @package App\Controller
 */
class DefaultController extends Controller
{
    public function indexAction(Request $request, Application $app) {
        $name = $request->query->get('name');

        return $this->render('Default/index.html.twig', ['name' => $name]);
    }
}