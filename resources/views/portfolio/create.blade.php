@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Novo Portfólio">
    <h1 class="center-text">Cadastrar Nova Imagem no Portfólio</h1>

    <section class="container-form">
        <form action="/portfolio/salvar" method="post" enctype="multipart/form-data" class="form-bordered">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" required>
                    <option value="portrait">Portrait</option>
                    <option value="familia">Família</option>
                    <option value="comida">Comida</option>
                    <option value="festaseeventos">Festas e Eventos</option>
                    <option value="pretoebranco">Preto e Branco</option>
                    <option value="colorido">Colorido</option>
                </select>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar Imagem"/>
        </form>
    </section>
</x-layout>
