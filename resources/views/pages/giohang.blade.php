@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleCart.css')}}">
<div id="frame">
    <div id="title">
        <h3>Giỏ Hàng</h3>
    </div>
    <div id="orders">
        <form>
            <table>
                @foreach ($cartItems as $item)
                <tr>
                    <td style="flex-grow: 1;"><input type="checkbox" name="tick" class="tick" value="{{$item->id}}"></td>
                    <td class="product" style="flex-grow: 4;">
                        <div style="width: 10vw;">
                            <img src="public/storage/products/{{$item->image}}" alt="" class="img-product" style="width: 10vw;">
                        </div>
                        <div class="detail-product">
                            <div class="text-truncate-container">
                                <p>{{$item->name}}</p>
                            </div>
                            <select class="select-kind" name ="size" onchange="updatePrice(this)" data-product-id="{{ $item->product_id }}" data-id="{{$item->id}}">
                                @foreach( $sizes as $size)
                                <option value="{{ $size }}" {{ $size == $item->size ? 'selected' : '' }}>{{ $size }}</option>
                                @endforeach
                            </select>
                            <div class="pro-price" id="selected-price-{{$item->id}}">
                               Giá: {{$item->price}} VNĐ
                            </div>
                            <div class="quantitys" style="width: 1vw;">
                                <input type="number" name="id2" id="quantity" value="{{$item->num}}" min="1" max="20">
                            </div>
                        </div>
                    </td>
                    <td style="flex-grow: 1;">
                        <button class="delete-pro" onclick="deleteCartItem({{ $item->id }})"><i class="bi bi-dash-circle fa-2x"></i></button>
                    </td>
                </tr>
                @endforeach

            </table>

        </form>
    </div>
</div>
<form id="checkout-form" action="{{ route('checkout') }}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="selected_items" id="selected_items">
    <button type="submit" name="pay" id="pay">Mua hàng</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

        $(document).ready(function() {
                    // Gán sự kiện change cho các checkbox với class tick
                $(document).on('change', '.tick', function() {
                    var selectedItems = [];

                    // Lặp qua tất cả các checkbox đã chọn và lấy id của sản phẩm tương ứng
                    $('.tick:checked').each(function() {
                        selectedItems.push($(this).val());
                    });

                    // Cập nhật danh sách sản phẩm đã chọn vào trường ẩn
                    $('#selected_items').val(selectedItems.join(','));

                    console.log(selectedItems); // In ra console để kiểm tra
                });
            });
            function updatePrice(select) {
                    var selectedSize = select.value; // Lấy kích thước đã chọn
                    var productId = select.getAttribute('data-product-id'); // Lấy id của sản phẩm
                    var cartId = select.getAttribute('data-id'); // Lấy id của sản phẩm


                // Gửi yêu cầu Ajax để lấy giá mới dựa trên kích thước và product_id
                $.ajax({
                    type: 'GET',
                    url: '/DoAn_PetcareHub/get-product-price',
                    data: {
                        product_id: productId,
                        size: selectedSize,
                        
                    },
                    success: function(response) {
                        // Nếu yêu cầu thành công, cập nhật giá sản phẩm trên giao diện
                        $('#selected-price-'+ cartId ).text('Giá: ' + response.price + ' VNĐ');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

    function deleteCartItem(cartItemId) {
    // Gửi yêu cầu Ajax để xóa sản phẩm
        $.ajax({
            type: 'POST',
            url: '/DoAn_PetcareHub/delete-cart-item',
            data: {
                _token: '{{ csrf_token() }}',
                cart_item_id: cartItemId
            },
            success: function(response) {
                // Nếu yêu cầu thành công, làm mới trang để cập nhật giỏ hàng
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

</script>
@endsection