
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <a href="{{ route('create_note') }}" class="btn btn-danger">Create new note</a>
            <a href="{{ route('shared_with_me') }}" class="btn btn-danger">Shared with me</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome :myNotes="$myNotes" />
            </div>
        </div>
    </div>
</x-app-layout>

