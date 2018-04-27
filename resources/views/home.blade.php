@extends('layouts.app')

@section('content')
    <div class="container-fluid mia-header">
        <div class="row justify-content-start">
            <div class="col-md-3 d-flex flex-column justify-content-center">
               <div class="title-container border-bottom-white border-top-white">
                   <h3 class="color-white display-2 font_3">Escucha</h3>
                   <h3 class="color-white display-2 font_3">Tu</h3>
                   <h3 class="color-white display-2 font_3">Corazon</h3>
               </div>
            </div>
            <div class="col-md-9"></div>
        </div>
    </div>
    <div class="container">
       @include('elements.for_grid.space_block')
       @include('elements.for_grid.middle_space_block')

        <div class="row">
            <div class="col-12 col-md-6 py-md-4 pd-2rem">
                @include('elements.for_grid.card_left', ['grid_content' => ''])
                @include('elements.for_grid.grid_left', ['title' => 'NOTICIAS', 'grid_content' => ''])
                @include('elements.for_grid.grid_left', ['title' => 'TITLE', 'grid_content' => ''])
                @include('elements.for_grid.grid_left', ['title' => 'TITLE', 'grid_content' => '', 'classes' => 'grid-header-primary'])
            </div>
            <div class="col-12 col-md-6 py-md-4">
                @include('elements.for_grid.grid_right', ['title' => 'PROGRAMACIÓN', 'grid_content' => ''])
                @include('elements.for_grid.grid_right', ['title' => 'TITLE', 'grid_content' => '', 'classes' => 'grid-header-primary'])
                @include('elements.for_grid.grid_right', ['title' => 'TITLE', 'grid_content' => ''])
                @include('elements.for_grid.card_right', ['grid_content' => ''])

            </div>
        </div>
    </div>
@endsection
