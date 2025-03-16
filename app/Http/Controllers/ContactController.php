<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        // Log the incoming request payload
        Log::info('Received AudienceGrid Event', [
            'payload' => $request->all(),
        ]);

        // Validate request data
        $data = $request->validate([
            'event' => ['required', 'string'],
            'properties' => ['required', 'array'],
            'user' => ['required', 'array'],
            'user.id' => ['required', 'string'],
            'user.email' => ['required', 'email'],
            'user.region' => ['required', 'string', 'size:2'],
        ]);

        // Create or update the Contact
        $contact = Contact::updateOrCreate(
            ['email' => $data['user']['email']], // Search for a record with this email
            ['region' => $data['user']['region']]
        );

        // Save or update Contact Fields
        foreach ($data['properties'] as $key => $value) {
            $contact->fields()->updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        // Return the response
        return response()->json(['message' => 'Contact and fields saved successfully'], 201);
    }
}
