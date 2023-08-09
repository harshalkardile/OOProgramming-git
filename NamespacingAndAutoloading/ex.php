<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;


$jeffrey = new Person('jeffrey Way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);
$laracasts -> hire (new Person ('Jane Doe'));
var_dump($laracasts->getStaffMembers());