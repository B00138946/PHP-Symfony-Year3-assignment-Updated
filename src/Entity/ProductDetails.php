<?php

namespace App\Entity;

use App\Repository\ProductDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductDetailsRepository::class)]
class ProductDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Brand = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagePath = null;

    #[ORM\Column]
    private ?float $Price = null;

    #[ORM\ManyToOne(inversedBy: 'productDetailss')]
    private ?Product $ClothingName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;
        return $this;
    }

    public function getClothingName(): ?Product
    {
        return $this->ClothingName;
    }

    public function setClothingName(?Product $ClothingName): self
    {
        $this->ClothingName = $ClothingName;
        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;
        return $this;
    }
}
