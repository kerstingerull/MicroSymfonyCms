<?php

namespace TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function testAction()
    {
        return new Response('test Text');
    }
}