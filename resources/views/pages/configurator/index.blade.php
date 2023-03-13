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

                <label for="priceMaxSlider" class="form-label">Maximale prijs : <input class="form-control" type="number"
                        value="{{ $highestPrice }}" id="maxPrice" min="{{ $lowestPrice }}"
                        max="{{ $highestPrice }}"></label>
                <input type="range" min="{{ $lowestPrice }}" max="{{ $highestPrice }}" value="{{ $highestPrice }}"
                    class="form-range priceRange" id="priceMaxSlider">

                <label for="priceMinSlider" class="form-label">Minimale prijs : <input class="form-control" type="number"
                        value="{{ $lowestPrice }}" id="minPrice" min="{{ $lowestPrice }}"
                        max="{{ $highestPrice }}"></label>
                <input type="range" min="{{ $lowestPrice }}" max="{{ $highestPrice }}" value="{{ $lowestPrice }}"
                    class="form-range priceRange" id="priceMinSlider">

                <a class="btn btn-primary btn-sm col-1-md col-3-sm next">Volgende</a>
            </div>
            <div class="carousel-item">

                <h1>Besturingssysteem</h1>
                <div class="form-check">
                    <label class="form-check-label" for="iOS">iOS</label>
                    <input class="form-check-input" type="radio" name="operatingSystem" value="iOS">
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="Android">Android</label>
                    <input class="form-check-input" type="radio" name="operatingSystem" value="Android">
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="noChoice">Geen voorkeur</label>
                    <input class="form-check-input" type="radio" name="operatingSystem" value="noChoice" checked>
                </div>

                <a class="btn btn-primary btn-sm col-1-md col-3-sm next">Volgende</a>
            </div>

            <div class="carousel-item">
                <h1>Scherm groote (inch)</h1>

                <label for="screenMaxSlider" class="form-label">Maximale scherm groote : <input class="form-control"
                        type="number" value="{{ $highestScreen }}" id="maxScreen" min="{{ $lowestScreen }}"
                        max="{{ $highestScreen }}"></label>
                <input type="range" step="0.1" min="{{ $lowestScreen }}" max="{{ $highestScreen }}"
                    value="{{ $highestScreen }}" class="form-range screenRange" id="screenMaxSlider">

                <label for="screenMinSlider" class="form-label">Minimale scherm prijs : <input class="form-control"
                        type="number" value="{{ $lowestScreen }}" id="minScreen" min="{{ $lowestScreen }}"
                        max="{{ $highestScreen }}"></label>
                <input type="range" step="0.1" min="{{ $lowestScreen }}" max="{{ $highestScreen }}"
                    value="{{ $lowestScreen }}" class="form-range screenRange" id="screenMinSlider">

                <a class="btn btn-primary btn-sm col-1-md col-3-sm next">Volgende</a>
            </div>

            <div class="carousel-item">

                <h1>Camera kwaliteit</h1>
                   <div class="form-check">
                    <label class="form-check-label" for="camera">Zo goed mogelijk</label>
                      <input class="form-check-input" type="radio" name="camera" value="best">
                  </div>
                  <div class="form-check">
                  <label class="form-check-label" for="camera">Niet belangrijk</label>
                      <input class="form-check-input" type="radio" name="camera" value="noChoice" checked>
                  </div>
    
                  <a class="btn btn-primary btn-sm col-1-md col-3-sm calculate">Bereken beste keuze</a>
                </div>
        </div>

        <div class="carousel-item">
            <h1>Je top 10</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Model</th>
                    <th scope="col">Besturingssysteem</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Opslag</th>
                    <th scope="col">Schermgrootte</th>
                  </tr>
                </thead>
                <tbody id="top-phones">
                </tbody>
              </table>
        </div>

    </div>
@stop
