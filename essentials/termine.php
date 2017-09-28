<?php
    $html = "";
    $url = "https://forum.nato-taskforce.com/calendar/index.php?calendar-feed/&at=313-f8435bd31f8cb1434d53a0eeca618c3c03932e39";
    $xml = simplexml_load_file($url);
    for ($i=0; $i < 9; $i++) {
        $title = $xml->channel->item[$i]->title;
		    $Link = $xml->channel->item[$i]->link;
        $title = substr($title, 0, strpos($title, '('));

        if (strlen($title)> 55) {
          $titlef = $title;
          $title = substr($title, 0, 55). '...';
          $html .= "<a href='$Link' class='terminLink' data-toggle='tooltip' title='$titlef'>$title</a>";
        }
        else{
          $html .= "<a href='$Link' class='terminLink'>$title</a>";
        }
        if ($i != 8 and $title != '') {
            $html .= "<hr class = 'newsHr'/>";
        }
    }

    echo $html;
