<?php
namespace Modules\Personnel\Traits;

use Modules\Personnel\Models\Contact;

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
