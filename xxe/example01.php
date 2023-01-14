<html><head>
    <style>
        body {font-family:arial}
        li {padding:2px}
        h1 {border-bottom: 5px solid black;margin: 15px 0px 5px 0px;
    display: inline-block;}
        </style>
</head>
<body>
<h1>Edit the file in the xxe/files/xxe.xml and refresh this page.</h1>
<p><?php 
    libxml_disable_entity_loader (false);
    $xmlfile = file_get_contents('files/xxe.xml');
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $data = simplexml_import_dom($dom);
    $xml = $data->saveXML();
    echo htmlentities($xml);
?></p>
</body>
</html>
