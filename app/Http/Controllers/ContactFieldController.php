<?php // app/Http/Controllers/ContactFieldController.php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\View\View;

class ContactFieldController extends Controller
{
    public function show(Contact $contact): View
    {
        return view('contacts.fields.show', [
            'contact' => $contact,
            'fields' => $contact->fields
        ]);
    }
}
