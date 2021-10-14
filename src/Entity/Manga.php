<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
/**
 * @ORM\Entity(repositoryClass=MangaRepository::class)
 * @ApiResource
 * @ApiFilter(SearchFilter::class)
 */
class Manga
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $isRead;

    /**
     * @ORM\Column(type="string",length=3)
     */
    private $isStart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgUrl;


    /**
     * @ORM\Column(type="string",length=3)
     */
    private $isOver;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateEnd;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIsRead(): ?string
    {
        return $this->isRead;
    }

    public function setIsRead(string $isRead): self
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getIsStart(): ?string
    {
        return $this->isStart;
    }

    public function setIsStart(string $isStart): self
    {
        $this->isStart = $isStart;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    public function setImgUrl(string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }


    public function getIsOver(): ?string
    {
        return $this->isOver;
    }

    public function setIsOver(string $isOver): self
    {
        $this->isOver = $isOver;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }
}
