<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\SmsRepository;

/**
 * @ORM\Entity(repositoryClass=SmsRepository::class)
 */
class Sms
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     * @Groups("sms")
     */
    private $nummer;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"sms"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=200)
     * @Groups({"sms"})
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=25)
     * @Groups("sms")
     */
    private $sendeid;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"sms"})
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $wunschtermin;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"sms"})
     */
    private $prio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNummer(): ?string
    {
        return $this->nummer;
    }

    public function setNummer(string $nummer): self
    {
        $this->nummer = $nummer;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getSendeid(): ?string
    {
        return $this->sendeid;
    }

    public function setSendeid(string $sendeid): self
    {
        $this->sendeid = $sendeid;

        return $this;
    }

    
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWunschtermin(): ?\DateTimeInterface
    {
        return $this->wunschtermin;
    }

    public function setWunschtermin(\DateTimeInterface $wunschtermin): self
    {
        $this->wunschtermin = $wunschtermin;

        return $this;
    }
}
