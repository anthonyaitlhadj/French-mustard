<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConceptControllerTest extends WebTestCase
{
    public function testConcept()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/concept');
    }

}
