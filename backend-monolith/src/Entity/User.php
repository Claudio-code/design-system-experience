<?php

namespace App\Entity;

use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\BooleanType;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class User
{
    #[Id]
    #[Column(type: IntegerType::class)]
    #[GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[Column(type: StringType::class)]
    private string $name;

    #[Column(type: StringType::class)]
    private string $passwordHash;

    #[Column(type: BooleanType::class)]
    private bool $provider;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    public function setPasswordHash(string $passwordHash): void
    {
        $this->passwordHash = $passwordHash;
    }

    public function isProvider(): bool
    {
        return $this->provider;
    }

    public function setProvider(bool $provider): void
    {
        $this->provider = $provider;
    }
}