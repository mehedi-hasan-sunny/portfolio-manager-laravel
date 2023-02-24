@php
    if (isset($attributes['data']) && !empty($attributes['data'])) {
        $dataAttrs = json_decode(htmlspecialchars_decode($attributes["data"]), true);
    }
    $attributesExcept = $attributes->except(['class', 'icon', 'href', 'data'])->merge($dataAttrs ?? []);
@endphp

@if(isset($attributes['href']) && !empty($attributes['href']))
    <a href="{{$attributes['href']}}"
       class="btn btn-large btn btn-outline-primary {{$attributes['class'] ?? ''}}" {{$attributesExcept}}>
        @isset($attributes['icon'])
            <i class="{{$attributes->get('icon')}}"></i>
        @endisset
        <span class="fw-500">{{ $slot }}</span>
    </a>
@else
    <button class="btn btn-large btn btn-outline-secondary {{$attributes['class'] ?? ''}}" {{$attributesExcept}}>
        @isset($attributes['icon'])
            <i class="{{$attributes->get('icon')}}"></i>
        @endisset
        <span class="fw-500">{{ $slot }}</span>
    </button>
@endif




