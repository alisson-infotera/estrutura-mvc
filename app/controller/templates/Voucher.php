<?php

namespace App\Controller\Templates;

use App\Utils\View;
use App\Model\Entity\Voucher;
use App\Controller\Templates\Template;

class VoucherTemplate extends Template {
  /**
   * Método responsável por retornar o conteúdo (view)
   * @return string
   */
  public static function getVoucherTemplate() {
    $objVoucher = new Voucher;

    $content = View::render('templates/voucher', [
      "documentType" => $objVoucher->getDocumentType(),
      "idBudget" => $objVoucher->getidVoucher(),
      "totBudget" => number_format($objVoucher->getTotBudget(), 2, ',', '.'),
      "taxIncludes" => number_format($objVoucher->getTaxIncludes(), 2, ',', '.'),
      "buyerName" => $objVoucher->getBuyerName(),
      "buyerEmail" => $objVoucher->getBuyerEmail(),
      "buyerPhone" => View::formatPhone($objVoucher->getBuyerPhone()),
      "amountPeople" => $objVoucher->getAmountPeople(),
      "amountBags" => $objVoucher->getAmoutBags(),
      "weightBags" => number_format($objVoucher->getWeightBags(), 0),
      "departureDate" => $objVoucher->getDepartureDate(),
      "backDate" => $objVoucher->getDepartureDate(),
      "accommodationName" => $objVoucher->getAccommodationName(),
      "accommodationAddress" => $objVoucher->getAccommodationAddress(),
      "services" => $objVoucher->getServices()
    ]);

    return parent::getTemplate('MVC - TESTE', $content);
  }
}