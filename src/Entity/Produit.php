<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
*/
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="name cannot contain a number"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     message="name cannot contain a number"
     * )
     */
    private $duree_de_conservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDureeDeConservation(): ?int
    {
        return $this->duree_de_conservation;
    }

    public function setDureeDeConservation(int $duree_de_conservation): self
    {
        $this->duree_de_conservation = $duree_de_conservation;

        return $this;
    }
}
