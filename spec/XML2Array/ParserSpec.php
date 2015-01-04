<?php

namespace spec\XML2Array;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserSpec extends ObjectBehavior
{
    function let()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
            <url>
                <loc>http://www.google.com</loc>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
            <url>
                <loc>http://www.google.com</loc>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        </urlset>';

        $this->beConstructedWith($xml);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('XML2Array\Parser');
    }

    function it_can_convert_xml_to_array()
    {
        $result = [
            'url' => [
                [
                    'loc' => 'http://www.google.com',
                    'changefreq' => 'monthly',
                    'priority' => '1',
                ],
                [
                    'loc' => 'http://www.google.com',
                    'changefreq' => 'monthly',
                    'priority' => '1',
                ],
            ]
        ];
        $this->toArray()->shouldReturn($result);
    }
}
