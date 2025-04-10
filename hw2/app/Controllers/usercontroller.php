<?php

namespace controllers;

use models\User;
use views\UserList;

require(dirname(__DIR__)."/models/user.php");
require(dirname(__DIR__)."/resources/views/users/userslist.php");


class UserController{

    private User $user;

    public function read(){

        $user = new User();
        $data = $user->read();
        
        (new UserList())->render($data);

        // Another option is to remove the echo from the view Just return HTML
        // then the controller returns the view as the requested resource
        // and it will be written to the response's body 
        // If we used return in the view then we can return the data
       //return  (new EmployeeList())->render($data);
    }
}

/*TEST

$employeeController = new EmployeeController();
$employeeController->read();

*/
