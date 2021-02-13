<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>
    <form action="{{ route('save_note') }}" method="POST" class="contact_form"
                            novalidate="novalidate" data-status="init">
 @csrf
 Title
 <input type="text" name="title" placeholder="Title">
 <label for="note">Note</label>
 <input type="text" class="form-control" name="note">
 <input type="hidden" name="hidden" value="0">
 <input type="checkbox" name="hidden" value="1" ? 'checked="checked"'>Hidden note
 <input type="submit" value="OK" class="form-submit btn btn-primary">
</form>

</x-app-layout>

