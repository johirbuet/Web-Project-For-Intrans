<?php
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
$file="FILE.html";
$doc=new DOMDocument();
$doc->loadHTMLFile($file);
$tags=$doc->getElementsByTagName('a');
foreach ($tags as $tag){
    if($tag->getAttribute('title')=="private"){
            echo "<a href='".$tag->getAttribute('href')."'>".$tag->nodeValue."</a>";
            echo "&#09".$tag->getAttribute('title');
    echo "<br />";
    $name="<a href='".$tag->getAttribute('href')."' >".$tag->nodeValue."</a>";
                                                            $date=date("m/d/Y");
                                                            $privacy=$tag->getAttribute('title');
                                                            $sql='INSERT INTO file '.'(Name,Data,Privacy) '.
                                                                    'VALUES ('.$name.','.$date.','.$privacy.')';
                                                            echo $sql;
    }
        }
