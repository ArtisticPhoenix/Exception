<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Exception thrown when trying to write to a directory that is not writable.
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
class WritableDirException extends FilesystemException implements EvoExceptionInterface
{

    /**
     * For easier access to the error code
     * @var int
     */
    const int ERROR_CODE = 2515;

    /**
     *
     * {@inheritDoc}
     * @see FilesystemException::__construct()
     */
    public function __construct($message = "", $code = 2515, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}