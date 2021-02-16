Author:{{ $note->user->name }}<br><br>
Title: {{$note->title  }}<br>
Note:  {{ $note->note }} <br>
Date:   {{ $note->created_at }}<br>

<a class="btn btn-danger" href="{{ url('/')}}">Back</a>

