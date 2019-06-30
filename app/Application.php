<?php

namespace Matican;



use Matican\Core\Transaction\Request;

class Application
{

    public static function Start()
    {

        $request = new Request("testServer","testentity","testaction");
        $request->send();
//        InventoryActions::set_inventory_keeper(1, new Person());
//       Person::read();
//        $person = new Person();
//        $person->setHumanName("Hossein");
//        $person->setHumanFamily("Azimi");
//        Person::add($person);

        /**
         * @todo Amirhossein please read this
         */
        /*
         * *************** This is an example of using the request class *******************
         */
        /*
         * 1 - Create a new instance of "Matican\Core\Transaction\Request"
         */
//        $request = new Request("Server", "Entity", "Action");
        /*
         * 2 - Optional (if you wanted to add options to the request
         */
//        $request->add_query("Username", "52555555");
//        $request->add_query("Password", "8856565");
//        $request->add_query("key", "value");
        /*
         * 3 - You can also pass an entity to the request and send it to the server
         */
//        $person = new Person();
//        $person->setEmail(new Email("Azimihossein7@gmail.com"));
//        $person->setMobile(new Mobile("09120342273"));
//        $person->setNationalCode(new NationalCode("123456789"));
//        $person->setHumanFamily("Hossein");
//        $person->setHumanName("Azimi");
//
//        $request->add_instance($person);

        /*
         * 4 - Send the request and store the response
         */
//        $response = $request->send();

        /*
         * 5 - Response will be having the following outputs
         */
//        $response->getContent();
//        $response->getMessage();
//        $response->getStatus();
//        print_r($response->getContent());
//        die;
    }
}