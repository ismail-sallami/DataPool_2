<?php

namespace Tyre\TyreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Ismail');

        $this->assertTrue($crawler->filter('html:contains("Hello Ismail")')->count() > 0);
    }
}
