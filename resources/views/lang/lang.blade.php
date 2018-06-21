<?php
$c_lang = url()->current();
if((strpos($c_lang, url('/').'/fr/') !== false)||(strpos($c_lang, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');
 $title='GROUPE MAGHREB EXPO'; 
 
 $lang='fr';
 if (strpos($c_lang, url('/').'/fr/') !== false)$lang='fr';
 if (strpos($c_lang, url('/').'/en/') !== false)$lang='en';
 