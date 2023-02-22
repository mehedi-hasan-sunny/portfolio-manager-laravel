<div class="form-group">
    @php
        if (!isset($attributes['id'])){
            $attributes['id'] = uniqid("input-");
        }
    @endphp
    @isset($label)
        <label class="form-label" for="{{$attributes['id']}}">{{$label}}</label>
    @endisset
    @if($type !== 'textarea')
        <input id="{{$attributes['id']}}" class="form-control {{$class}}" type="{{$type}}" {{$attributes}}/>
    @else
        <textarea id="{{$attributes['id']}}" class="form-control {{$class}}"/>
    @endif
</div>