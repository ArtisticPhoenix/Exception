<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Exception thrown if a callback refers to an undefined function or if some arguments are
 * missing.
 * 
 * @author ArtisticPhoenix
 * @package Evo
 * @subpackage Evo
 * @link https://github.com/ArtisticPhoenix/eJinn/issues
 * @version 2.0.0
 * @license GPL-3.0
 * @eJinn:buildVersion 2.0.0
 * @eJinn:buildTime 1726078982.2638
 */
class BadFunctionCallException extends \BadFunctionCallException implements EvoExceptionInterface
{

    /**
     * For easier access to the error code
     * @var int
     */
    const int ERROR_CODE = 900;

    /**
     *
     * {@inheritDoc}
     * @see \BadFunctionCallException::__construct()
     */
    public function __construct($message = "", $code = 900, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}