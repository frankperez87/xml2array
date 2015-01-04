# Easy XML to Array Conversion
This package allows you to easily convert a xml string to a associative array. 

### Example Usage
```php
<?php

// Load in the composer autoloader file
require 'vendor/autoload.php';

// Sample XML String
$xml = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset>
            <url>
                <loc>http://www.google.com</loc>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
            <url>
                <loc>http://www.yahoo.com</loc>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
            <url>
                <loc>http://www.bing.com</loc>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        </urlset>';


// Pass in XML String
$parser = new XML2Array\Parser($xml);

// Convert  XML to Associative Array
$output = $parser->toArray();

// Print out results
print '<pre>';
print_r($output);
print '</pre>';
```

### Example Output
```php
Array
(
    [url] => Array
        (
            [0] => Array
                (
                    [loc] => http://www.google.com
                    [changefreq] => monthly
                    [priority] => 1
                )

            [1] => Array
                (
                    [loc] => http://www.yahoo.com
                    [changefreq] => monthly
                    [priority] => 1
                )

            [2] => Array
                (
                    [loc] => http://www.bing.com
                    [changefreq] => monthly
                    [priority] => 1
                )

        )

)
```