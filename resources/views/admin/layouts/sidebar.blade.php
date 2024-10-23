<nav id="sidebarMenu" class="d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="/admin" class="{{ request()->routeIs('admin.home') ? 'active' : '' }} list-group-item list-group-item-action py-2" data-mdb-ripple-init aria-current="true">
                <i class="fas fa-users fa-fw me-3"></i><span>Main dashboard</span>
            </a>
            <a href=""
                class="list-group-item list-group-item-action py-2"
                data-mdb-ripple-init>
                <i class="fas fa-users fa-fw me-3"></i><span>Tetangga Anda </span></a>
            <a href="/data-warga"
                class="{{ request()->is('data-warga') ? 'active' : '' }} list-group-item list-group-item-action py-2"
                data-mdb-ripple-init><i class="fas fa-users fa-fw me-3"></i><span>Data Warga</span></a>
            <!-- <a href=" #" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init>
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fas fa-building fa-fw me-3"></i><span>Partners</span></a> -->
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fas fa-calendar fa-fw me-3"></i><span>Agenda Gang</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fas fa-money-bill fa-fw me-3"></i><span>Keuangan Gang</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fa-sharp fa-solid fa-user me-4"></i><span>Users</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2" data-mdb-ripple-init><i
                    class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
        </div>
    </div>
</nav>