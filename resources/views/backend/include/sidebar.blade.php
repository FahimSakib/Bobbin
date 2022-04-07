<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.') }}"> <img alt="image" src="asset/backend/assets/img/blb.png"
                    class="header-logo" /> <span class="logo-name">BOBBIN</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('admin.') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="shopping-bag"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.product.index') }}">Index</a></li>
                    <li><a class="nav-link" href="{{ route('admin.product.create') }}">Create</a></li>
                </ul>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="list"></i><span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.order.index') }}">Index</a></li>
                </ul>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="droplet"></i><span>Colors</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.color.index') }}">Index</a></li>
                    <li><a class="nav-link" href="{{ route('admin.color.create') }}">Create</a></li>

                </ul>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="scissors"></i><span>Sizes</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.size.index') }}">Index</a></li>
                    <li><a class="nav-link" href="{{ route('admin.size.create') }}">Create</a></li>

                </ul>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="tag"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.category.index') }}">Index</a></li>
                    <li><a class="nav-link" href="{{ route('admin.category.create') }}">Create</a></li>
                </ul>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="image"></i><span>Slider</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider.index') }}">Index</a></li>
                    <li><a class="nav-link" href="{{ route('admin.slider.create') }}">Create</a></li>
                </ul>
            </li>
            <li
                class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="printer"></i><span>Invoice Generator</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.invoice-generator.index') }}">Index</a></li>
                    <li><a class="nav-link" href="{{ route('admin.invoice-generator.create') }}">Create</a></li>
                </ul>
            </li>
            
        </ul>
    </aside>
</div>
