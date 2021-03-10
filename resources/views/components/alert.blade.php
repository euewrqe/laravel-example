<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    this is alert component
    ddd

    <ul>
        <li>type:{{$type}}</li>
        <li>message:{{$message}}</li>
    </ul>

    <select name="fruit" id="fruit" {{ $attributes }}>
        @foreach ($options as $fruit=>$desc)
            <option {{ $isSelected($fruit) ? "selected" : '' }} value="{{ $fruit }}">
                {{ $desc }}
            </option>
        @endforeach
    </select>
    <span class="alert-title">{{ $title }}</span>
    @props(['other'=>"info"])
    {{ $other }}
    <button>
        {{ $slot }}
    </button>

</div>