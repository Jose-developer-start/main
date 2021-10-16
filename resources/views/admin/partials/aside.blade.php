<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar img-thumbnail" width="70" src="{{ asset('storage/'.Auth::user()->photo )}}" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
      <p class="app-sidebar__user-designation">Administrador</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item {{ setActive('mystore.home') }}" href="/mystore"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

    <li><a class="app-menu__item {{ setActive('reporte.index') }}" href="{{ route('reporte.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Mis compras</span></a></li>


    @if(auth()->user()->hasRoles([1]))
    <li class="treeview"><a class="app-menu__item {{ setActive('product.index') }}" href="{{ route('product.index') }}"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Productos</span></a>
    </li>
    <li class="treeview"><a class="app-menu__item {{ setActive('suplier.index') }}" href="{{ route('suplier.index') }}"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Proveedores</span></a>
      
    </li>
  </li>
  <li class="treeview"><a class="app-menu__item {{ setActive('sales.sales_index') }}" href="{{ route('sales.sales_index') }}"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Ventas</span></a>
    
  </li>

 
  <li class="treeview"><a class="app-menu__item" href="{{ route('user.index') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Usuarios</span></a>
    
  </li>
  
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('rol.index') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Roles</span></a>
  
</li>
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('inventario.index') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Inventario</span></a>
  
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('category.index_category') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Categorias</span></a>
  
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('brands.index_brands') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Marcas</span></a>
  
</li>
-
  @endif
  </ul>
</aside>