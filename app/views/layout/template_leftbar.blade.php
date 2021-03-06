<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL::route('home') }}">
                    <i class="menu-icon icon-home"></i>Home
                </a>
            </li>

            @if (Auth::check() && Auth::user()->is_student)
                <li>
                    <a href="{{ URL::route('all-books') }}">
                        <i class="menu-icon icon-th-list"></i>Tất Cả Sách Trong Thư Viện
                    </a>
                </li>

            @endif

            @if (Auth::check() && !Auth::user()->is_student)
                <li>
                    <a href="{{ URL::route('all-books') }}">
                        <i class="menu-icon icon-th-list"></i>Tất Cả Sách Trong Thư Viện
                    </a>
                </li>
                <li>
                    <a href="{{ URL::route('add-books') }}">
                        <i class="menu-icon icon-folder-open-alt"></i>Thêm Sách
                    </a>
                </li>
                <li>
                    <a href="{{ URL::route('add-category') }}">
                        <i class="menu-icon icon-folder-open"></i>Thêm Danh Mục Sách
                    </a>
                </li>
                <li>
                    <a href="{{ URL::route('book-orders-list') }}">
                        <i class="menu-icon icon-th-list"></i>Quản Lý Phiếu Mượn Sách Online
                    </a>
                </li>
                <li>
                    <a href="{{ URL::route('issue-return') }}">
                        <i class="menu-icon icon-signout"></i>Quản Lý Mượn/Trả Sách
                    </a>
                </li>
                <li>
                    <a href="{{ URL::route('currently-issued') }}">
                        <i class="menu-icon icon-list-ul"></i>Chi Tiết Sách Đã Cho Mượn
                    </a>
                </li>
            @endif
            
        </ul>
        
        <ul class="widget widget-menu unstyled">
            @if (Auth::check() && Auth::user()->is_student)
                <li>
                    <a href="/{{ Auth::user()->username }}/profile"><i class="menu-icon icon-user"></i>Trang cá nhân</a>
                </li>
                <li>
                    <a href="/{{ Auth::user()->username }}/profile/edit"><i class="menu-icon icon-edit"></i>Cập Nhật Thông Tin Cá Nhân</a>
                </li>
            @endif
            <li><a href="/change-password"><i class="menu-icon icon-edit"></i>Đổi Mật Khẩu</a></li>
            <li><a href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i>Đăng Xuất </a></li>
        </ul>
    </div>
</div>