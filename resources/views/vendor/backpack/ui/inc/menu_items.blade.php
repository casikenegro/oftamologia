{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Pacientes" icon="la la-question" :link="backpack_url('patient')" />
<x-backpack::menu-item title="Usuarios" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Citas" icon="la la-question" :link="backpack_url('appointment')" />
<x-backpack::menu-item title="Proveedores" icon="la la-question" :link="backpack_url('providers')" />
<x-backpack::menu-item title="Insumos" icon="la la-question" :link="backpack_url('supply')" />
