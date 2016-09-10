<?php 

include('./vendor/autoload.php');

use Stichoza\GoogleTranslate\TranslateClient;

$tr = new TranslateClient('en', 'id');

echo '<pre style="padding:10px; background:#ddd;">';
echo $tr->translate('Hello World!');
echo '</pre>';


echo '<pre style="padding:10px; background:#ddd;">';
print_r($tr->translate(['I can dance', 'I like trains', 'Double rainbow']));
echo '</pre>';