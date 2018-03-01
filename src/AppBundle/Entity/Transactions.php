<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Products;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionsRepository")
 */
class Transactions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerName", type="string", length=255)
     */
    private $customerName;

    /**
     * @var float
     *
     * @ORM\Column(name="CardNumber", type="float")
     */
    private $cardNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="ExpirationMonth", type="integer")
     */
    private $expirationMonth;

    /**
     * @var int
     *
     * @ORM\Column(name="ExpirationYear", type="integer")
     */
    private $expirationYear;

    /**
     * @var int
     *
     * @ORM\Column(name="Cryptogram", type="integer")
     */
    private $cryptogram;

    /**
     * @var Products
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Products", inversedBy="posts")
     */
    private $products;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Transactions
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set cardNumber
     *
     * @param float $cardNumber
     *
     * @return Transactions
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return float
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set expirationMonth
     *
     * @param integer $expirationMonth
     *
     * @return Transactions
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->expirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * Get expirationMonth
     *
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * Set expirationYear
     *
     * @param integer $expirationYear
     *
     * @return Transactions
     */
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    /**
     * Get expirationYear
     *
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * Set cryptogram
     *
     * @param integer $cryptogram
     *
     * @return Transactions
     */
    public function setCryptogram($cryptogram)
    {
        $this->cryptogram = $cryptogram;

        return $this;
    }

    /**
     * Get cryptogram
     *
     * @return int
     */
    public function getCryptogram()
    {
        return $this->cryptogram;
    }

    /**
     * Set products
     *
     * @param integer $products
     *
     * @return Transactions
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     */
    public function getProducts()
    {
        return $this->products;
    }
}

