<?php

namespace Tests\tests\Controller;

use App\Controller\HomeController;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

class HomeControllerTest extends TestCase
{
    public function testIndexReturnsValidJson()
    {
        $controller = new HomeController();

        // Captura a saída com output buffering
        ob_start();
        $controller->index(new ServerRequest('GET', '/'), []);
        $output = ob_get_clean();

        $data = json_decode($output, true);

        $this->assertIsArray($data);
        $this->assertEquals('Olá, mundo!', $data['message']);
        $this->assertEquals('/', parse_url($data['uri'], PHP_URL_PATH));
    }
}
