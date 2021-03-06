@extends('layout.site')

@section('titulo', 'Controle de projetos')

@section('conteudo')
    
    <section class="home-cards">
    
        <div class="container">
            <h3 class="center">Lista de Projetos</h3>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="http://via.placeholder.com/250x100.png?text=Cassio" class="card-img-top" alt="img teste">
                    <div class="card-body">
                        <h5 class="card-title">Cássio</h5>
                        <p class="card-text">Professor da disciplina de topicos em Desenvolvimento de sistemas.</p>
                        <a href="https://github.com/cassioseffrin/frameworks2020.git" class="btn btn-primary">Arquivos da Disciplina</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="http://via.placeholder.com/250x100.png?text=Tarcisio" class="card-img-top" alt="img teste">
                    <div class="card-body">
                        <h5 class="card-title">Tarcisio</h5>
                        <p class="card-text">Desenvolveu back e API utilizando Java e as ferramentas das aulas.</p>
                        <a href="https://github.com/srtomy/cassio-details" class="btn btn-primary">Ver API</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="http://via.placeholder.com/250x100.png?text=Teilor" class="card-img-top" alt="img teste">
                    <div class="card-body">
                        <h5 class="card-title">Teilor</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias error sint odit incidunt nesciunt nam sunt autem officiis beatae non repellat quod accusamus, suscipit id minus atque iure fugiat laborum.</p>
                        <a href="#" class="btn btn-primary">Ver Lorem</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="http://via.placeholder.com/250x100.png?text=TiagoB" class="card-img-top" alt="img teste">
                    <div class="card-body">
                        <h5 class="card-title">Tiago B</h5>
                        <p class="card-text">Desenvolveu o front utilizando o framework Laravel.</p>
                        <a href="https://github.com/TiagoBruckmann/m2_cassio.git" class="btn btn-primary">Ver Front</a>
                    </div>
                </div>
            </div>
                
        </div>
   </section>

<style>
    
    .home-cards {
        margin: 0px 0px 80px 20px; /* top, right, bottom, left */
    }

    .container {
        margin-bottom: 60px;
    }

</style>

@endsection
