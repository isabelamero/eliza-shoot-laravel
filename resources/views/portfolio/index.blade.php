@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Portfólio">

    <section class="container gallery">
        <h3 class="center-text">Explore os diferentes temas de fotografia trabalhados pela fotógrafa profissional Eliza.</h3>
        <br><br>
        @foreach ($portfolios as $portfolio)
        <div class="photo-item">
            <img src="{{ asset('storage/'.$portfolio->imagem) }}" alt="{{ $portfolio->titulo }}">
            <h3>{{ $portfolio->titulo }}</h3>
            <p>{{ $portfolio->categoria }}</p>
        </div>
        @endforeach
    </section>

</x-layout>
