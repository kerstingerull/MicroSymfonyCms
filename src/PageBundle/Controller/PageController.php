<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    /**
     * @param integer $page
     * @return Response
     */
    public function pageAction($page)
    {
        $link = $this->get('router')->generate('page', ['page' => $page]);

        return new Response('Page Text: ' . $page . ' - ' . $link);
    }
}