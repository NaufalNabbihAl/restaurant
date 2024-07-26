@props(['title', 'price', 'link', 'buttonText', 'alt'])

<div {{ $attributes->merge(['class' => 'card w-64 flex flex-col items-center']) }}>
    <div class="w-full p-6">
        <img src="{{ $slot }}" class="rounded-lg" alt="{{ $alt }}">
    </div>
    <div class="card-body text-center">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $price }}</p>
        <a href="{{ $link }}" class="btn btn-primary">{{ $buttonText }}</a>
    </div>
</div>


{{-- 
{{ $slot }} akan digantikan dengan konten yang dimasukkan ke dalam slot saat menggunakan component.
@props digunakan untuk mendefinisikan properti yang diteruskan ke component.
 --}}