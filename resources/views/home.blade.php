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
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias error sint odit incidunt nesciunt nam sunt autem officiis beatae non repellat quod accusamus, suscipit id minus atque iure fugiat laborum.</p>
                        <a href="#" class="btn btn-primary">Ver Lorem</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="http://via.placeholder.com/250x100.png?text=Tarcisio" class="card-img-top" alt="img teste">
                    <div class="card-body">
                        <h5 class="card-title">Tarcisio</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias error sint odit incidunt nesciunt nam sunt autem officiis beatae non repellat quod accusamus, suscipit id minus atque iure fugiat laborum.</p>
                        <a href="#" class="btn btn-primary">Ver Lorem</a>
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
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias error sint odit incidunt nesciunt nam sunt autem officiis beatae non repellat quod accusamus, suscipit id minus atque iure fugiat laborum.</p>
                        <a href="#" class="btn btn-primary">Ver Lorem</a>
                    </div>
                </div>
            </div>
                
        </div>
   </section>

<style>
    
    .home-cards {
        margin: 0 0px 80px 100px; /* top, right, bottom, left */
    }

    .container {
        margin-bottom: 60px;
    }

</style>

@endsection
