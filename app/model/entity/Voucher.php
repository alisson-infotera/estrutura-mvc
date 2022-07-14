<?php

namespace App\Model\Entity;

class Voucher {
  /**
   * ID do voucher
   * @var integer
   */
  private $id = 421892; 

  /**
   * Valor total do voucher
   * @var float
   */
  private $totBudget = 16378.48;

  /**
   * Taxas inclusas no voucher
   * @var float
   */
  private $taxIncludes = 233.66;

  /**
   * Tipo de documento
   * @var string
   */
  private $documentType = "Orçamento 1";

  /**
   * Nome do comprador
   * @var string
   */
  private $buyerName = "Maria Selma Caetano de Souza";

  /**
   * E-mail do comprador
   * @var string
   */
  private $buyerEmail = "selma@exuperyviagens.com.br";

  /**
   * Telefone do comprador
   * @var string
   */
  private $buyerPhone = "(13) 3394-4140";

  /**
   * Quantidade de Pessoas
   * @var integer
   */
  private $amountPeople = 2;

  /**
   * Quantidade de Malas
   * @var integer
   */
  private $amountBags = 1;

  /**
   * Peso das Bagagens
   * @var float
   */
  private $weightBags = 23.0;

  /**
   * Data de Ida
   * @var string
   */
  private $departureDate = "Qui 29/12/22 07:00";

  /**
   * Nome da acomodação
   * @var string
   */
  private $accommodationName = "BOURBON CATARATAS THERMAS ECO RESORT";

  /**
   * Endereço da acomodação
   * @var string
   */
  private $accommodationAddress = "Rodovia das cataratas KM 2.5";

  /**
   * Serviços
   * @var string
   */
  private $services = "TRASLADO AEROPORTO FOZ DO IGUAÇU / HOTEL EM FOZ DO IGUAÇU / AEROPORTO FOZ DO IGUAÇU";

  /**
   * M É T O D O S   P A R A   O B T E N Ç Ã O   D O S   A T R I B U T O S
   */

  /**
   * Método responsável por retornar o id do voucher
   * @return integer
   */
  public function getidVoucher() {
    return $this->id;
  }

  /**
   * Método responsável por retornar o VALOR TOTAL do orçamento
   * @return float
   */
  public function getTotBudget() {
    return $this->totBudget;
  }

  /**
   * Método responsável por retornar as TAXAS INCLUSAS no orçamento
   * @return float
   */
  public function getTaxIncludes() {
    return $this->taxIncludes;
  }

  /**
   * Método responsável por retornar o TIPO DE DOCUMENTO
   * @return string
   */
  public function getDocumentType() {
    return $this->documentType;
  }

  /**
   * Método responsável por retornar o NOME DO COMPRADOR
   * @return string
   */
  public function getBuyerName() {
    return $this->buyerName;
  }

  /**
   * Método responsável por retornar o E-MAIL DO COMPRADOR
   * @return string
   */
  public function getBuyerEmail() {
    return $this->buyerEmail;
  }

  /**
   * Método responsável por retornar o TELEFONE DO COMPRADOR
   * @return string
   */
  public function getBuyerPhone() {
    return $this->buyerPhone;
  }

  /**
   * Método responsável por retornar a Quantidade de Pessoas
   * @return integer
   */
  public function getAmountPeople() {
    return $this->amountPeople;
  }

  /**
   * Método responsável por retornar a Quantidade de Malas
   * @var integer
   */
  public function getAmoutBags() {
    return $this->amountBags;
  }

  /**
   * Método responsável por retornar o Peso das Bagagens
   * @return float
   */
  public function getWeightBags() {
    return $this->weightBags;
  }

  /**
   * Método responsável por retornar a DATA DE IDA 
   * @return string
   */

  public function getDepartureDate() {
    return $this->departureDate;
  }

   /**
    * Método repsonsável por retornar o NOME DA ACOMODAÇÂO
    */
  public function getAccommodationName() {
    return $this->accommodationName;
  }

  /**
   * Método responsável por retornar o ENDEREÇO DA ACOMODAÇÂO
   * @return string
   */
  public function getAccommodationAddress() {
    return $this->accommodationAddress;
  }

  /**
   * Método responsável por retornar os SERVIÇOS contratados
   * @return string
   */
  public function getServices() {
    return $this->services;
  }
}