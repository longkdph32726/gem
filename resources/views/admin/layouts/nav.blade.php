<div class="startbar d-print-none">
    <div >
        <a href="index.html" class="logo">
            <span class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/logo_admin.png') }}" alt="logo-small" class="logo-sm w-100" style="height: 150px; object-fit: cover;">
            </span>
        </a>
    </div>
    <div class="startbar-menu" >
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <span>Admin</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="bi bi-bar-chart menu-icon"></i>
                            <span>Thống kê</span>
                        </a>
                        <div class="collapse " id="sidebarDashboards">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Thống kê</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAdvancedUI">
                            <i class="bi bi-box-seam menu-icon"></i>
                            <span>Quản lý danh mục</span>
                        </a>
                        <div class="collapse " id="sidebarElements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('category.index') }}">Danh sách danh mục</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('category.create') }}">Thêm danh mục</a>
                                </li>                       
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAdvancedUI">
                            <i class="bi bi-box-seam menu-icon"></i>
                            <span>Quản lý thuộc tính</span>
                        </a>
                        <div class="collapse " id="sidebarElements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('attributes') }}">Danh sách thuộc tính</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('attributes') }}">Thêm thuộc tính</a>
                                </li>                        
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAdvancedUI">
                            <i class="bi bi-box-seam menu-icon"></i>
                            <span>Quản lý sản phẩm</span>
                        </a>
                        <div class="collapse " id="sidebarElements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product.index') }}">Danh sách sản phầm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product.create') }}">Thêm sản phẩm</a>
                                </li>                       
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarForms">
                            <i class="bi bi-cart menu-icon"></i>
                            <span>Quản lý đơn hàng</span>
                        </a>
                        <div class="collapse " id="sidebarForms">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('order') }}">Danh sách đơn hàng</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="bi bi-person menu-icon"></i>
                            <span>Quản lý tài khoản</span>
                        </a>
                        <div class="collapse " id="sidebarCharts">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user') }}">Danh sách tài khoản</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarBast" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="bi bi-chat-dots menu-icon"></i>
                            <span>Quản lý Bình luận</span>
                        </a>
                        <div class="collapse " id="sidebarBast">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('comment') }}">Danh sách bình luận</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>  
</div>