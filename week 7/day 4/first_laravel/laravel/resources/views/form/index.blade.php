<h1>Messages</h1>
<a href="{{action('FormController@create')}}"> Create
</br>

@foreach ($messages as $message)
<b>{{$message->name}}</b>
</br>
{{$message->message}}
<hr>
</br>
@endforeach