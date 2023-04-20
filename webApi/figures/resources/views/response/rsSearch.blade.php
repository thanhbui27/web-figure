<div class="box-prominent">
    <div class="box-container product-attention widthAuto">
        <x-product idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" img="{{ $product['image'] }}" price="{{ ($product['price_new'] === null ) ? $product['price_old'] : $product['price_new'] }}" raiting="{{ $product['danhgia'] === null ? 5 :$product['danhgia'] }}" soluong="{{ $product['soluong'] }}" />
    </div>
</div>