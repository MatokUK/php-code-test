<?php

namespace Matok\BookApi\Converter;

/**
 * Converts JSON into XML
 */
class XmlConverter implements ConverterInterface
{
    public function convert(string $input): string
    {
        $json = json_decode($input);

        $XMLWriter = new \XMLWriter();
        $XMLWriter->openMemory();

        foreach ($json as $result) {
            $XMLWriter->startElement('book');
            $XMLWriter->writeElement('title', $result->book->title);
            $XMLWriter->writeElement('author', $result->book->author);
            $XMLWriter->writeElement('isbn', $result->book->isbn);
            $XMLWriter->writeElement('quantity', $result->stock->level);
            $XMLWriter->writeElement('price', $result->stock->price);
            $XMLWriter->endElement();
        }

        return $XMLWriter->outputMemory();
    }
}