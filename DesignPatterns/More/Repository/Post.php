<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 11.10.17
 * Time: 17:54
 */

namespace DesignPatterns\More\Repository;


class Post
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    public static function fromState(array $state): Post
    {
        return new self(
            $state['id'],
            $state['title'],
            $state['text']
            );
    }

    /**
     * Post constructor.
     * @param int|null $id
     * @param string $title
     * @param string $text
     */
    public function __construct($id, string $title, string $text)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}