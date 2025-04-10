<?php

namespace views;

/* The view can be written as HTML + PHP
OR we can use OOP and make it a class. 
*/
use core\auth\MembershipProvider;
class UserList{

    

    public function render($data){
/*
    if(isset($_GET['logout'])){
        session_start();
        session_destroy();
    }

        $membership = new MembershipProvider();
    if ($membership->isLoggedIn()){
*/
       require("Resources\\Views\\templates\\header.php");

        $html = "
        <table>
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>Username</th>
                    <th>Enabled 2FA</th>
                    <th>Secret</th>
                </tr>
        </thead>";

            foreach ($data as $users) {
                $html .= "<tr>";
                $html .= "<td>{$users["id"]}</td>";
                $html .= "<td>{$users["username"]}</td>";
                $html .= "<td>{$users["enabled2FA"]}</td>";
                $html .= "<td>{$users["secret"]}</td>";
                $html .= "</tr>";
            }
        $html .='</table>
                <br>
                
        ';
//<a href="/app/employees?logout">Log Out</a> this is used to logout
      
        echo $html;  

        require("Resources\\Views\\templates\\footer.php");
        }
        /*else{
            header('location: /app/logins');
         }
            */
       // return $html;
    }

