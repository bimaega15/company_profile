<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Roles', route('autentikasi.roles.index'));
});

Breadcrumbs::for('permissions', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Permissions', route('autentikasi.permissions.index'));
});

Breadcrumbs::for('settings', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Settings', route('master.settings.index'));
});

Breadcrumbs::for('dataStatis', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Data Statis', route('master.dataStatis.index'));
});
Breadcrumbs::for('gallery', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Gallery', route('media.gallery.index'));
});
Breadcrumbs::for('kategoriPortfolio', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Kategori Portofolio', route('media.kategoriPortfolio.index'));
});
Breadcrumbs::for('portfolio', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Portfolio', route('media.portfolio.index'));
});
Breadcrumbs::for('clients', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Clients', route('media.clients.index'));
});
Breadcrumbs::for('testimoni', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Testimoni', route('media.testimoni.index'));
});
Breadcrumbs::for('videos', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Videos', route('media.videos.index'));
});
Breadcrumbs::for('tentangKami', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Tentang Kami', route('web.tentangKami.index'));
});
Breadcrumbs::for('profileSingkat', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Profile Singkat', route('web.profileSingkat.index'));
});
Breadcrumbs::for('produk', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Produk', route('web.produk.index'));
});
Breadcrumbs::for('kategoriBerita', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Kategori Berita', route('web.kategoriBerita.index'));
});
Breadcrumbs::for('berita', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Berita', route('web.berita.index'));
});
