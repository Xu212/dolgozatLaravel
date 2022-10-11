<form action="/api/agencies" method="post">
    {{csrf_field()}}
    <select name="agency_id" placeholder="Agency Id" style="display:none">
        <option value="1">Ügynökség</option>
    </select>
    <select name="agency_id" placeholder="Agency Id">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}"
            >{{$agency->name}}</option>
        @endforeach
    </select>
    <!-- <select name="status" placeholder="Status" style="display:none">
        <option value="0">Kikölcsönözhető</option>
    </select> -->
    <input type="submit" value="ok">
</form>