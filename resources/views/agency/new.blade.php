<form action="/api/agencies" method="post">
    {{csrf_field()}}
    <select name="agency_id" placeholder="Agency Id">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}"
            >{{$agency->name}}</option>
        @endforeach
    </select>
    <select name="country" placholder="country">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}">{{$agency->country}}</option>
        @endforeach
    </select>
    <select name="type" placholder="type">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}">{{$agency->type}}</option>
        @endforeach
    </select>
    <input type="submit" value="ok">
</form>