<?php

namespace App\Entity;

use App\Repository\NuiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NuiteRepository::class)
 */
class Nuite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", name="datenuitee")
     */
    private $dateNuitee;

    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class, inversedBy="nuites")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\Column(name="idhotel")
     */
    private $hotel;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieChambre::class)
     * @ORM\Column(name="idcategorie")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Inscription::class, inversedBy="nuites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $inscription;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateNuitee(): ?\DateTimeInterface
    {
        return $this->dateNuitee;
    }

    public function setDateNuitee(\DateTimeInterface $dateNuitee): self
    {
        $this->dateNuitee = $dateNuitee;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getCategorie(): ?CategorieChambre
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieChambre $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getInscription(): ?Inscription
    {
        return $this->inscription;
    }

    public function setInscription(?Inscription $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }
}
