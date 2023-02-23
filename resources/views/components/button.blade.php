@if(isset($attributes['href']) && !empty($attributes['href']))
    <a href="{{$attributes['href']}}"
       class="btn btn-large btn btn-outline-primary {{$attributes['class'] ?? ''}}" {{$attributes->except(['class', 'icon'])}}>
        @isset($attributes['icon'])
            <i class="{{$attributes->get('icon')}}"></i>
        @endisset
        <span class="fw-500">{{ $slot }}</span>
    </a>
@else
     <button class="btn btn-large btn btn-outline-primary {{$attributes['class'] ?? ''}}" {{$attributes->except(['class', 'icon'])}}>
        @isset($attributes['icon'])
            <i class="{{$attributes->get('icon')}}"></i>
        @endisset
        <span class="fw-500">{{ $slot }}</span>
    </button>
@endif




