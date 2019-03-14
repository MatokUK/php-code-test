<?php
namespace Matok\BookApi\Converter;

interface ConverterInterface
{
    /**
     * @param string $input JSON encoded string.
     * @return string Result converted in different format.
     */
    public function convert(string $input): string;
}