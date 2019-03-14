<?php

namespace Matok\BookApi\Converter;

/**
 * Convert nothing...
 */
class NullConverter implements ConverterInterface
{
    public function convert(string $input): string
    {
        return $input;
    }
}