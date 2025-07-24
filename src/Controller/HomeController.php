<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;

class HomeController
{
    public function index(ServerRequestInterface $request, array $args): void
    {
        //header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Olá, mundo!',
            'uri' => (string) $request->getUri()
        ]);
    }
}
