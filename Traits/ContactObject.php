<?php
namespace Admin\Personell\Traits;

use Admin\Personell\Models\Contact;

/**
 * Contact
 */
trait ContactObject
{
    public function Contact()
    {
        return $this->hasOne(Contact::class);
    }
}
