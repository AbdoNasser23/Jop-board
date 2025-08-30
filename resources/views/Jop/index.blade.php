<div>
    <h1>Welcome to jop page</h1>
    <br>
    <h1>My name is  {{$name}}</h1>
    <br>
    @foreach ($jops as $jop)
        <h2>{{$jop["title"]}} : {{$jop["salary"]}}</h2>
        <br>
    @endforeach


</div>
