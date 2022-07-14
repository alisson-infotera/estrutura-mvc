<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__."/app/controller/templates/Template.php";
require __DIR__.'/app/controller/templates/Voucher.php';
require __DIR__.'/app/utils/View.php';
require __DIR__.'/app/model/entity/Voucher.php';

use App\Controller\Templates\VoucherTemplate;

echo VoucherTemplate::getVoucherTemplate();