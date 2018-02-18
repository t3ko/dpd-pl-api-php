<?php

namespace T3ko\Dpd\Objects\Enum;

use PHPUnit\Framework\TestCase;

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
