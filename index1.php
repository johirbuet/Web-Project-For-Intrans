<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $myhtml = <<<EOF
                <head>
<title>My Page</title>
</head>
<body>
<p><a href="/mypage1" id="private">Hello World!</a></p>
<p><a href="/mypage2">Another Hello World!</a></p>
</body>
</html>
EOF;
        $doc = new DOMDocument();
        $doc->loadHTML($myhtml);
        $tags = $doc->getElementsByTagName('a');
        foreach ($tags as $tag) {
                echo $tag->getAttribute('href').' | '.$tag->nodeValue;
                if($tag->getAttribute('id')=="private"){
                echo 'Its private Document';}
                echo "<br />";
}
        echo "\nHello World";
        ?>
    </body>
</html>
