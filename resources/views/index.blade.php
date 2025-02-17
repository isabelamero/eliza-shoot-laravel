@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Home">

    <div class="container gallery">
        <h3 class="center-text">Explore os diferentes temas de fotografia trabalhados pela fotógrafa profissional Eliza.</h3>
        <br><br>
        @foreach ($galeria as $fotografia)
        <div class="photo-item">
            <img src="{{ asset('storage/'.$fotografia->imagem) }}">
            <h3>{{ $fotografia->titulo }}</h3>
            <p>{{ $fotografia->categoria }}</p>
        </div>
        @endforeach
    </div>

</x-layout>
