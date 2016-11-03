<form class="form-horizontal" role="form" method="POST" action="{{ url('test') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="search" value="{{old('search')}}"/>
	<input type="submit" value="search" name="submit" />
</form>
