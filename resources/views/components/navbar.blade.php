<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId" role="tablist">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-fill"></i>{{ Auth::user()->username }}</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/logout">logout</a>
        </div>
    </li>

    <li class="nav-item" role="presentation">
        <a href="/kasir" class="nav-link {{ $header == 'kasir' ? 'text-primary' : 'text-dark'}}"><i class="bi bi-laptop-fill"></i> kasir</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="/produk" class="nav-link {{ $header == 'produk'? 'text-primary' : 'text-dark' }}"><i class="bi bi-box-seam-fill"></i> produk</a>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">

    </div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
    var triggerEl = document.querySelector("#navId a");
    bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>
