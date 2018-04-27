<div class="row flex-column align-items-start mb-28px ml-0">
    <div class="grid-header {{ isset($classes) ? $classes : '' }}">
        <span class="font_2 color-white font_2_grid"> {{ $title }}</span>
        <div class="gradient float-right"></div>
    </div>
    <div class="grid-block bg-grid-default">
        {!! $grid_content !!}
    </div>
</div>