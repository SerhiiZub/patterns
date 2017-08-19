<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 9:55
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Handler
{
    /**
     * @var Handler|null
     */
    private $successor = null;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);

        if ($processed === null){
            if ($this->successor !== null){
                $processed = $this->successor->handle($request);
            }
        }
        return $processed;
    }

    abstract protected function processing(RequestInterface $request);
}