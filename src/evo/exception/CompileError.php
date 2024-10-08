<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Error is thrown for some compilation errors, which formerly issued a fatal error. 
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
class CompileError extends \CompileError implements EvoExceptionInterface
{

    /**
     * For easier access to the error code
     * @var int
     */
    const int ERROR_CODE = 966;

    /**
     *
     * {@inheritDoc}
     * @see \CompileError::__construct()
     */
    public function __construct($message = "", $code = 966, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}