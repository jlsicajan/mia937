@extends('layouts.app')

@section('content')
    @include('elements.mia-hdear', ['title' => 'Fotos'])
    <div class="container">
        @include('elements.for_grid.space_block')
        @include('elements.for_grid.middle_space_block')

        <div class="row">
            <div class="col-12 col-md-6 py-md-4 pd-2rem">
                @include('elements.for_grid.grid_left', ['title' => 'TITLE', 'grid_content' => ''])
                @include('elements.for_grid.grid_left', ['title' => 'TITLE', 'grid_content' => ''])
                @include('elements.for_grid.grid_left', ['title' => 'TITLE', 'grid_content' => ''])
            </div>
            <div class="col-12 col-md-6 py-md-4">
                @include('elements.for_grid.grid_right', ['title' => 'TITLE', 'grid_content' => ''])
                @include('elements.for_grid.grid_right', ['title' => 'TITLE', 'grid_content' => ''])
                @include('elements.for_grid.grid_right', ['title' => 'TITLE', 'grid_content' => ''])

            </div>
        </div>
    </div>
@endsection
