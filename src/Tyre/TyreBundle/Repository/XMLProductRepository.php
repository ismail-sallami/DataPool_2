<?php

namespace Tyre\TyreBundle\Repository;


class XMLProductRepository implements  ProductRepositoryInterface
{
    public function search(string $needle)
    {

        //adding the XML file products
        $file_url = "bundles/tyretyre/xml/products.xml";
        //Convert the products.XML file into a SimpleXMLElement object
        $simpleXMLElementObject = simplexml_load_file($file_url);

        $i=0;
        //the array where will saved the searched products from the XML file
        $xml_result = [];
        //looping the xml object to find matching results
        while ($simpleXMLElementObject->product[$i]) {
            //first we will convert to lower case both searched item and the tested name
            if (strstr(strtolower($simpleXMLElementObject->product[$i]->name),strtolower($search_for))){
                //push that element into the array to display it later in the twig file
                array_push($xml_result, $simpleXMLElementObject->product[$i]);
            }
            $i++;
        }
        //end of products searching from the XML source
        return $xml_result;
    }

}