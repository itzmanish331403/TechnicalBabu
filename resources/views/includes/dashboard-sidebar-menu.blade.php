<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>one2deals</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"> {{ Auth::user()->name??0 }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route ('dashboard')}}" class="nav-item nav-link active">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route ('user.index') }}" class="nav-item nav-link active">
                <i class="fa fa-user-alt me-2"></i>User List</a>
            <a href="{{route ('product.index') }}" class="nav-item nav-link active">
                <i class="fa fa-tachometer-alt me-2"></i>Product List</a>

        </div>
</div>
</nav>
</div>