<?php
require 'scraperwiki.php';

$url = 'http://www.flipkart.com/myth-mithya-handbook-hindu-mythology-english/p/itmczyrpmmga4bhr?pid=9780143099703&sid=bks&query=0143099701&q=0143099701';

$output = file_get_contents($url);
$tags = get_meta_tags('http://www.flipkart.com/myth-mithya-handbook-hindu-mythology-english/p/itmczyrpmmga4bhr?pid=9780143099703&sid=bks&query=0143099701&q=0143099701');

preg_match_all('/<div class="title-wrap line fk-font-family-museo section omniture-field">(.*?)<\/div>/is', $output,$matching_title_data);

print "<br> |Title " .strip_tags($matching_title_data[0][0]) ;
print "<br> |Image " .$tags['og_image'];  

?>
