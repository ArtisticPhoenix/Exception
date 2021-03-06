<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Exception handler
 *
 * @author ArtisticPhoenix
 * @package Evo
 * @subpackage Evo
 * @link https://github.com/ArtisticPhoenix//issues
 * @version 1.0.0
 * @eJinn:buildVersion 1.0.0
 * @eJinn:buildTime 1536474220.0325
 */
class RuntimeError extends \ErrorException implements \evo\exception\EvoExceptionInterface
{

    /**
     * @var int
     */
    const ERROR_CODE = 2001;

    /**
     *
     * {@inheritDoc}
     * @see \ErrorException::__construct()
     */
    public function __construct($message = "", $code = 2001, $severity = 1, $filename = null, $lineno = null, \Exception $previous = null)
    {
        parent::__construct($message, $code, $severity, $filename, $lineno, $previous);
    }
}