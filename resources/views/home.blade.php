<h1> Lista de Carros</h1>
@foreach($data as $carros)
    @foreach($carros as $carro)
        <h5>{{$carro['marca']}}</h5>
    @endforeach
@endforeach