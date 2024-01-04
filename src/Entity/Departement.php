<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{


    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    #[ORM\Column(name: 'dept_no', length: 4)]
    private ?string $dept_no = null;

    #[ORM\Column(length: 40)]
    private ?string $dept_name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $roi_url = null;


    public function getDeptNon(): ?string
    {
        return $this->dept_no;
    }

    public function setDeptNo(string $dept_no): static
    {
        $this->dept_no = $dept_no;

        return $this;
    }

    public function getDeptName(): ?string
    {
        return $this->dept_name;
    }

    public function setDeptName(string $dept_name): static
    {
        $this->dept_name = $dept_name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    public function getRoiUrl(): ?string
    {
        return $this->roi_url;
    }

    public function setRoiUrl(?string $roi_url): static
    {
        $this->roi_url = $roi_url;

        return $this;
    }
}
