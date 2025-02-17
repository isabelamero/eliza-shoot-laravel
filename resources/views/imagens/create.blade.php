@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Nova Imagem">
    <h1 class="center-text">Cadastrar Nova Imagem</h1>

    <section class="container-form">

    <x-imagens.form action="/imagens/salvar" submit="Cadastrar Imagem"/>

    </section>

</x-layout>
