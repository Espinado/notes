
@foreach ($note->users as $user)
@if ($user->id ==$note->author_id)
Author:{{ $user->name }}<br><br>
@endif
@endforeach
Title: {{$note->title  }}<br>
Note:  {{ $note->note }} <br>
Date:   {{ $note->created_at }}<br>

<a class="btn btn-danger" href="{{ url('/')}}">Back</a>

