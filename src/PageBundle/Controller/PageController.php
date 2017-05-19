<?php

namespace PageBundle\Controller;

use PageBundle\Entity\Page;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PageController extends Controller
{
    /**
     * @param Page $page
     * @ParamConverter("page", class="PageBundle:Page")
     * @return Response
     */
    public function pageAction(Page $page)
    {
        $link = $this->get('router')->generate('page', ['page' => $page->getId()]);
        $canonical = $this->get('router')->generate('page', ['page' => $page->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

        $variables = [
            'pageId' => $page->getId(),
            'title' => $page->getTitle(),
            'link' => $link,
            'canonical' => $canonical
        ];

        return $this->render('@PageBundle/Ressources/views/page/layout.html.twig', $variables);
    }
}