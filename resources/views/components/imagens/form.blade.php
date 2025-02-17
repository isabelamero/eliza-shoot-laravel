<section class="container-form">
        <form action="{{ $action }}" method="post" enctype="multipart/form-data" class="form-bordered">


        @csrf
        @isset($imagem->id)
        @method('PUT')
          <input type="hidden" name="id" id="id" value="{{ $imagem->id }}">
        @endisset

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" @isset($imagem->titulo) value="{{ $imagem->titulo }}" @endisset id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" required>
                    <option value="portrait">Portrait</option>
                    <option value="familia">Família</option>
                    <option value="comida">Comida</option>
                    <option value="festaseeventos">Colorido</option>
                    <option value="pretoebranco">Preto e Branco</option>
                    <option value="festaseeventos">Festas e Eventos</option>
                </select>
            </div>
            <input type="submit" name="cadastro" class="btn btn-success" value=" {{ $submit }}"/>
        </form>
    </section>