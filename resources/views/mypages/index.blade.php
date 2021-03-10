<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    mypage:index

    <form action="/mypage_post" method="post">
        @csrf
        <input type="text" name="username">
        <input type="text" name="password">
        <button>submit</button>
    </form>
    
    <!--component-->

    <x-alert type="error" message="this is a error alert"
        selected="orange" class="abcd" other="this is other prop" >
        <x-slot name="title">
            Server Error
        </x-slot>
        submit222
    </x-alert>

    <x-package-input />
    <x-package-badge />

    {{--
    @if()
    @elseif()
    @else()
    @endif

    @unless()
    @endunless

    @isset()
    @endisset()
    @empty()
    @endempty

    @json(data)
    {{ data1 }}/@{{data2}}

    @auth
        
    @endauth
    @env("")
    @endenv

    @switch()
        @case()
            @break
        @default

    @endswitch

    @for(;;)
    @endfor
    @foreach(as)
    @endforeach

    @forelse(as)
    @empty
    @endforelse

    @while()
        {{$loop->index}}
        {{ $loop->iteration }}
        {{ $loop->count }}
        {{ $loop->first }}
        {{ $loop->even }}
        {{ $loop->parent }}

    
     @endwhile

    @include('name')
    @includeIf('view.name', ['some' => 'data'])
    @includeWhen($boolean, 'view.name', ['some' => 'data'])
    @includeUnless($boolean, 'view.name', ['some' => 'data'])

    @each('view.name', $collection, 'variable', 'view.empty')

    @once
    @endonce
    @php
        
    @endphp
     php artisan make:component Forms/Input --}}

</body>
</html>