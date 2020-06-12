<?php 

namespace interfaces;

interface ModelInterfaces

{
    public function getById(int $id): array;

    public function getAll();

    public function getTableName(): string;
}

?>