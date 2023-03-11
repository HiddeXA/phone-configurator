@extends('layouts.default')
@section('content')



    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h1>Welkom bij de telefoon configurator</h1>
                <p>Deze configurator kiest een telefoon voor je uit op basis van jouw keuzes bij de volgende
                    vragen.</p>
                <a class="btn btn-primary btn-sm col-1-md col-3-sm next">Start</a>
            </div>
            <div class="carousel-item">
               <h1>Wat is je budget?</h1>

               <label for="priceMaxSlider" class="form-label">Maximale prijs : <input class="form-control" type="number" value="{{$highestPrice}}" id="maxPrice" min="{{$lowestPrice}}" max="{{$highestPrice}}"></label>
               <input type="range" min="{{$lowestPrice}}" max="{{$highestPrice}}" value="{{$highestPrice}}" class="form-range priceRange" id="priceMaxSlider">

               <label for="priceMinSlider" class="form-label">Minimale prijs : <input class="form-control" type="number" value="{{$lowestPrice}}" id="minPrice" min="{{$lowestPrice}}" max="{{$highestPrice}}"></label>
               <input type="range" min="{{$lowestPrice}}" max="{{$highestPrice}}" value="{{$lowestPrice}}" class="form-range priceRange" id="priceMinSlider">

               <a class="btn btn-primary btn-sm col-1-md col-3-sm next">Volgende</a>
            </div>
            <div class="carousel-item">

               <div class="row">
                  <p>Besturingssysteem</p>
                  <input type="radio" name="" id="">
               </div>


            </div>
        </div>
    </div>
@stop
