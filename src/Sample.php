<?php
namespace ngyuki\Skeleton;

class Sample
{
    public static function main($argc, $argv)
    {
        return 0;
    }

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function match($p, $s)
    {
        return preg_match($p, $s);
    }

    public function xml($file)
    {
        $xml = simplexml_load_file($file);
        assert($xml instanceof \SimpleXMLElement);
    }
}
