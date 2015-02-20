<?php

$url = 'http://www.flipkart.com/books/0143099701';

$output = file_get_contents($url);
$tags = get_meta_tags('http://www.flipkart.com/books/0143099701');

preg_match_all('/<div class="mprod-summary-title fksk-mprod-summary-title">(.*?)<\/div>/is', $output,$matching_title_data);

print "<br> |Title " .strip_tags($matching_title_data[0][0]) ;
print "<br> |Image " .$tags['og_image'];  

?>
