<?php 

require('vendor/autoload.php');

use Stichoza\GoogleTranslate\TranslateClient;

$tr = new TranslateClient('en', 'id');

$words = ['I can dance', 'I like trains', 'Double rainbow'];

echo $tr->translate('I can dance');

echo '<pre style="background:#eee; border:#ddd solid 1px; color:#999; padding:10px; margin:10px 0; display:block; clear:both;">';
print_r($tr->getResponse('I can dance'));
echo '</pre>';