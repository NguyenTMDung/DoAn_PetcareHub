<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="#" style="padding: 0;">Chó </a>
        <ul class="sub-menu" id="dog_cate">
            {{-- menu chó --}}
        </ul>
    </li>
    <li><a class="dropdown-item" href="#" style="padding: 0;">Mèo</a>
        <ul class="sub-menu" id="meow_cate">
            {{-- menu meow --}}
        </ul>
    </li>
</ul>

<script>
    function fetchCategory(url, containerId) {
        var container = document.getElementById(containerId);
        container.innerHTML = '';        
        $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    data.cate.forEach(function(cate) {
                        var li = document.createElement('li');
                        var a = document.createElement('a');
                        a.href = "{{ URL::to('/san-pham') }}/";
                        // + cate.id
                        a.textContent = cate.name; 
                        li.appendChild(a);
                        container.appendChild(li);
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
    }
    //Gọi hàm lấy danh mục cho chó và meow
    fetchCategory('api/category', 'dog_cate');
    fetchCategory('api/category', 'meow_cate');

</script>