<div class="form-group mb-3">
    @php
        if (!isset($attributes['id'])){
            $attributes['id'] = uniqid("input-");
        }
        if (!isset($errorMessage)){
            $attributes['class'] += ' is-invalid';
        }
    @endphp
    @isset($label)
        <label class="form-label" for="{{$attributes['id']}}">
            {{$label}} @if(!isset($attributes['required']))<span class="text-muted">(Optional)</span>@endif
        </label>
    @endisset
    @if($type !== 'textarea')
        <input  id="{{$attributes['id']}}" class="form-control {{$attributes['class'] ?? ''}}" type="{{$type}}"
                {{$attributes->except(['id', 'class'])}}/>
    @else
        <textarea id="{{$attributes['id']}}" class="form-control {{$attributes['class'] ?? ''}}"
                {{$attributes->except(['id', 'class'])}}></textarea>
    @endif
</div>