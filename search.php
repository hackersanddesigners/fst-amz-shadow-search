<?php

$category = array_key_exists('category', $_POST) ? $_POST['category'] : 11332;
$keywords = array_key_exists('keywords', $_POST) ? $_POST['keywords'] : 'feminism';
$k = array_key_exists('k', $_POST) ? $_POST['k'] : 'feminism';

$baseSearchUrl = 'https://www.amazon.com/s?k=' . $k. '* ';

$query = $baseSearchUrl . $keywords;
$query .= "&rh=n:$category";

header('Location: ' . $query);
