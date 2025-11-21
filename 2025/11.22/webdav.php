<?php
function webdav($api,$name,$pwd,$dir,$parse = 0) {
    if ($parse == 1) {
        $ci = curl_init();
        curl_setopt($ci, CURLOPT_URL, $api . $dir);
        curl_setopt($ci, CURLOPT_USERPWD, "$name:$pwd");
        curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ci, CURLOPT_HEADER, true);
        curl_setopt($ci, CURLOPT_NOBODY, true);
        curl_setopt($ci, CURLOPT_CUSTOMREQUEST, 'GET');
        $response = curl_exec($ci);
        $url = curl_getinfo($ci, CURLINFO_EFFECTIVE_URL);
        $httpCode = curl_getinfo($ci, CURLINFO_HTTP_CODE);
        curl_close($ci);
        return $url;
    } else {
        $context = stream_context_create(['http' => [
            'method' => 'PROPFIND',
            'header' => implode("\r\n", ["Authorization: Basic " . base64_encode("$name:$pwd"),'Depth: 1','Content-Type: text/xml; charset="utf-8"']),
            'content' => '<?xml version="1.0"?><propfind xmlns="DAV:"><prop><getcontentlength/></prop></propfind>'
        ]]);
        $dom = new DOMDocument();
        $response = file_get_contents($api . $dir, false, $context);
        $dom->loadXML($response);
        $files = [];
        foreach ($dom->getElementsByTagName('response') as $response) {
            $prop = $response->getElementsByTagName('prop')->item(0);
            $files[] = [
                'path' => $response->getElementsByTagName('href')->item(0)->nodeValue,
                'size' => $prop->getElementsByTagName('getcontentlength')->item(0)->nodeValue ?? 0
            ];
        }
        return $files;
    }
}



