<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_reservation;

    /**
     * @ORM\Column(type="date")
     */
    private $date_emprunt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     */
    private $reservations;

    /**
     * @ORM\OneToOne(targetEntity=Catalogue::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->date_emprunt;
    }

    public function setDateEmprunt(\DateTimeInterface $date_emprunt): self
    {
        $this->date_emprunt = $date_emprunt;

        return $this;
    }

    public function getReservations(): ?User
    {
        return $this->reservations;
    }

    public function setReservations(?User $reservations): self
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function getReservation(): ?Catalogue
    {
        return $this->reservation;
    }

    public function setReservation(Catalogue $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
}
