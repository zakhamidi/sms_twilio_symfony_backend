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
     * @ORM\Column(type="string", length=15)
     * @Groups("sms")
     */
    private $mglnr;

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
     * @ORM\Column(type="datetime")
     */
    private $eintrag;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"sms"})
     */
    private $datum;

    /**
     * @ORM\Column(type="integer")
     */
    private $returncode;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"sms"})
     */
    private $rechnung;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $returntext;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"sms"})
     */
    private $verbrauch;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $gateway;

    /**
     * @ORM\Column(type="string", length=25)
     * @Groups("sms")
     */
    private $sendeid;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $ankunft;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"sms"})
     */
    private $land;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"sms"})
     */
    private $club;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"sms"})
     */
    private $club_number_country;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"sms"})
     */
    private $cst_id;

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
    private $senden;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"sms"})
     */
    private $terminversand;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $turniertyp;

    /**
     * @ORM\Column(type="date")
     */
    private $turnierdatum;

    /**
     * @ORM\Column(type="time")
     */
    private $teetime;

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

    public function getMglnr(): ?string
    {
        return $this->mglnr;
    }

    public function setMglnr(string $mglnr): self
    {
        $this->mglnr = $mglnr;

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

    public function getEintrag(): ?\DateTimeInterface
    {
        return $this->eintrag;
    }

    public function setEintrag(\DateTimeInterface $eintrag): self
    {
        $this->eintrag = $eintrag;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getReturncode(): ?int
    {
        return $this->returncode;
    }

    public function setReturncode(int $returncode): self
    {
        $this->returncode = $returncode;

        return $this;
    }

    public function getRechnung(): ?int
    {
        return $this->rechnung;
    }

    public function setRechnung(int $rechnung): self
    {
        $this->rechnung = $rechnung;

        return $this;
    }

    public function getReturntext(): ?string
    {
        return $this->returntext;
    }

    public function setReturntext(string $returntext): self
    {
        $this->returntext = $returntext;

        return $this;
    }

    public function getVerbrauch(): ?int
    {
        return $this->verbrauch;
    }

    public function setVerbrauch(?int $verbrauch): self
    {
        $this->verbrauch = $verbrauch;

        return $this;
    }

    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    public function setGateway(string $gateway): self
    {
        $this->gateway = $gateway;

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

    public function getAnkunft(): ?string
    {
        return $this->ankunft;
    }

    public function setAnkunft(string $ankunft): self
    {
        $this->ankunft = $ankunft;

        return $this;
    }

    public function getLand(): ?int
    {
        return $this->land;
    }

    public function setLand(int $land): self
    {
        $this->land = $land;

        return $this;
    }

    public function getClub(): ?int
    {
        return $this->club;
    }

    public function setClub(int $club): self
    {
        $this->club = $club;

        return $this;
    }

    public function getClubNumberCountry(): ?int
    {
        return $this->club_number_country;
    }

    public function setClubNumberCountry(int $club_number_country): self
    {
        $this->club_number_country = $club_number_country;

        return $this;
    }

    public function getCstId(): ?int
    {
        return $this->cst_id;
    }

    public function setCstId(int $cst_id): self
    {
        $this->cst_id = $cst_id;

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

    public function getSenden(): ?int
    {
        return $this->senden;
    }

    public function setSenden(int $senden): self
    {
        $this->senden = $senden;

        return $this;
    }

    public function getTerminversand(): ?\DateTimeInterface
    {
        return $this->terminversand;
    }

    public function setTerminversand(\DateTimeInterface $terminversand): self
    {
        $this->terminversand = $terminversand;

        return $this;
    }

    public function getTurniertyp(): ?string
    {
        return $this->turniertyp;
    }

    public function setTurniertyp(string $turniertyp): self
    {
        $this->turniertyp = $turniertyp;

        return $this;
    }

    public function getTurnierdatum(): ?\DateTimeInterface
    {
        return $this->turnierdatum;
    }

    public function setTurnierdatum(\DateTimeInterface $turnierdatum): self
    {
        $this->turnierdatum = $turnierdatum;

        return $this;
    }

    public function getTeetime(): ?\DateTimeInterface
    {
        return $this->teetime;
    }

    public function setTeetime(\DateTimeInterface $teetime): self
    {
        $this->teetime = $teetime;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(int $prio): self
    {
        $this->prio = $prio;

        return $this;
    }
}
