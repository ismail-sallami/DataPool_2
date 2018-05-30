<?php

namespace Tyre\TyreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TyreTyreBundle:Default:index.html.twig');
    }
    public function searchAction(Request $request) {

         if ($request->getMethod() == 'POST') {
             $search_for = $request->get('search');
             $repositoryMap = [
                 'db' => DoctrineProductRepository::class,
                 /*'xml' => XmlProductRepository::class,*/
                 /*'json' => JsonProductRepository::class,*/
             ];
             $serviceName = $repositoryMap[$request->get('db')];
             /** @var ProductRepositoryInterface */
             $repository = $this->get($serviceName);
             $results = $repository->search($request->get('search_for'));
             return $this->render('TyreTyreBundle:Default:detail.html.twig', array('results' => $results));
         }
         return $this->render('TyreTyreBundle:Default:search.html.twig');
    }

    public function detailAction()
    {
        //forward the user to the search page when he tries to access directly to the detail page
        return $this->render('TyreTyreBundle:Default:search.html.twig');
    }
}
