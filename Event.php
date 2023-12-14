<?php
class Event implements EventInterface
{
    // Properties
    protected $name;
    protected $date;
    protected $location;

    // Constructor
    public function __construct(string $name, string $date, string $location)
    {
        $this->name = $name;
        $this->date = $date;
        $this->location = $location;
    }

    // Methods
    public function getName(): string
    {
        return $this->name;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getLocation(): string
    {
        return $this->location;
    }
}
?>