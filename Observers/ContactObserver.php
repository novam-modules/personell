<?php

namespace Admin\Personell\Observers;

use Admin\Personell\Models\Contact;

class ContactObserver
{
    //

    public function saving(Contact $emp)
    {
        // if(!$emp->first_tname || !$emp->last_name){

        //     $nameParts = explode(" ", $emp->name);

        //     $emp->last_name = array_pop($nameParts);
        //     $emp->first_name = implode(" ", $nameParts);

        //     unset($emp->name);

        // }
    }
}
