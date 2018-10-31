<?php
namespace Modules\Personell\Traits;

use Modules\Personell\Models\Contact;

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
