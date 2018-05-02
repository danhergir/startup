<div class="row">
    <div class="container">
        @foreach($products as $product)
        <p class="description">
            {{ $product->description }}
        </p>
        @endforeach
    </div>
</div>