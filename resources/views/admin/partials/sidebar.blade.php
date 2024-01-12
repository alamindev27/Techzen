<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <img src="{{ asset(setting()->site_logo) }}" alt="AdminLTE Logo" class="brand-image  elevation-3">
      <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(auth()->user()->avatar) }}" class="img-circle elevation-2" alt="{{ auth()->user()->name }}">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.index') }}" class="nav-link {{ Request::url() == route('admin.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('banner.create') || Request::url() == route('banner.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('banner.create') || Request::url() == route('banner.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Banner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('banner.create') }}" class="nav-link {{ Request::url() == route('banner.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('banner.index') }}" class="nav-link {{ Request::url() == route('banner.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Banner</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('category.create') || Request::url() == route('category.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ Request::url() == route('category.create') || Request::url() == route('category.index') || Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview " style="{{ Request::url() == route('category.create') || Request::url() == route('category.index') || Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'display:block' : 'display:none' }}">
              <li class="nav-item has-treeview {{ Request::url() == route('category.create') || Request::url() == route('category.index') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::url() == route('category.create') || Request::url() == route('category.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Main Categories
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ Request::url() == route('category.create') || Request::url() == route('category.index') ? 'display:block' : 'display:none' }}">
                  <li class="nav-item">
                    <a href="{{ route('category.create') }}" class="nav-link  {{ Request::url() == route('category.create') ? 'active' : '' }}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link  {{ Request::url() == route('category.index') ? 'active' : '' }}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>List Categories</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview {{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Sub-Categories
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'display: block;' : 'display: none;' }}">
                  <li class="nav-item">
                    <a href="{{ route('subcategory.create') }}" class="nav-link {{ Request::url() == route('subcategory.create') ? 'active' : '' }}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Sub-Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('subcategory.index') }}" class="nav-link {{ Request::url() == route('subcategory.index') ? 'active' : '' }}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>List Sub-Categories</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>




          <li class="nav-item has-treeview {{ Request::url() == route('product.create') || Request::url() == route('product.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('product.create') || Request::url() == route('product.index') || Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('product.create') }}" class="nav-link {{ Request::url() == route('product.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link {{ Request::url() == route('product.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Low Stok Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Out of Stok Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Selling Products</p>
                </a>
              </li>
            </ul>
          </li>




          <li class="nav-item has-treeview {{ Request::url() == route('brand.create') || Request::url() == route('brand.index') || Request::url() == route('color.create') || Request::url() == route('color.index') || Request::url() == route('attributes.create') || Request::url() == route('attributes.index')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ Request::url() == route('brand.create') || Request::url() == route('brand.index') || Request::url() == route('color.create') || Request::url() == route('color.index') || Request::url() == route('attributes.create') || Request::url() == route('attributes.index')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Attributes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview " style="{{ Request::url() == route('attributes.create') || Request::url() == route('attributes.index') ? 'display:block' : 'display:none' }}">

              <li class="nav-item has-treeview {{ Request::url() == route('attributes.create') || Request::url() == route('attributes.index')  ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::url() == route('attributes.create') || Request::url() == route('attributes.index')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attributes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('attributes.create') }}" class="nav-link {{ Request::url() == route('attributes.create') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Attributes</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('attributes.index') }}" class="nav-link {{ Request::url() == route('attributes.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Attributes</p>
                      </a>
                    </li>
                  </ul>
              </li>



              <li class="nav-item has-treeview {{ Request::url() == route('brand.create') || Request::url() == route('brand.index')  ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::url() == route('brand.create') || Request::url() == route('brand.index')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Brands
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('brand.create') }}" class="nav-link {{ Request::url() == route('brand.create') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Brand</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('brand.index') }}" class="nav-link {{ Request::url() == route('brand.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Brand</p>
                      </a>
                    </li>
                  </ul>
              </li>


              <li class="nav-item has-treeview {{ Request::url() == route('color.create') || Request::url() == route('color.index') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::url() == route('color.create') || Request::url() == route('color.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Colors
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ Request::url() == route('color.create') || Request::url() == route('color.index') ? 'display: block;' : 'display: none;' }}">
                  <li class="nav-item">
                    <a href="{{ route('color.create') }}" class="nav-link {{ Request::url() == route('color.create') ? 'active' : '' }}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Color</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('color.index') }}" class="nav-link {{ Request::url() == route('color.index') ? 'active' : '' }}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>List Color</p>
                    </a>
                  </li>
                </ul>
              </li>

              @foreach (attributes() as $attribute)
              <li class="nav-item">
                <a href="{{ route('admin.attribute.addNew', $attribute->id) }}" class="nav-link {{ Request::url() == route('admin.attribute.addNew', $attribute->id) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ $attribute->name }}</p>
                </a>
              </li>
              @endforeach


            </ul>
          </li>




          <li class="nav-item has-treeview {{ Request::url() == route('coupon.create') || Request::url() == route('coupon.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('coupon.create') || Request::url() == route('coupon.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Coupon
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('coupon.create') }}" class="nav-link {{ Request::url() == route('coupon.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Coupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('coupon.index') }}" class="nav-link {{ Request::url() == route('coupon.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Coupon</p>
                </a>
              </li>
            </ul>
          </li>










          <li class="nav-item has-treeview {{ Request::url() == route('admin.setting.general') || Request::url() == route('admin.setting.security') || Request::url() == route('admin.setting.siteMeta') || Request::url() == route('admin.setting.site') || Request::url() == route('admin.setting.custom') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.setting.general') || Request::url() == route('admin.setting.security') || Request::url() == route('admin.setting.siteMeta') || Request::url() == route('admin.setting.site') || Request::url() == route('admin.setting.custom') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.setting.general') }}" class="nav-link {{ Request::url() == route('admin.setting.general') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.site') }}" class="nav-link {{ Request::url() == route('admin.setting.site') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.security') }}" class="nav-link {{ Request::url() == route('admin.setting.security') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Security Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.siteMeta') }}" class="nav-link  {{ Request::url() == route('admin.setting.siteMeta') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Meta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.custom') }}" class="nav-link  {{ Request::url() == route('admin.setting.custom') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Custom Code</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item has-treeview">
                <a href="{{ route('admin.index') }}" class="nav-link {{ Request::url() == route('admin.index') ? 'active' : '' }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>
                        Logout
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>









        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
