<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"></i> Cooperativa Guayacán Guastatoya</a>
                    </li>
                    <li class="nav-title">
                        Menú Principal
                    </li>

                   
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('categoria')}}" onclick="event.preventDefault(); document.getElementById('categoria-form').submit();"><i class="fa fa-list"></i> Categorías</a>
                            
                            <form id="categoria-form" action="{{url('categoria')}}" method="GET" style="display: none;">
                            
                            </form>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('producto')}}" onclick="event.preventDefault(); document.getElementById('producto-form').submit();"><i class="fa fa-list"></i> Productos</a>
                            
                            <form id="producto-form" action="{{url('producto')}}" method="GET" style="display: none;">
                        
                            </form>
                    </li>
                      
                   

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('cliente')}}" onclick="event.preventDefault(); document.getElementById('cliente-form').submit();"><i class="fa fa-users"></i> Clientes</a>
                        <form id="cliente-form" action="{{url('cliente')}}" method="GET" style="display: none;">
                            
                         </form>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('rol')}}" onclick="event.preventDefault(); document.getElementById('rol-form').submit();"><i class="fa fa-list"></i> Roles</a>
                        <form id="rol-form" action="{{url('rol')}}" method="GET" style="display: none;">
                            
                         </form> 
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user')}}" onclick="event.preventDefault(); document.getElementById('user-form').submit();"><i class="fa fa-user"></i> Usuarios</a>
                        <form id="user-form" action="{{url('user')}}" method="GET" style="display: none;">
                            {{csrf_field()}} 
                         </form> 
                    </li>                         
            
                            
                    
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>