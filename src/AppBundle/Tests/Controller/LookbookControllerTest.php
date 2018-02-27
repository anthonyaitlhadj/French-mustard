<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LookbookControllerTest extends WebTestCase
{
    public function testLookbook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lookbook');
    }

}
