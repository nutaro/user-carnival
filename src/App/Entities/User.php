<?php


namespace App\Entities;


class User implements IRegister
{
    protected int $id;
    protected string $name;
    protected Address $address;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $name = filter_input(INPUT_POST, $name, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->name = trim($name);
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function add(): void
    {
        // TODO: Implement add() method.
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }

    public static function getByField(array $values)
    {
        // TODO: Implement getByField() method.
    }
}