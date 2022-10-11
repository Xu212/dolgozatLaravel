@foreach ($agencies as $agency)

    <form action="/api/agencies/{{$agency->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$agency->name}}">
        </div>
    </form>

@endforeach