savage-pinger
=============

Drop-in replacement for the `http://svg.sencha.io` site used by ExtJS ImageExporter

Requirements
============
* inkscape
* unix
* PHP

Usage
=====
Host the svg.php file using Apache or similar.

Test with the following command:

    curl -s 'http://YOURHOSTNAME/path/to/svg.php' --data width=300 --data height=200 --data type=image/png --data 'svg=<svg version="1.1" baseProfile="full" width="300" height="200" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="red" /><circle cx="150" cy="100" r="80" fill="green" /><text x="150" y="125" font-size="60" text-anchor="middle" fill="white">SVG</text></svg>' > /tmp/test.png

Run the following in your ExtJS application:

    Ext.draw.engine.ImageExporter.defaultUrl = '//svg.yoursite.com/path/to/svg.php';

Enjoy!
