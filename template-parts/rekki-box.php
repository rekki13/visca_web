<h2>
<?php
$books_json = file_get_contents('http://www.viscaweb.com/developers/test-front-end/pages/step2-sportsbooks.json');
$books_data = json_decode($books_json,true);
$books = $books_data;
$sportbook = get_post_meta( get_the_ID(), '_rekki_sportbooks', true );
echo ( __('You choose the sportsbook: ')."\"". $books[$sportbook] ."\"" );

?>
</h2>