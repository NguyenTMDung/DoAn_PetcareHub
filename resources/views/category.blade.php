<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="#" style="padding: 0;">Chó </a>
        <ul class="sub-menu" id="dog_cate">
            {{-- @foreach($cate as $catedata)
            <li><a href="{{URL::to('/san-pham')}}">{{$catedata->name}}</a></li>
            @endforeach --}}
        </ul>
    </li>
    <li><a class="dropdown-item" href="#" style="padding: 0;">Mèo</a>
        <ul class="sub-menu">
            <li><a href="{{URL::to('/san-pham')}}">Thức ăn</a></li>
            <li><a href="#">Đồ dùng thú cưng</a></li>
            <li><a href="#">Thời trang</a></li>
            <li><a href="#">Sản Phẩm làm đẹp</a></li>
        </ul>
    </li>
</ul>

<script>
    function fetchCategory(url, containerId) {
        var container = document.getElementById(containerId);
        fetch(url)
            .then(response => response.json())
            .then(data => {
                data.cate.forEach(catedata => {
                    var li = document.createElement('li');
                    var a = document.createElement('a');
                    a.href = "{{ URL::to('/san-pham') }}/" ;
                    // + category.id;
                    a.textContent = catedata.name;
                    li.appendChild(a);
                    container.appendChild(li);
                });
            })
            .catch(error => console.error('Error:', error));
    }

    // Gọi hàm fetchCategories để lấy danh mục cho chó
    fetchCategory('DoAn_PetcareHub//api/category', 'dog_cate');
</script>