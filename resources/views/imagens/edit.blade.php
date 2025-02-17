@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Editar Imagem">
    <h1 class="center-text">Editar Imagem</h1>

    <section class="container-form">
        

    <x-imagens.form action="/imagens/alterar" submit="Atualizar Imagem" :imagem="$imagem"/>
        
    </section>
</x-layout>
