<?php

namespace Matican;


use Matican\Actions\Repository\ItemActions;
use Matican\Actions\Repository\PersonActions;
use Matican\Core\Entities\Repository;
use Matican\Core\Servers;
use Matican\Core\Transaction\Request;
use Matican\Core\Transaction\ResponseStatus;

class Application
{

    public static function Start()
    {

        $request = new Request(
            Servers::Delivery,
            Repository::Item,
            ItemActions::all
        );
//        $response = $request->send();

//        $request->add_query('id', 3);
//        $request->add_query('tsss', 6);
//        $request->add_query('ttttt', 6);
//        $response = $request->send();
//        $person = $response->getContent();
//        print_r($person);
//        die;
//        print_r($response->getContent());
//        die;
//        InventoryActions::set_inventory_keeper(1, new PersonActions());
//        PersonActions::read();
//        $person = new PersonActions();
//        $person->setHumanName("Hossein");
//        $person->setHumanFamily("Azimi");
//        PersonActions::add($person);

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
//        $person = new PersonActions();
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