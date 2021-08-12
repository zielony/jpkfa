<?php
ini_set('memory_limit', '2G');

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JpkFa\DefinicjeTypy\TAdresPolski1Type;
use JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type;
use JpkFa\Jpk\JPK;
use JpkFa\Jpk\JPK\JPKAType\FakturaAType;
use JpkFa\Jpk\JPK\JPKAType\FakturaCtrlAType;
use JpkFa\Jpk\JPK\JPKAType\FakturaWierszAType;
use JpkFa\Jpk\JPK\JPKAType\FakturaWierszCtrlAType;
use JpkFa\Jpk\JPK\JPKAType\NaglowekAType;
use JpkFa\Jpk\JPK\JPKAType\Podmiot1AType;
use JpkFa\Jpk\TNaglowekType\KodFormularzaAType;

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('pl_PL');
$jpk = new JPK();

$kodFormularza = new KodFormularzaAType('JPK_FA');
$kodFormularza->setKodSystemowy('JPK_FA(3)');
$kodFormularza->setWersjaSchemy('3-0');

$naglowek = new NaglowekAType();
$naglowek->setKodFormularza($kodFormularza);
$naglowek->setWariantFormularza('3');
$naglowek->setCelZlozenia(1);
$naglowek->setDataWytworzeniaJPK(new DateTime('now'));
$naglowek->setDataOd(new \DateTime('first day of previous month'));
$naglowek->setDataDo(new \DateTime('last day of previous month'));
$naglowek->setKodUrzedu('0202');
$jpk->setNaglowek($naglowek);

$thisCompanyName = $faker->company;
$thisCompanyVatId = $faker->taxpayerIdentificationNumber;
$identyfikatorPodmiotu = new TIdentyfikatorOsobyNiefizycznej1Type();
$identyfikatorPodmiotu->setNIP($thisCompanyVatId);
$identyfikatorPodmiotu->setPelnaNazwa($thisCompanyName);

$thisCompanyPostcode = $faker->postcode;
$thisCompanyStreet = $faker->streetName;
$thisCompanyCity = $faker->city;
$thisCompanyBuildingNumber = $faker->buildingNumber;
$adres = new TAdresPolski1Type();
$adres->setKodKraju('PL')
    ->setKodPocztowy($thisCompanyPostcode)
    ->setWojewodztwo($faker->state)
    ->setPowiat('-')
    ->setGmina('-')
    ->setUlica($thisCompanyStreet)
    ->setNrDomu($thisCompanyBuildingNumber)
    ->setMiejscowosc($thisCompanyCity);

$podmiot1 = new Podmiot1AType();
$podmiot1->setIdentyfikatorPodmiotu($identyfikatorPodmiotu);
$podmiot1->setAdresPodmiotu($adres);
$jpk->setPodmiot1($podmiot1);

$invCount = 1;
$invSum = 0.0;
$itemsCount = 0;
$itemsSum = 0.0;

for ($i = 0; $i < $invCount; $i++) {
    echo "i=" . $i . PHP_EOL;

    $thisInvoiceNumber = 'FV ' . $i . '/' . ((int) date('m') - 1) . '/' . date('Y');
    $faktura = new FakturaAType();
    $faktura->setRodzajFaktury('VAT')
        ->setP1($faker->dateTimeBetween('first day of previous month', 'first day of previous month'))
        ->setP2A($thisInvoiceNumber)
        ->setP3A($faker->company)
        ->setP3B($faker->postcode . ' ' . $faker->city . ' ' . $faker->streetAddress)
        ->setP3C($thisCompanyName)
        ->setP3D($thisCompanyPostcode . ' ' . $thisCompanyCity . ' ' . $thisCompanyStreet . ' ' . $thisCompanyBuildingNumber)
        ->setP4A('PL')
        ->setP4B($thisCompanyVatId)
        ->setP5A('PL')
        ->setP5B($faker->taxpayerIdentificationNumber)
        ->setP6($faker->dateTimeBetween('first day of previous month', 'first day of previous month'))
    ;

    $p131 = $p132 = $p133 = $p134 = $p137 = 0.0;
    $p141 = $p142 = $p143 = $p144 = 0.0;
    $p18 = $p19 = false;

    $thisInvoiceItemsCount = rand(1, 2);
    for ($j = 0; $j < $thisInvoiceItemsCount; $j++) {
        echo "j=" . $j . PHP_EOL;

        $quantity = 1;
        $priceNet = 10.0;
        $taxAmount = $priceNet * 0.23;
        $priceGross = round($priceNet + $taxAmount, 2);
        $p131 += round($quantity * $priceNet, 2);
        $invSum += $p131;
        $p141 += round($quantity * $taxAmount, 2);

        $wiersz = new FakturaWierszAType();
        $wiersz->setP2B($thisInvoiceNumber)
            ->setP7('Produkt')
            ->setP8A('szt.')
            ->setP8B($quantity)
            ->setP9A($priceNet)
            ->setP9B($priceGross)
            ->setP11(round($quantity * $priceNet))
            ->setP11A(round($quantity * $priceGross))
            ->setP12('23');

        ++$itemsCount;
        $itemsSum += round($quantity * $priceNet, 2);
        $jpk->addToFakturaWiersz($wiersz);
    }

    $faktura->setP131(str_replace(',', '.', $p131))
        ->setP141(str_replace(',', '.', $p141))
        ->setP132(str_replace(',', '.', $p132))
        ->setP142(str_replace(',', '.', $p142))
        ->setP133(str_replace(',', '.', $p133))
        ->setP143(str_replace(',', '.', $p143))
        ->setP134(str_replace(',', '.', $p134))
        ->setP144(str_replace(',', '.', $p144))
        ->setP137(str_replace(',', '.', $p137))
    ;

    $faktura->setP15(str_replace(',', '.', $p131 + $p132 + $p133 + $p134 + $p137 + $p141 + $p142 + $p143 + $p144));

    $faktura->setP16(false)
        ->setP17(false)
        ->setP18($p18)
        ->setP19($p19)
        ->setP20(false)
        ->setP21(false)
        ->setP23(false)
        ->setP106E2(false)
        ->setP106E3(false);

    $jpk->addToFaktura($faktura);
}
$fakturaCtrl = new FakturaCtrlAType();
$fakturaCtrl->setLiczbaFaktur($invCount);
$fakturaCtrl->setWartoscFaktur(str_replace(',', '.', $invSum));

$jpk->setFakturaCtrl($fakturaCtrl);

$wierszCtrl = new FakturaWierszCtrlAType();
$wierszCtrl->setLiczbaWierszyFaktur($itemsCount);
$wierszCtrl->setWartoscWierszyFaktur(str_replace(',', '.', $itemsSum));

$jpk->setFakturaWierszCtrl($wierszCtrl);

$serializerBuilder = JMS\Serializer\SerializerBuilder::create();
$serializerBuilder->setDebug(true);
$serializerBuilder->addMetadataDirs([
    'JpkFa' => 'metadata',
]);

$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder): void {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler());
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
});
$serializer = $serializerBuilder->build();

try {
    $xml = $serializer->serialize($jpk, 'xml');
    echo $xml;
} catch (\Exception $ex) {
    echo '<h1>' . $ex->getMessage() . '</h1>';
    echo '<pre>' . $ex->getTraceAsString() . '</pre>';
}
