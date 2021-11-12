<?php

namespace Gentor\Etsy\Exceptions;


use Throwable;

/**
 * Class EtsyResponseException
 * @package Gentor\Etsy\Exceptions
 */
class EtsyResponseException extends \Exception
{
    /**
     * @var mixed
     */
    private $response;

    /**
     * EtsyResponseException constructor.
     * @param string $message
     * @param mixed $response
     */
    function __construct($message, $response = [], $code = 0, Throwable $previous = null)
    {
        $this->response = $response;

        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
}
