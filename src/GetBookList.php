<?php

namespace Matok\BookApi;

use Matok\BookApi\Converter\ConverterInterface;

class GetBookList
{
	/** @var ConverterInterface */
	private $converter;

	/** @var array */
	private $filter;

	public function __construct(ConverterInterface $converter)
	{
	    $this->converter = $converter;
	    $this->filter = [];
	}

	public function filter(string $name, string $value): self
    {
        $this->filter[$name] = $value;

        return $this;
    }

	public function getBooks(int $limit = 10)
	{
        $output = $this->call("http://api.book-seller-example.com/" . $this->createFilter() . '&limit=' . $limit . '&format=json');

        return $this->converter->convert($output);
	}

	private function createFilter(): string
    {
        $filterFields = [];

        foreach ($this->filter as $name => $value) {
            $filterFields[] = $name.'='.$value;
        }

        return implode('&', $filterFields);
    }

	private function call(string $url): string
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curl);
        curl_close($curl);

        return $output;
    }
}
