<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $client->request('GET', '/lucky');

        $this->assertResponseIsSuccessful();
        $this->assertArrayHasKey('number', \json_decode($client->getResponse()->getContent(), true));
    }
}
