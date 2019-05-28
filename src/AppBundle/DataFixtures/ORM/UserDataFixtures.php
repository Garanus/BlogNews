<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class UserDataFixtures implements FixtureInterface, ContainerAwareInterface
{

    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $encoder = $this->container->get('security.password_encoder');
        $password=$encoder->encodePassword($user, '1234');
        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->container = $container;
    }


}