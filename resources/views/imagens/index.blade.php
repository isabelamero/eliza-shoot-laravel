@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

<x-layout titulo="Eliza Shoot - Admin">

    <section class="container-admin-banner">
        <img src="{{ asset('img/elizashootwhite.png') }}" class="logo-admin" alt="Logo ElizaShoot">
        <h1>Administração ElizaShoot</h1>
    </section>
    
    <h2>Lista de Imagens</h2>
    
    <section class="container-table">
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Categoria</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imagens as $fotografia)
                <tr>
                    <td>{{ $fotografia->titulo }}</td>
                    <td>{{ $fotografia->categoria }}</td>
                    <td><a class="botao-editar" href="imagens/editar/{{ $fotografia->id }}">Editar</a></td>
                    <td>
                        <form action="imagens/excluir" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $fotografia->id }}">
                            <input type="submit" class="botao-excluir" value="Excluir">
                        </form>
                    </td>
                </tr>  
                @endforeach              
            </tbody>
        </table>
        <a class="botao-cadastrar" href="imagens/novo">Cadastrar Imagem</a>
    </section>

    <h2>Lista de Portfólio</h2>
    
    <section class="container-table">
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Categoria</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portfolios as $item)
                <tr>
                    <td>{{ $item->titulo }}</td>
                    <td>{{ $item->categoria }}</td>
                    <td><a class="botao-editar" href="portfolio/editar/{{ $item->id }}">Editar</a></td>
                    <td>
                        <form action="portfolio/excluir" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="submit" class="botao-excluir" value="Excluir">
                        </form>
                    </td>
                </tr>  
                @endforeach              
            </tbody>
        </table>
        <a class="botao-cadastrar" href="portfolio/novo">Cadastrar Imagem</a>
    </section>

    <footer>
        <p>© 2025 ElizaShoot. Todos os direitos reservados.</p>
    </footer>
</x-layout>
