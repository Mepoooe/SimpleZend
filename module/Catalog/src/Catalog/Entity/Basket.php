<?php

namespace Catalog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basket
 *
 * @ORM\Table(name="basket", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class Basket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_product", type="integer", nullable=true)
     */
    private $countProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var \Catalog\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Catalog\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Catalog\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Catalog\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id")
     * })
     */
    private $idProduct;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set countProduct
     *
     * @param integer $countProduct
     *
     * @return Basket
     */
    public function setCountProduct($countProduct)
    {
        $this->countProduct = $countProduct;

        return $this;
    }

    /**
     * Get countProduct
     *
     * @return integer
     */
    public function getCountProduct()
    {
        return $this->countProduct;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Basket
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set idUser
     *
     * @param \Catalog\Entity\Users $idUser
     *
     * @return Basket
     */
    public function setIdUser(\Catalog\Entity\Users $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Catalog\Entity\Users
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idProduct
     *
     * @param \Catalog\Entity\Products $idProduct
     *
     * @return Basket
     */
    public function setIdProduct(\Catalog\Entity\Products $idProduct = null)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return \Catalog\Entity\Products
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
}
