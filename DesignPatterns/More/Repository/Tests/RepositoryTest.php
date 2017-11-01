<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 01.11.17
 * Time: 9:54
 */

namespace DesignPatterns\More\Repository\Tests;


use DesignPatterns\More\Repository\MemoryStorage;
use DesignPatterns\More\Repository\Post;
use DesignPatterns\More\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class RepositoryTest extends TestCase
{
    public function testCanPersistAndFindPost()
    {
        $repository = new PostRepository(new MemoryStorage());
        $post = new Post(null, 'Repository Pattern', 'Design Patterns PHP');

        $repository->save($post);

        $this->assertEquals(1,$post->getId());
        $this->assertEquals($post->getId(), $repository->findById(1)->getId());
    }
}