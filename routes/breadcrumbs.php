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
