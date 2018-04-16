@extends('layouts.app')

@section('title', 'Главная')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="css/home.css">       

@endsection


@section('content')
<div class="row align-items-center">
    <div class="col">

    <h1 class="text-center title" id="portfolio">Категории</h1>
                <div class="separator"></div>
                <p class="lead text-center">Выберите, что вам нужно</p>
                <br> 
    </div> 
</div>  

<div class="row justify-content-center">
    
        <div class="filters text-center">
            <ul class="nav nav-pills">
            <li class="active"><a href="#" data-filter="*">ВСЕ</a> </li>
            <li><a href="#" data-filter=".metal">ТРУБЫ</a></li>
           <li> <a href="#" data-filter=".tsement" tabindex="-1">ЦЕМЕНТ</a></li>
           <li> <a href="#" data-filter=".blok" tabindex="-1">БЛОКИ</a></li>
            <li><a href="#" data-filter=".wood" tabindex="-1">ДЕРЕВО</a></li>
            <li><a href="#" data-filter="blue" tabindex="-1">КРЕПЕЖИ</a></li>
            <li><a href="#" data-filter="blue" tabindex="-1">ОТДЕЛКА</a></li>
           <li> <a href="#" data-filter="blue" tabindex="-1">ОТОПЛЕНИЕ</a></li>
          <li>  <a href="#" data-filter="blue" tabindex="-1">САНТЕХНИКА</a></li>
           <li>  <a href="#" data-filter="blue" tabindex="-1">ЭЛЕКТРИКА</a></li>

            </ul>
        </div>
    
</div>
<div class="isotope-container row grid-space-20">
       <div class="col-sm-6 col-md-3 isotope-item metal">
        <div class="image-box">
            <div class="overlay-container">
                <img src="images/stalnye.jpg" alt="">
                <a class="overlay" href="{{ route('tenders.create')}}">
                    <i class="fa fa-search-plus"></i>
                    <span>Трубы</span>
                </a>
            </div>
            <a class="btn btn-default btn-block" href="{{ route('tenders.create')}}">трубы из стали</a>
        </div>
       
    </div>

    <div class="col-sm-6 col-md-3 isotope-item metal">
        <div class="image-box">
            <div class="overlay-container">
                <img src="images/montazh-plastikovyh-trub-1.jpg" alt="">
                <a class="overlay" href="#">
                    <i class="fa fa-search-plus"></i>
                    <span>Трубы из пластика</span>
                </a>
            </div>
            <a class="btn btn-default btn-block" href="#">трубы из пластика</a>
        </div>
        
    </div>


    <div class="col-sm-6 col-md-3 isotope-item tsement">
        <div class="image-box">
            <div class="overlay-container">
                <img src="images/14535.jpg" alt="">
                <a class="overlay" href="#">
                    <i class="fa fa-search-plus"></i>
                    <span>Цемент</span>
                </a>
            </div>
            <a class="btn btn-default btn-block" href="#">цемент</a>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 isotope-item blok">
        <div class="image-box">
            <div class="overlay-container">
                <img src="images/vidy_blokov.jpg" alt="">
                <a class="overlay" href="#">
                    <i class="fa fa-search-plus"></i>
                    <span>Бетонные блоки</span>
                </a>
            </div>
            <a class="btn btn-default btn-block" href="#">бетонные блоки</a>
        </div>
    </div>


    <div class="col-sm-6 col-md-3 isotope-item blok">
        <div class="image-box">
            <div class="overlay-container">
                <img src="images/blocks.jpg" alt="">
                <a class="overlay" href="#">
                    <i class="fa fa-search-plus"></i>
                    <span>еще блоки</span>
                </a>
            </div>
            <a class="btn btn-default btn-block" href="#">еще блоки</a>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 isotope-item wood">
        <div class="image-box">
            <div class="overlay-container">
                <img src="images/doski.jpg" alt="">
                <a class="overlay" href="#">
                    <i class="fa fa-search-plus"></i>
                    <span>Доски ровные</span>
                </a>
            </div>
            <a class="btn btn-default btn-block" href="#">доски ровные</a>
        </div>
    </div>
</div>

        
   

@endsection


@section('scripts')
<script type="text/javascript" src="plugins/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Modernizr javascript -->
        <script type="text/javascript" src="plugins/modernizr.js"></script>

        <!-- Isotope javascript -->
        <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
        
        <!-- Backstretch javascript -->
        <script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

        <!-- Appear javascript
        <script type="text/javascript" src="plugins/jquery.appear.js"></script> -->

        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/custom.js"></script>
@stop
