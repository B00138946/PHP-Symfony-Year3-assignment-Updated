<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'ClothingName', targetEntity: ProductDetails::class)]
    private Collection $productDetailss;

    public function __construct()
    {
        $this->productDetails = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, ProductDetails>
     */
    public function getProductDetails(): Collection
    {
        return $this->productDetails;
    }

    public function addProductDetails(ProductDetails $productDetails): self
    {
        if (!$this->productDetailss->contains($productDetails)) {
            $this->productDetailss->add($productDetails);
            $productDetails->setClothingName($this);
        }

        return $this;
    }

    public function removeProductDetails(ProductDetails $productDetails): self
    {
        if ($this->productDetailss->removeElement($productDetails)) {
            // set the owning side to null (unless already changed)
            if ($productDetails->getClothingName() === $this) {
                $productDetails->setClothingName(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
