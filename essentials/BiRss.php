<?php
  $url = "https://arma3.com/loadDev?feed=atom";
  $feed = simplexml_load_file($url);
  $limit = 3;
  $x = 1;

  //echo '<pre>', print_r($feed, true), '</pre>';

  foreach ($feed->entry as $item) {
    if ($x <= $limit) {
      $title = $item->title;
      $url = $item->id;
      $content = $item->summary[0][0];
      $author = $item->author->name;
      $date = $item->updated;
      $date = substr($date, 0,10);
      $date = date("d.m.Y", strtotime($date));
      //$date = date_format($date,"Y/m/d H:i:s");
      echo "
      <div class='feedElement'>
        <a href='$url'><h3>$title</h3></a>
        <p>$content</p>
        <p class ='by'>by: $author, $date</p>
      </div>
      ";
    };
    $x++;
  }
?>
