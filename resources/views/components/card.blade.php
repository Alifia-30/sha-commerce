<div class="card h-100" style="width: 18rem;">
    @if($image)
        <img src="{{ asset($image) }}" class="card-img-top product-img" alt="Card Image">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $slot }}</p>
    </div>
</div>

<style>
    .product-img {
        height: 280px;
        object-fit: cover;
        width: 100%;
    }
</style>
