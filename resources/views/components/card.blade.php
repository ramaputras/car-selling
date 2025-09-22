@props(['color' => 'blue', 'bgColor' => 'white'])


<div {{$attributes->class("card  card-text-$color card-bg-$bgColor")}}>
    <div {{ $title->attributes->class("card-header")}}>{{ $title }}</div>
    @if ($slot->isEmpty())
        <p>Please provide something</p>  
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
