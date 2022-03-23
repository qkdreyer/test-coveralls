<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient([], ['SERVER_ADDR' => '127.0.0.1:8000']);
        $client->request('GET', '/lucky');

        $this->assertResponseIsSuccessful();
        $this->assertArrayHasKey('number', \json_decode($client->getResponse()->getContent(), true));
    }
}
