<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    
    @if(empty(Auth::user()->photo))
                        
      <img class="img-fluid" width="60" src="{{ asset('images/avatar-perfil.png')}}" alt="foto-perfil">
      @else
      <img class="img-fluid" width="60" src="{{ asset('storage/'.Auth::user()->photo) }}" alt="foto-perfil">
    @endif

    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
      @if (Auth::user()->role_id == 1)
        <p class="app-sidebar__user-designation">Administrador</p>          
      @else
        <p class="app-sidebar__user-designation">Usuario</p>          
      @endif
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item {{ setActive('mystore.home') }}" href="/mystore"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

    <li><a class="app-menu__item {{ setActive('reporte.index') }}" href="{{ route('reporte.index') }}"><i class="app-menu__icon fas fa-box-open"></i><span class="app-menu__label">Mis compras</span></a></li>


    @if(auth()->user()->hasRoles([1]))
    <li class="treeview"><a class="app-menu__item {{ setActive('product.index') }}" href="{{ route('product.index') }}"><i class="app-menu__icon fab fa-product-hunt"></i><span class="app-menu__label">Productos</span></a>
    </li>
    <li class="treeview"><a class="app-menu__item {{ setActive('suplier.index') }}" href="{{ route('suplier.index') }}"><i class="app-menu__icon fas fa-people-carry"></i><span class="app-menu__label">Proveedores</span></a>
      
    </li>
  </li>
  <li class="treeview"><a class="app-menu__item {{ setActive('sales.sales_index') }}" href="{{ route('sales.sales_index') }}"><i class="app-menu__icon fas fa-truck-moving"></i><span class="app-menu__label">Ventas</span></a>
    
  </li>

 
  <li class="treeview"><a class="app-menu__item" href="{{ route('user.index') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Usuarios</span></a>
    
  </li>
  
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('rol.index') }}"><i class="app-menu__icon fas fa-key"></i><span class="app-menu__label">Roles</span></a>
  
</li>
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('inventario.index') }}"><i class="app-menu__icon fas fa-cubes"></i><span class="app-menu__label">Inventario</span></a>
  
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('category.index_category') }}"><i class="app-menu__icon fas fa-project-diagram"></i><span class="app-menu__label">Categorias</span></a>
  
</li>
<li class="treeview"><a class="app-menu__item" href="{{ route('brands.index_brands') }}"><i class="app-menu__icon fas fa-braille"></i><span class="app-menu__label">Marcas</span></a>
  
</li>
-
  @endif
  </ul>
</aside>