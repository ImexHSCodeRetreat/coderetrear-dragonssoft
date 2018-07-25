<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Service\GameService;

class gameVictoryTest extends WebTestCase
{ private $serv;
   

    public function setUp(){
        $client = static::createClient();
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $this->serv = new GameService($entityManager);
    }

    public function testgameVictory(Board $board)
    
    {
       
         $tablero= new Board ();
                
        $p = $this->serv->gameVictory('');
         new tablero= ('');
         $board->setPositions($positions); $board = new Board();
         $positions = array_fill(0, 9, null);
         $board->setPositions($positions);
        $this->assertEquals('Ana', $p->getName(), 'right name');
        $this->assertGreaterThan(0, $p->getId(), 'positive id');
    }
}