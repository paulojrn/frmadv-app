@extends('layouts.home')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="img/logo.png" width="120" height="60" alt="Logo">
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbar-content"
            aria-controls="navbar-content"
            aria-expanded="false"
            aria-label="{{ __('Menu de navegação') }}">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbar-content" class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#expertise-area">Áreas de atuação</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('bgview')
<div class="bgview">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-10">
                <!-- Heading -->
                <h2>Teste</h2>
                <!-- Divider -->
                <hr class="hr-light">
                <!-- Description -->
                <h4 class="my-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti consequuntur.
                </h4>
            </div>
        </div>
    </div>
</div>
@endsection

@section('carousel')
<div id="home-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1"></li>
        <li data-target="#home-carousel" data-slide-to="2"></li>
        <li data-target="#home-carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/books-1.jpg" alt="Figura 1 - Atendimento">
            <div class="carousel-caption">
                <h3>Atendimento</h3>
                <p>Realizamos atendimento online ou presencial.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/books-2.jpg" alt="Figura 2 - Comunicação">
            <div class="carousel-caption">
                <h3>Comunicação</h3>
                <p>Priorizamos uma linguagem natural e de fácil compreenção, sem juridiquês.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/themis-1.jpg" alt="Figura 3 - Contato">
            <div class="carousel-caption">
                <h3>Contato</h3>
                <p>Possuímos várias formas de contato, escolha a melhor para você e fale conosco.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/themis-2.jpg" alt="Figura 4 - Abordagem">
            <div class="carousel-caption">
                <h3>Abordagem</h3>
                <p>Prezamos pelo profissionalismo, o respeito às leis e aos direitos de cada indivíduo</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
@endsection

@section('cards-expertises-1')                  
<div id="card-civel" class="card text-center border-secondary">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a 
                    class="nav-link active"
                    id="info-tab-civel"
                    data-toggle="tab"
                    href="#info-civel"
                    role="tab"
                    aria-controls="info-civel"
                    aria-selected="true">
                    
                    Informações
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="details-tab-civel"
                    data-toggle="tab"
                    href="#details-civel"
                    role="tab"
                    aria-controls="details-civel"
                    aria-selected="false">
                    
                    Detalhes
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="info-civel" role="tabpanel" aria-labelledby="info-tab-civel">
            <div class="card-body">
                <h4 class="card-title">Cível</h4>
                <p class="card-text">Conjunto de normas jurídicas responsáveis por regular os direitos e obrigações de ordem privada em relação as pessoas, seus bens e suas relações.</p>
            </div>
        </div>
        <div class="tab-pane fade" id="details-civel" role="tabpanel" aria-labelledby="details-tab-civel">
            <div class="card-body">
                <div>
                    <h4 class="card-title">Sub temas</h4>
                </div>
                <div>
                    <ul class="">
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                    </ul>
                </div>                   
                
            </div>
        </div>
    </div>
</div>

<div id="card-trabalho" class="card text-center border-secondary">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a 
                    class="nav-link active"
                    id="info-tab-trabalho"
                    data-toggle="tab"
                    href="#info-trabalho"
                    role="tab"
                    aria-controls="info-trabalho"
                    aria-selected="true">
                    
                    Informações
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="details-tab-trabalho"
                    data-toggle="tab"
                    href="#details-trabalho"
                    role="tab"
                    aria-controls="details-trabalho"
                    aria-selected="false">
                    
                    Detalhes
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="info-trabalho" role="tabpanel" aria-labelledby="info-tab-trabalho">
            <div class="card-body">
                <h4 class="card-title">Trabalho</h4>
                <p class="card-text">Conjunto de princípios, regras e instituições referente à relação de trabalho subordinado e situações análogas, visando assegurar melhores condições de trabalho e sociais ao trabalhador.</p>
            </div>
        </div>
        <div class="tab-pane fade" id="details-trabalho" role="tabpanel" aria-labelledby="details-tab-trabalho">
            <div class="card-body">
                <div>
                    <h4 class="card-title">Sub temas</h4>
                </div>
                <div>
                    <ul class="">
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                    </ul>
                </div>                   
                
            </div>
        </div>
    </div>
</div>

<div id="card-criminal" class="card text-center border-secondary">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a 
                    class="nav-link active"
                    id="info-tab-criminal"
                    data-toggle="tab"
                    href="#info-criminal"
                    role="tab"
                    aria-controls="info-criminal"
                    aria-selected="true">
                    
                    Informações
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="details-tab-criminal"
                    data-toggle="tab"
                    href="#details-criminal"
                    role="tab"
                    aria-controls="details-criminal"
                    aria-selected="false">
                    
                    Detalhes
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="info-criminal" role="tabpanel" aria-labelledby="info-tab-criminal">
            <div class="card-body">
                <h4 class="card-title">Criminal</h4>
                <p class="card-text">Conjunto de regras e normas para regular condutas humanas consideradas indesejadas, possuidoras de certa gravidade e reprovação social, e capazes de colocar em risco a convivência em sociedade.</p>
            </div>
        </div>
        <div class="tab-pane fade" id="details-criminal" role="tabpanel" aria-labelledby="details-tab-criminal">
            <div class="card-body">
                <div>
                    <h4 class="card-title">Sub temas</h4>
                </div>
                <div>
                    <ul class="">
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                    </ul>
                </div>                   
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('cards-expertises-2')                  
<div id="card-previdenciario" class="card text-center border-secondary">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a 
                    class="nav-link active"
                    id="info-tab-previdenciario"
                    data-toggle="tab"
                    href="#info-previdenciario"
                    role="tab"
                    aria-controls="info-previdenciario"
                    aria-selected="true">
                    
                    Informações
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="details-tab-previdenciario"
                    data-toggle="tab"
                    href="#details-previdenciario"
                    role="tab"
                    aria-controls="details-previdenciario"
                    aria-selected="false">
                    
                    Detalhes
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="info-previdenciario" role="tabpanel" aria-labelledby="info-tab-previdenciario">
            <div class="card-body">
                <h4 class="card-title">Previdenciário</h4>
                <p class="card-text">Regula as relações entre empresas e empregados com os órgãos da previdência social ou privada definindo regras a respeito das contribuições sociais e concessão de benefícios previdenciários, como aposentadoria, auxílio-doença e pensão.</p>
            </div>
        </div>
        <div class="tab-pane fade" id="details-previdenciario" role="tabpanel" aria-labelledby="details-tab-previdenciario">
            <div class="card-body">
                <div>
                    <h4 class="card-title">Sub temas</h4>
                </div>
                <div>
                    <ul class="">
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                    </ul>
                </div>                   
                
            </div>
        </div>
    </div>
</div>

<div id="card-consumidor" class="card text-center border-secondary">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a 
                    class="nav-link active"
                    id="info-tab-consumidor"
                    data-toggle="tab"
                    href="#info-consumidor"
                    role="tab"
                    aria-controls="info-consumidor"
                    aria-selected="true">
                    
                    Informações
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="details-tab-consumidor"
                    data-toggle="tab"
                    href="#details-consumidor"
                    role="tab"
                    aria-controls="details-consumidor"
                    aria-selected="false">
                    
                    Detalhes
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="info-consumidor" role="tabpanel" aria-labelledby="info-tab-consumidor">
            <div class="card-body">
                <h4 class="card-title">Consumidor</h4>
                <p class="card-text">Garante que uma pessoa que comprou um produto ou serviço em uma loja tenha os seus direitos respeitados, principalmente quando se refere a ser informado e protegido contra abusos.</p>
            </div>
        </div>
        <div class="tab-pane fade" id="details-consumidor" role="tabpanel" aria-labelledby="details-tab-consumidor">
            <div class="card-body">
                <div>
                    <h4 class="card-title">Sub temas</h4>
                </div>
                <div>
                    <ul class="">
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                    </ul>
                </div>                   
                
            </div>
        </div>
    </div>
</div>

<div id="card-familia" class="card text-center border-secondary">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a 
                    class="nav-link active"
                    id="info-tab-familia"
                    data-toggle="tab"
                    href="#info-familia"
                    role="tab"
                    aria-controls="info-familia"
                    aria-selected="true">
                    
                    Informações
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="details-tab-familia"
                    data-toggle="tab"
                    href="#details-familia"
                    role="tab"
                    aria-controls="details-familia"
                    aria-selected="false">
                    
                    Detalhes
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="info-familia" role="tabpanel" aria-labelledby="info-tab-familia">
            <div class="card-body">
                <h4 class="card-title">Família</h4>
                <p class="card-text">Trata das relações familiares e das obrigações e direitos decorrentes dessas relações, tem como conteúdo os estudos do casamento, união estável, relações de parentesco, filiação, alimentos, bem de família, tutela, curatela e guarda.</p>
            </div>
        </div>
        <div class="tab-pane fade" id="details-familia" role="tabpanel" aria-labelledby="details-tab-familia">
            <div class="card-body">
                <div>
                    <h4 class="card-title">Sub temas</h4>
                </div>
                <div>
                    <ul class="">
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                        <li><p>teste</p></li>
                    </ul>
                </div>                   
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('contact-form')
<form>
    <div class="form-item">
        <label for="contact-name"><i class="bi bi-person"></i> Nome</label>
        <input type="text" id="contact-name" class="form-control form-control-sm">
    </div>
    <div class="form-item">
        <label for="contact-email"><i class="bi bi-envelope"></i> E-mail</label>
        <input type="text" id="contact-email" class="form-control form-control-sm">
    </div>
    <div class="form-item">
        <label for="contact-title"><i class="bi bi-tag"></i> Título</label>
        <input type="text" id="contact-title" class="form-control form-control-sm">
    </div>
    <div class="form-item">
        <label for="contact-message"><i class="bi bi-pencil"></i> Mensagem</label>
        <textarea type="text" id="contact-message" class="form-control form-control-sm" rows="4"></textarea>
    </div>
    <div class="text-center my-5">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>
@endsection