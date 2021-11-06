<?php

namespace App\Entity;

use App\Repository\CatalogueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CatalogueRepository::class)
 */
class Catalogue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="date")
     */
    private $date_parution;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_reserve;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_emprunt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDateParution(): ?\DateTimeInterface
    {
        return $this->date_parution;
    }

    public function setDateParution(\DateTimeInterface $date_parution): self
    {
        $this->date_parution = $date_parution;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getIsReserve(): ?bool
    {
        return $this->is_reserve;
    }

    public function setIsReserve(bool $is_reserve): self
    {
        $this->is_reserve = $is_reserve;

        return $this;
    }

    public function getIsEmprunt(): ?bool
    {
        return $this->is_emprunt;
    }

    public function setIsEmprunt(bool $is_emprunt): self
    {
        $this->is_emprunt = $is_emprunt;

        return $this;
    }
}
