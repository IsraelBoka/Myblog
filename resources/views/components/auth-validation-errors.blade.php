@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
            @foreach ($errors->all() as $error)
            <div class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                <span class="font-medium">Erreur !</span> {{$error}}
            </div>            
            @endforeach
    </div>
@endif
