<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ReverseController extends AbstractController
{
    #[Route('/reverse', name: 'reverse_me', methods: ['POST'])]
    public function reverse(Request $request): Response
    {
        // Retrieve the 'reverse_this' parameter from the request
        $reverseThis = $request->request->get("reverse_this");

        if ($reverseThis && is_string($reverseThis)) {
            // Reverse the string and return it in the response
            return new Response(strrev($reverseThis), Response::HTTP_OK, ['Content-Type' => 'text/plain']);
        } else {
            // Provide useful error message
            return new Response("The /reverse endpoint requires a POST with a 'reverse_this' parameter containing a text string.", Response::HTTP_BAD_REQUEST, ['Content-Type' => 'text/plain']);
        }
    }
}
