<x-app-layout> {{--resources/views/contacts/index.blade.php--}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Contacts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full bg-white">
                        <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">
                                Email
                            </th>
                            <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">
                                Region
                            </th>
                            <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td class="py-2 px-4 border-b text-sm text-gray-800">
                                    {{ $contact->email }}
                                </td>
                                <td class="py-2 px-4 border-b text-sm text-gray-800">
                                    {{ $contact->region }}
                                </td>
                                <td class="py-2 px-4 border-b text-sm text-gray-800">
                                    <a href="{{ route('contacts.fields.show', $contact->id) }}" class="text-blue-600 hover:underline">
                                        View Contact
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
