<?php

namespace T3ko\DpdTests\Objects\Enum;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\FileType;

class FileTypeTest extends TestCase
{
    /**
     * @dataProvider knownFileTypes
     */
    public function testCreation($fileType)
    {
        $fileType = FileType::$fileType();
        self::assertEquals($fileType, (string)$fileType);
    }

    public function knownFileTypes()
    {
        return [
            ['PDF'],
            ['EPL'],
            ['ZPL'],
        ];
    }
}
