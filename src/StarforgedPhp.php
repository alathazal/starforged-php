<?php

namespace Alathazal\StarforgedPhp;

use Alathazal\StarforgedData\DataTypes;
use Alathazal\StarforgedData\StarforgedData;

class StarforgedPhp
{
    private array $dataFiles;

    public function __construct()
    {
        $dataTypes = DataTypes::cases();

        foreach ($dataTypes as $dataType) {
            $this->dataFiles[$dataType->value] = json_decode(
                file_get_contents(
                    StarforgedData::getDataPath($dataType)
                )
            );
        }
    }

    public function getData(DataTypes $dataType): array
    {
        return $this->dataFiles[$dataType->value] ?? [];
    }

    public function asset_types(): array
    {
        return $this->getData(DataTypes::ASSET_TYPES);
    }

    public function assets(): array
    {
        return $this->getData(DataTypes::ASSETS);
    }

    public function encounters(): array
    {
        return $this->getData(DataTypes::ENCOUNTERS);
    }

    public function move_categories(): array
    {
        return $this->getData(DataTypes::MOVE_CATEGORIES);
    }

    public function moves(): array
    {
        return $this->getData(DataTypes::MOVES);
    }

    public function oracles(): array
    {
        return $this->getData(DataTypes::ORACLES);
    }

    public function truths(): array
    {
        return $this->getData(DataTypes::TRUTHS);
    }
}