<?php


namespace T3ko\Dpd\Objects;


use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\Currency;
use T3ko\Dpd\Objects\Enum\GuaranteeType;
use T3ko\Dpd\Objects\Enum\PayerType;
use T3ko\Dpd\Objects\Enum\SelfCollectionReceiver;

class PackageTest extends TestCase
{

    private $senderMock;
    private $receiverMock;

    public function setUp()
    {
        $this->senderMock = $this->createMock(Sender::class);
        $this->receiverMock = $this->createMock(Receiver::class);
        parent::setUp();
    }

    public function testCreationWithNoParcels()
    {
        $package = new Package(
            $this->senderMock,
            $this->receiverMock
        );

        self::assertSame($this->senderMock, $package->getSender());
        self::assertSame($this->receiverMock, $package->getReceiver());
        self::assertEquals(PayerType::SENDER(), $package->getPayerType());
        self::assertEmpty($package->getParcels());
        self::assertNotNull($package->getServices());
        self::assertNull($package->getRef1());
        self::assertNull($package->getRef2());
        self::assertNull($package->getRef3());
        self::assertNull($package->getThirdPartyFid());
    }

    public function testCreationWithParcels()
    {
        $parcel1 = $this->createMock(Parcel::class);
        $parcel2 = $this->createMock(Parcel::class);

        $package = new Package(
            $this->senderMock,
            $this->receiverMock,
            [
                $parcel1,
                $parcel2,
            ]
        );

        self::assertCount(2, $package->getParcels());
        self::assertContains($parcel1, $package->getParcels());
        self::assertContains($parcel2, $package->getParcels());
    }

    public function testAddParcel()
    {
        $parcel = $this->createMock(Parcel::class);

        $package = new Package(
            $this->senderMock,
            $this->receiverMock
        );

        self::assertEmpty($package->getParcels());

        $package->addParcel($parcel);

        self::assertCount(1, $package->getParcels());
        self::assertContains($parcel, $package->getParcels());
    }

    private function getPackage()
    {
        return new Package(
            $this->senderMock,
            $this->receiverMock
        );
    }

    public function testAddingCarryInService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isCarryIn());

        $package->addCarryInService();

        self::assertTrue($package->getServices()->isCarryIn());
    }

    public function testAddingCODService()
    {
        $package = $this->getPackage();
        self::assertNull($package->getServices()->getCodAmount());
        self::assertNull($package->getServices()->getCodCurrency());

        $package->addCODService(127.80, Currency::PLN());

        self::assertSame(127.80, $package->getServices()->getCodAmount());
        self::assertEquals(Currency::PLN(), $package->getServices()->getCodCurrency());
    }

    public function testAddingCUDService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isCud());

        $package->addCUDService();

        self::assertTrue($package->getServices()->isCud());
    }

    public function testAddingDeclaredValueService()
    {
        $package = $this->getPackage();
        self::assertNull($package->getServices()->getDeclaredValueAmount());
        self::assertNull($package->getServices()->getDeclaredValueCurrency());

        $package->addDeclaredValueService(32.25, Currency::PLN());

        self::assertSame(32.25, $package->getServices()->getDeclaredValueAmount());
        self::assertEquals(Currency::PLN(), $package->getServices()->getDeclaredValueCurrency());
    }

    public function testAddingDedicatedDeliveryService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isDedicatedDelivery());

        $package->addDedicatedDeliveryService();

        self::assertTrue($package->getServices()->isDedicatedDelivery());
    }

    public function testAddingDoxService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isDox());

        $package->addDoxService();

        self::assertTrue($package->getServices()->isDox());
    }

    public function testAddingDutyService()
    {
        $package = $this->getPackage();
        self::assertNull($package->getServices()->getDutyAmount());
        self::assertNull($package->getServices()->getDutyCurrency());

        $package->addDutyService(51.06, Currency::PLN());

        self::assertSame(51.06, $package->getServices()->getDutyAmount());
        self::assertEquals(Currency::PLN(), $package->getServices()->getDutyCurrency());
    }

    public function testAddingGuaranteeService()
    {
        $package = $this->getPackage();
        self::assertNull($package->getServices()->getGuaranteeType());
        self::assertNull($package->getServices()->getGuaranteeValue());

        $package->addGuaranteeService(GuaranteeType::TIMEFIXED(), 'value');

        self::assertEquals(GuaranteeType::TIMEFIXED(), $package->getServices()->getGuaranteeType());
        self::assertEquals('value', $package->getServices()->getGuaranteeValue());
    }

    public function testAddingInPersService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isInPers());

        $package->addInPersService();

        self::assertTrue($package->getServices()->isInPers());
    }

    public function testAddingPalletService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isPallet());

        $package->addPalletService();

        self::assertTrue($package->getServices()->isPallet());
    }

    public function testAddingPrivPersService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isPrivPers());

        $package->addPrivPersService();

        self::assertTrue($package->getServices()->isPrivPers());
    }

    public function testAddingRodService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isRod());

        $package->addRodService();

        self::assertTrue($package->getServices()->isRod());
    }

    public function testAddingSelfColllectionService()
    {
        $package = $this->getPackage();
        self::assertNull($package->getServices()->getSelfCollection());

        $package->addSelfColService(SelfCollectionReceiver::PRIV());

        self::assertEquals(SelfCollectionReceiver::PRIV(), $package->getServices()->getSelfCollection());
    }

    public function testAddingTiresService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isTires());

        $package->addTiresService();

        self::assertTrue($package->getServices()->isTires());
    }

    public function testAddingTiresExportService()
    {
        $package = $this->getPackage();
        self::assertFalse($package->getServices()->isTiresExport());

        $package->addTiresExportService();

        self::assertTrue($package->getServices()->isTiresExport());
    }
}
