@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Contato">
    <section class="container contato">
        <h1 class="center-text">Entre em Contato</h1>
        <p class="center-text">Se você tem alguma dúvida, sugestão ou deseja agendar uma sessão de fotos, entre em contato através do formulário abaixo.</p>

        <div class="container-form"> <!-- Adiciona um div para centralizar o formulário -->
            <form action="/enviar-contato" method="post" class="form-bordered">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <br><br>
                    <textarea id="mensagem" name="mensagem" rows="4" required></textarea> <!-- Ajuste o número de linhas -->
                </div>
                <input type="submit" class="btn btn-success" value="Enviar Mensagem">
            </form>
        </div>
    </section>
</x-layout>
