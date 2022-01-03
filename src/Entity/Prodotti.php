<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodotti
 *
 * @ORM\Table(name="prodotti", indexes={@ORM\Index(name="FK_prodotti_tipo_prodotti", columns={"tipo_prodotto"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ProdottiRepository")
 */
class Prodotti
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="prezzo_lordo", type="float", precision=10, scale=0, nullable=false)
     */
    private $prezzoLordo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var binary
     *
     * @ORM\Column(name="imported", type="binary", nullable=false)
     */
    private $imported;

    /**
     * @var \TipoProdotti
     *
     * @ORM\ManyToOne(targetEntity="TipoProdotti")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_prodotto", referencedColumnName="id")
     * })
     */
    private $tipoProdotto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrezzoLordo(): ?float
    {
        return $this->prezzoLordo;
    }

    public function setPrezzoLordo(float $prezzoLordo): self
    {
        $this->prezzoLordo = $prezzoLordo;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescrizione(): ?string
    {
        return $this->descrizione;
    }

    public function setDescrizione(?string $descrizione): self
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    public function getImported()
    {
        return $this->imported;
    }

    public function setImported($imported): self
    {
        $this->imported = $imported;

        return $this;
    }

    public function getTipoProdotto(): ?TipoProdotti
    {
        return $this->tipoProdotto;
    }

    public function setTipoProdotto(?TipoProdotti $tipoProdotto): self
    {
        $this->tipoProdotto = $tipoProdotto;

        return $this;
    }


}
