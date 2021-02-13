<form action="{{ route('update_note') }}" method="POST" class="contact_form"
                            novalidate="novalidate" data-status="init">
 @csrf
Title:
<input type="text" name="title" value="{{ $editNote[0]->title }}">
Note:
<input type="text" name="note" value="{{ $editNote[0]->note }}">
<input type="hidden" name="uuid" value="{{ $editNote[0]->uuid}}">
<input type="hidden" name="hidden" value="0">
<input type="checkbox" name="hidden" value="1" @if(old('gender',$editNote[0]->private)=="1") checked @endif>
<input type="submit" value="Save changes" class="form-submit btn btn-primary">
</form>
