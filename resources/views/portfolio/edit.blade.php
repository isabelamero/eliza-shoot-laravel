@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Editar Portfólio">
    <h1 class="center-text">Editar Imagem no Portfólio</h1>

    <section class="container-form">
        <form action="/portfolio/alterar" method="post" enctype="multipart/form-data" class="form-bordered">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id" value="{{ $portfolio->id }}">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" value="{{ $portfolio->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" required>
                    <option value="portrait" {{ $portfolio->categoria == 'portrait' ? 'selected' : '' }}>Portrait</option>
                    <option value="familia" {{ $portfolio->categoria == 'familia' ? 'selected' : '' }}>Família</option>
                    <option value="comida" {{ $portfolio->categoria == 'comida' ? 'selected' : '' }}>Comida</option>
                    <option value="festaseeventos" {{ $portfolio->categoria == 'festaseeventos' ? 'selected' : '' }}>Festas e Eventos</option>
                    <option value="pretoebranco" {{ $portfolio->categoria == 'pretoebranco' ? 'selected' : '' }}>Preto e Branco</option>
                    <option value="colorido" {{ $portfolio->categoria == 'colorido' ? 'selected' : '' }}>Colorido</option>
                </select>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <input type="submit" class="btn btn-success" value="Atualizar Imagem"/>
        </form>
    </section>
</x-layout>
