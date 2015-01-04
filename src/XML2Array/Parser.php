<?php

namespace XML2Array;

/**
 * Class Parser
 * @package XML2Array
 */
class Parser
{

    /**
     * @var
     */
    protected $xml;

    /**
     * @param $xml
     */
    public function __construct($xml)
    {
        $this->xml = $xml;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $xml_object = $this->convertToSimpleXmlObject();
        $data = $this->convertToArray($xml_object);
        return $data;
    }

    /**
     * @param $xml
     * @return array
     */
    private function convertToArray($xml)
    {
        $out = json_decode(json_encode((array) $xml), 1);
        return $out;
    }

    /**
     * @return \SimpleXMLElement
     */
    private function convertToSimpleXmlObject()
    {
        return simplexml_load_string($this->xml, null, LIBXML_NOCDATA);
    }
}
