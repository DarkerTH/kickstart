<?php

namespace DummyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DummyBundle\Entity\Post;

class LoadPostsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0;$i<100;$i++) {
            $post = new Post();
            $post->setTitle('kk');
            $post->setContent('kk');
            $post->setUser($this->getReference('user'));
            $post->setCreatedAt(new \DateTime());
            $manager->persist($post);
            $manager->flush();
        }
    }

    public function getOrder()
    {
        return 2;
    }
}