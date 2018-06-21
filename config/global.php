<?php

use App\Http\Middleware\Locale; 

$c_lang = url()->current();
$l_lang='fr';
if (strpos($c_lang, url('/').'/fr/') !== false)$l_lang='fr';
if (strpos($c_lang, url('/').'/en/') !== false)$l_lang='en';

return [ 'lang_trans' => $l_lang];