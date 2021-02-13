<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Welcome to your Jetstream application!
    </div>

    @foreach ($myNotes as $note)

        <div class="mt-6 text-gray-500">
            Title:
            {{ $note->title }} <br>
            Note:
            {{ $note->note }}
        </div>
        Created: {{ $note->created_at }} <br>
        Author:{{ $note->user->name }}<br>
        <a href="{{ route('edit_note', $note->uuid) }}" class="btn btn-info btn-xs" role="button">Edit</a>
        <br>
        Share with:

    @endforeach
</div>
<form action="{{ route('share_note') }}" method="POST" class="contact_form"
                            novalidate="novalidate" data-status="init">
 @csrf
 Title
 <input type="hidden" name="uuid" value="{{$note->uuid}}">
<input type="text" name="email">
 <input type="submit" value="OK" class="form-submit btn btn-primary">
</form>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                </path>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">

                </a></div>
        </div>
    </div>
</div>
