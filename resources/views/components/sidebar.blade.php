<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{ asset('backend/html/') }}/assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>Admin</small>
                    </div>
                    <!-- <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="sign-in.html" title="Sign out"><i class="zmdi zmdi-power"></i></a> -->
                </div>
            </li>
            <li class="header">MAIN</li>
            <li class="active">
                <a href="{{ url('dashboard') }}">
                    <i class="zmdi zmdi-home"></i><span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('account/profile') }}">
                    <i class="zmdi zmdi-assignment-account"></i> <span> Data User</span>
                </a>
            </li>

            <li class="header">Autentikasi</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Data Autentikas</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{ url('autentikasi/roles') }}">Roles</a> </li>
                    <li><a href="{{ url('autentikasi/permissions') }}">Permission</a> </li>
                </ul>
            </li>

            <li class="header">Master</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Data Master</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{ url('master/dataStatis') }}">Statis</a> </li>
                    <li><a href="{{ url('master/settings') }}">Settings</a> </li>
                </ul>
            </li>

            <li class="header">Media</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-collection-folder-image"></i><span>Data Media</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{ url('media/clients') }}">Client</a> </li>
                    <li><a href="{{ url('media/gallery') }}">Gallery</a> </li>
                    <li><a href="{{ url('media/kategoriPortfolio') }}">Kategori Portfolio</a> </li>
                    <li><a href="{{ url('media/portfolio') }}">Portfolio</a> </li>
                    <li><a href="{{ url('media/testimoni') }}">Testimoni</a> </li>
                    <li><a href="{{ url('media/videos') }}">Video</a> </li>
                </ul>
            </li>


            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-view-web"></i><span>Web & Blog</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{ url('web/kategoriBerita') }}">Kategori Berita</a></li>
                    <li><a href="{{ url('web/berita') }}">Berita</a></li>
                    <li><a href="{{ url('web/produk') }}">Produk</a></li>
                    <li><a href="{{ url('web/tentangKami') }}">Tentang Kami</a></li>
                </ul>
            </li>

        </ul>
    </div>
</aside>