

<?php

$xmlstr = <<<XML
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<StandardBusinessDocument xmlns="http://www.unece.org/cefact/namespaces/StandardBusinessDocumentHeader">
    <StandardBusinessDocumentHeader>
        <HeaderVersion>1.0</HeaderVersion>
        <Sender>
            <Identifier Authority="iso6523-actorid-upis">NSO0:WQY18W</Identifier>
        </Sender>
        <Receiver>
            <Identifier Authority="iso6523-actorid-upis">NSO0:fatture.copernico@legalmail.it</Identifier>
        </Receiver>
        <DocumentIdentification>
            <Standard>urn:oasis:names:specification:ubl:schema:xsd:Order-2</Standard>
            <TypeVersion>2.1</TypeVersion>
            <InstanceIdentifier>d2bf5ca6-8ba8-3749-8dbd-77f299b952ff</InstanceIdentifier>
            <Type>Order</Type>
            <CreationDateAndTime>2021-11-08T01:39:13Z</CreationDateAndTime>
        </DocumentIdentification>
        <BusinessScope>
            <Scope>
                <Type>DOCUMENTID</Type>
                <InstanceIdentifier>urn:oasis:names:specification:ubl:schema:xsd:Order-2::Order##urn:fdc:peppol.eu:poacc:trns:order:3::2.1</InstanceIdentifier>
            </Scope>
            <Scope>
                <Type>PROCESSID</Type>
                <InstanceIdentifier>urn:fdc:peppol.eu:poacc:bis:order_only:3</InstanceIdentifier>
            </Scope>
        </BusinessScope>
    </StandardBusinessDocumentHeader>
<Order xmlns="urn:oasis:names:specification:ubl:schema:xsd:Order-2" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2">
    <cbc:CustomizationID>urn:fdc:peppol.eu:poacc:trns:order:3</cbc:CustomizationID>
    <cbc:ProfileID>urn:fdc:peppol.eu:poacc:bis:order_only:3</cbc:ProfileID>
    <cbc:ID>S1-2021-198</cbc:ID>
    <cbc:IssueDate>2021-11-04</cbc:IssueDate>
    <cbc:OrderTypeCode listID="UNCL1001">220</cbc:OrderTypeCode>
    <cbc:DocumentCurrencyCode listID="ISO4217">EUR</cbc:DocumentCurrencyCode>
    <cbc:CustomerReference>Referente MASSIMO BOSCHINI  Ufficio S1-ORDINI DIR. SANITARIA DISTRETTO 1</cbc:CustomerReference>
    <cbc:AccountingCost>502020102</cbc:AccountingCost>
    <cac:ValidityPeriod>
        <cbc:EndDate>2022-12-31</cbc:EndDate>
    </cac:ValidityPeriod>
    <cac:OriginatorDocumentReference>
        <cbc:ID>8828405646</cbc:ID>
    </cac:OriginatorDocumentReference>
    <cac:Contract>
        <cbc:ID>2021-3966</cbc:ID>
    </cac:Contract>
    <cac:BuyerCustomerParty>
        <cac:Party>
            <cbc:EndpointID schemeID="0201">WQY18W</cbc:EndpointID>
            <cac:PartyName>
                <cbc:Name>ASL  Roma 4 </cbc:Name>
            </cac:PartyName>
            <cac:PostalAddress>
                <cbc:StreetName>Sede legale - Via Terme di Traiano, 39/a</cbc:StreetName>
                <cbc:CityName>CIVITAVECCHIA</cbc:CityName>
                <cbc:PostalZone>00053</cbc:PostalZone>
                <cbc:CountrySubentity>RM</cbc:CountrySubentity>
                <cac:Country>
                    <cbc:IdentificationCode listID="ISO3166-1:Alpha2">IT</cbc:IdentificationCode>
                </cac:Country>
            </cac:PostalAddress>
            <cac:PartyTaxScheme>
                <cbc:CompanyID>IT04743741003</cbc:CompanyID>
                <cac:TaxScheme>
                    <cbc:ID>VAT</cbc:ID>
                </cac:TaxScheme>
            </cac:PartyTaxScheme>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName>ASL  Roma 4 </cbc:RegistrationName>
                <cbc:CompanyID>01</cbc:CompanyID>
                <cac:RegistrationAddress>
                    <cbc:CityName>CIVITAVECCHIA</cbc:CityName>
                    <cac:Country>
                        <cbc:IdentificationCode listID="ISO3166-1:Alpha2">IT</cbc:IdentificationCode>
                    </cac:Country>
                </cac:RegistrationAddress>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:BuyerCustomerParty>
    <cac:SellerSupplierParty>
        <cac:Party>
            <cbc:EndpointID schemeID="9906">IT14457361005</cbc:EndpointID>
            <cac:PartyName>
                <cbc:Name>COPERNICO SCPA</cbc:Name>
            </cac:PartyName>
            <cac:PostalAddress>
                <cbc:StreetName>VIA VITTORIO EMANUELE ORLANDO N. 75</cbc:StreetName>
                <cbc:CityName>ROMA</cbc:CityName>
                <cbc:PostalZone>00185</cbc:PostalZone>
                <cbc:CountrySubentity>RM</cbc:CountrySubentity>
                <cac:Country>
                    <cbc:IdentificationCode listID="ISO3166-1:Alpha2">IT</cbc:IdentificationCode>
                </cac:Country>
            </cac:PostalAddress>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName>COPERNICO SCPA</cbc:RegistrationName>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:SellerSupplierParty>
    <cac:AccountingCustomerParty>
        <cac:Party>
            <cbc:EndpointID schemeID="0201">UF870Q</cbc:EndpointID>
            <cac:PartyName>
                <cbc:Name>ASL  Roma 4 </cbc:Name>
            </cac:PartyName>
            <cac:PostalAddress>
                <cbc:StreetName>Sede legale - Via Terme di Traiano, 39/a</cbc:StreetName>
                <cbc:CityName>CIVITAVECCHIA</cbc:CityName>
                <cbc:PostalZone>00053</cbc:PostalZone>
                <cbc:CountrySubentity>RM</cbc:CountrySubentity>
                <cac:Country>
                    <cbc:IdentificationCode listID="ISO3166-1:Alpha2">IT</cbc:IdentificationCode>
                </cac:Country>
            </cac:PostalAddress>
            <cac:PartyTaxScheme>
                <cbc:CompanyID>IT04743741003</cbc:CompanyID>
                <cac:TaxScheme>
                    <cbc:ID>VAT</cbc:ID>
                </cac:TaxScheme>
            </cac:PartyTaxScheme>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName>ASL  Roma 4 </cbc:RegistrationName>
                <cbc:CompanyID>01</cbc:CompanyID>
                <cac:RegistrationAddress>
                    <cbc:CityName>CIVITAVECCHIA</cbc:CityName>
                    <cac:Country>
                        <cbc:IdentificationCode listID="ISO3166-1:Alpha2">IT</cbc:IdentificationCode>
                    </cac:Country>
                </cac:RegistrationAddress>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:AccountingCustomerParty>
    <cac:Delivery>
        <cac:DeliveryLocation>
            <cbc:ID>04743741003-MDS1</cbc:ID>
            <cbc:Name>MAG DIR SANITARIA DISTRETTO 1</cbc:Name>
            <cac:Address>
                <cac:Country>
                    <cbc:IdentificationCode listID="ISO3166-1:Alpha2">IT</cbc:IdentificationCode>
                </cac:Country>
            </cac:Address>
        </cac:DeliveryLocation>
    </cac:Delivery>
    <cac:PaymentTerms>
        <cbc:Note>CONTO CORRENTE BANCARIO</cbc:Note>
    </cac:PaymentTerms>
    <cac:TaxTotal>
        <cbc:TaxAmount currencyID="EUR">100274.06</cbc:TaxAmount>
    </cac:TaxTotal>
    <cac:AnticipatedMonetaryTotal>
        <cbc:LineExtensionAmount currencyID="EUR">455791.19</cbc:LineExtensionAmount>
        <cbc:TaxExclusiveAmount currencyID="EUR">455791.19</cbc:TaxExclusiveAmount>
        <cbc:TaxInclusiveAmount currencyID="EUR">556065.25</cbc:TaxInclusiveAmount>
        <cbc:PayableAmount currencyID="EUR">556065.25</cbc:PayableAmount>
    </cac:AnticipatedMonetaryTotal>
    <cac:OrderLine>
        <cac:LineItem>
            <cbc:ID>1</cbc:ID>
            <cbc:Quantity unitCode="MTK" unitCodeListID="UNECERec20">45032.94</cbc:Quantity>
            <cbc:LineExtensionAmount currencyID="EUR">195442.96</cbc:LineExtensionAmount>
            <cac:Price>
                <cbc:PriceAmount currencyID="EUR">4.3400000</cbc:PriceAmount>
            </cac:Price>
            <cac:Item>
                <cbc:Name>SERVIZIO DI PULIZIA PROTOCOLLO ARANCIONE</cbc:Name>
                <cac:BuyersItemIdentification>
                    <cbc:ID>4015973</cbc:ID>
                </cac:BuyersItemIdentification>
                <cac:ClassifiedTaxCategory>
                    <cbc:ID schemeID="UNCL5305">S</cbc:ID>
                    <cbc:Percent>22.0</cbc:Percent>
                    <cac:TaxScheme>
                        <cbc:ID>VAT</cbc:ID>
                    </cac:TaxScheme>
                </cac:ClassifiedTaxCategory>
            </cac:Item>
        </cac:LineItem>
    </cac:OrderLine>
    <cac:OrderLine>
        <cac:LineItem>
            <cbc:ID>2</cbc:ID>
            <cbc:Quantity unitCode="MTK" unitCodeListID="UNECERec20">151282.44</cbc:Quantity>
            <cbc:LineExtensionAmount currencyID="EUR">46897.56</cbc:LineExtensionAmount>
            <cac:Price>
                <cbc:PriceAmount currencyID="EUR">0.3100000</cbc:PriceAmount>
            </cac:Price>
            <cac:Item>
                <cbc:Name>SERVIZIO DI PULIZIA PROTOCOLLO BIANCO</cbc:Name>
                <cac:BuyersItemIdentification>
                    <cbc:ID>4015970</cbc:ID>
                </cac:BuyersItemIdentification>
                <cac:ClassifiedTaxCategory>
                    <cbc:ID schemeID="UNCL5305">S</cbc:ID>
                    <cbc:Percent>22.0</cbc:Percent>
                    <cac:TaxScheme>
                        <cbc:ID>VAT</cbc:ID>
                    </cac:TaxScheme>
                </cac:ClassifiedTaxCategory>
            </cac:Item>
        </cac:LineItem>
    </cac:OrderLine>
    <cac:OrderLine>
        <cac:LineItem>
            <cbc:ID>3</cbc:ID>
            <cbc:Quantity unitCode="MTK" unitCodeListID="UNECERec20">11389.68</cbc:Quantity>
            <cbc:LineExtensionAmount currencyID="EUR">27790.82</cbc:LineExtensionAmount>
            <cac:Price>
                <cbc:PriceAmount currencyID="EUR">2.4400000</cbc:PriceAmount>
            </cac:Price>
            <cac:Item>
                <cbc:Name>SERVIZIO DI PULIZIA PROTOCOLLO GIALLO</cbc:Name>
                <cac:BuyersItemIdentification>
                    <cbc:ID>4015972</cbc:ID>
                </cac:BuyersItemIdentification>
                <cac:ClassifiedTaxCategory>
                    <cbc:ID schemeID="UNCL5305">S</cbc:ID>
                    <cbc:Percent>22.0</cbc:Percent>
                    <cac:TaxScheme>
                        <cbc:ID>VAT</cbc:ID>
                    </cac:TaxScheme>
                </cac:ClassifiedTaxCategory>
            </cac:Item>
        </cac:LineItem>
    </cac:OrderLine>
    <cac:OrderLine>
        <cac:LineItem>
            <cbc:ID>4</cbc:ID>
            <cbc:Quantity unitCode="MTK" unitCodeListID="UNECERec20">11691.3</cbc:Quantity>
            <cbc:LineExtensionAmount currencyID="EUR">66523.50</cbc:LineExtensionAmount>
            <cac:Price>
                <cbc:PriceAmount currencyID="EUR">5.6900000</cbc:PriceAmount>
            </cac:Price>
            <cac:Item>
                <cbc:Name>SERVIZIO DI PULIZIA PROTOCOLLO ROSSO</cbc:Name>
                <cac:BuyersItemIdentification>
                    <cbc:ID>4015974</cbc:ID>
                </cac:BuyersItemIdentification>
                <cac:ClassifiedTaxCategory>
                    <cbc:ID schemeID="UNCL5305">S</cbc:ID>
                    <cbc:Percent>22.0</cbc:Percent>
                    <cac:TaxScheme>
                        <cbc:ID>VAT</cbc:ID>
                    </cac:TaxScheme>
                </cac:ClassifiedTaxCategory>
            </cac:Item>
        </cac:LineItem>
    </cac:OrderLine>
    <cac:OrderLine>
        <cac:LineItem>
            <cbc:ID>5</cbc:ID>
            <cbc:Quantity unitCode="MTK" unitCodeListID="UNECERec20">82163</cbc:Quantity>
            <cbc:LineExtensionAmount currencyID="EUR">119136.35</cbc:LineExtensionAmount>
            <cac:Price>
                <cbc:PriceAmount currencyID="EUR">1.4500000</cbc:PriceAmount>
            </cac:Price>
            <cac:Item>
                <cbc:Name>SERVIZIO DI PULIZIA PROTOCOLLO VERDE</cbc:Name>
                <cac:BuyersItemIdentification>
                    <cbc:ID>4015971</cbc:ID>
                </cac:BuyersItemIdentification>
                <cac:ClassifiedTaxCategory>
                    <cbc:ID schemeID="UNCL5305">S</cbc:ID>
                    <cbc:Percent>22.0</cbc:Percent>
                    <cac:TaxScheme>
                        <cbc:ID>VAT</cbc:ID>
                    </cac:TaxScheme>
                </cac:ClassifiedTaxCategory>
            </cac:Item>
        </cac:LineItem>
    </cac:OrderLine>
</Order>

</StandardBusinessDocument>

XML;
function replace_string_in_file($filename, $string_to_replace, $replace_with)
{
    $content = file_get_contents($filename);
    $content_chunks = explode($string_to_replace, $content);
    $content = implode($replace_with, $content_chunks);
    file_put_contents($filename, $content);
}

//var_dump($pippo);

$mimmo = glob('C:\xampp\htdocs\copernico\*.xml');

foreach ($mimmo as $f) {
    echo '<br>' . (basename($f)) . '<br><br><br>';
    $fn = (basename($f));



    $fn = "IT04743741003_OZ_00fFe.xml";

    $result = file_get_contents($fn);

    $fn = 'C:\xampp\htdocs\copernico\eleb\ELAB_' . $fn;
    file_put_contents($fn, $result);

    $filename = $fn; //"users/data/letter.txt";
    $string_to_replace = "cac:";
    $replace_with = "";
    replace_string_in_file($filename, $string_to_replace, $replace_with);

    $filename = $fn; //"users/data/letter.txt";
    $string_to_replace = "cbc:";
    $replace_with = "";
    replace_string_in_file($filename, $string_to_replace, $replace_with);
    $filename = $fn; //"users/data/letter.txt";
    $string_to_replace = "ext:";
    $replace_with = "";
    replace_string_in_file($filename, $string_to_replace, $replace_with);
    echo $fn . '<br>';
    $data = new SimpleXmlElement($fn, null, true);
    json_encode($data);
    $namespaces = $data->getNamespaces(true);

    /*foreach($data->children($namespaces['cac']) as $entry) { 
    $eID = $entry->ID ; echo $entry." ".$eID."<br>"; } 
   */
    $new = ($data->Order);
    $con = json_encode($new);
    // Convert into associative array
    //$newArr = json_decode($con, true);
    $subnest = json_encode($data->Order->OrderLine);
    //var_dump(json_decode($stocazzo,TRUE));
    //var_dump( strval($data->Order));
    $t = simplexml_load_string($xmlstr);
    //var_dump($data->Order->OrderLine);
    echo $data->Order->CustomerReference . PHP_EOL . '<br>';
    foreach ($data->Order->OrderLine as $line) {
        echo "Type:" . $line->LineItem->ID . PHP_EOL . '<br>';
        echo "ITem:" . $line->LineItem->Item->Name . PHP_EOL . '<br>';
        $c = $line->LineItem->Item->Name;
        var_dump($c);
        $qtaatt = $line->LineItem->Quantity->attributes();

        echo "Qta:  " . $line->LineItem->Quantity . '<br> unitCode=>' . $qtaatt['unitCode'] . '<br> unitCodeListID=>  '
            . $qtaatt['unitCodeListID'] . '<br>';
        echo "ClassifiedTaxCategory" . $line->LineItem->Item->ClassifiedTaxCategory->ID . PHP_EOL . '<br>';
        echo "ClassifiedTaxCategoryaee" . $line->LineItem->Item->ClassifiedTaxCategory->attributes()->schemeID . '<br>';
        $testatt = $line->LineItem->Item->ClassifiedTaxCategory->ID->attributes();
        echo "attClassifiedTaxCategoryaee" . $testatt['schemeID'] . '<br>';
    }
    $row_number = 31;    // Number of the line we are deleting
    $file_out = file("stest.xml"); // Read the whole file into an array
    //Delete the recorded line
    unset($file_out[$row_number]);
    //Recorded in a file
    file_put_contents("stext.xml", implode("", $file_out));
    echo "bananarama";
} //fineciclofile



$xmlstr3 = simplexml_load_string($xmlstr);
var_dump($xmlstr3->Order->children("cbc", TRUE)->ID);
var_dump($xmlstr3->Order->children("cac", TRUE)->OrderLine->children("cac", TRUE)->LineItem->children("cbc", TRUE)->ID);
$mim = ($xmlstr3->Order->children("cac", TRUE)->OrderLine->children("cac", TRUE)->LineItem->children("cac", TRUE)->Item
    ->children("cbc", TRUE)->Name);
//->children("cac",TRUE)->LineItem->children("cac",TRUE)->Item->children("cbc",TRUE)->Name);
echo '<br><br>';
foreach ($xmlstr3->Order->children("cac", TRUE)->OrderLine as $line1) {

    echo "1  ITem:" . $line1->children("cac", TRUE)->LineItem->children("cac", TRUE)->Item->children("cbc", TRUE)->Name;
    echo '<br><br>';
}
echo '<br><br>';
var_dump($mim);




?>
