<?php

namespace App\Tests\Repository;

use App\Entity\Words;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
        ->get('doctrine')
        ->getManager();
    }

    public function testSearchByName()
    {
        $word = $this->entityManager
            ->getRepository(Words::class)
            ->findOneBy(['word' => 'elbow']);

        $this->assertSame('łokieć', $word->getTranslation());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}