We are the Form

<form method = "post" action="{{action('FormController@store')}}">
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> -->
    {{ csrf_field() }}
    <input type="text" name="name"/>
    <input type="text" name="message"/>
    <input type="submit"/>
</form>