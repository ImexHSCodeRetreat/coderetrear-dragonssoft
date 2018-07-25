<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Service\GameService;
use App\Entity\Board;

class gameVictoryTest extends WebTestCase
{ private $serv;
   

    public function setUp(){
        $client = static::createClient();
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $this->serv = new GameService($entityManager);
    }

    public function testgameVictory()
    
    {
       
         $tablero = new Board ();
         
         $positions = array(
             'x',null,'x', 
             '0','x',null,
             '0','x','x',);

         $tablero->setPositions($positions);
         var_dump($positions);
         $p = $this->serv->gameVictory($tablero);

         
        $this->assertEquals($p, array(0,4,8));
              

     
    }
}