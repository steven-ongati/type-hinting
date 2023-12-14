<?php
interface EventInterface
{
    public function getName(): string;
    public function getDate(): string;
    public function getLocation(): string;
}
?>