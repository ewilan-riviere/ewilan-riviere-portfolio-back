<?php

use App\Helpers\DashboardItem;

$skills = [
    new DashboardItem('skill','fa fa-book','Compétences',false,null),
    new DashboardItem('technology','fa fa-code','Technologies',false,null),
    new DashboardItem('category','fa fa-tags','Catégories',false,null),
    new DashboardItem('formation','fa fa-graduation-cap','Formations',false,null),
];

$contents = [
    new DashboardItem('social','fa fa-share-alt','Réseaux sociaux',false,null),
    new DashboardItem('text','fa fa-align-left','Textes',false,null),
    new DashboardItem('media','fa fa-photo-video','Médias',false,null),
];

$dashboard = [
    new DashboardItem('dashboard','fa fa-columns',trans('backpack::base.dashboard'),false,null),
];

$fileManager = [
    new DashboardItem('elfinder','fa fa-folder-open',trans('backpack::crud.file_manager'),false,null),
];

$body = [
    new DashboardItem('project','fa fa-folder','Projets',false,null),
    new DashboardItem(null,'fa fa-book','Connaissances',true,$skills),
    new DashboardItem(null,'fa fa-clone','Contenus',true,$contents)
];

?>

@foreach ($dashboard as $item)
    <li class='nav-item'>
        <a
            class='nav-link'
            href='{{ backpack_url($item->url) }}'
        >
            <i class='nav-icon {{ $item->icon }}'></i>
            {{ $item->name }}
        </a>
    </li>
@endforeach

@foreach ($fileManager as $item)
    <li class='nav-item'>
        <a
            class='nav-link'
            href='{{ backpack_url($item->url) }}'
        >
            <i class='nav-icon {{ $item->icon }}'></i>
            {{ $item->name }}
        </a>
    </li>
@endforeach

<li class="nav-title mt-3">
    <i class='fa fa-globe-africa mr-2'></i> Global
</li>

<li class='nav-item'>
    <a
        class='nav-link'
        href='#'
    >
        <i class='nav-icon fab fa-firefox'></i>
        En attente
    </a>
</li>

<li class="nav-title mt-3">
    <i class='fa fa-share-alt mr-2'></i> Portfolio
</li>

@foreach ($body as $item)
    @if (!$item->activeSubmenu)
        <li class='nav-item'>
            <a
                class='nav-link'
                href='{{ backpack_url($item->url) }}'
            >
                <i class='nav-icon {{ $item->icon }}'></i>
                {{ $item->name }}
            </a>
        </li>
    @else
        <li class='nav-item nav-dropdown'>
            <a
                class='nav-link nav-dropdown-toggle'
                href="#"
            >
                <i class='nav-icon {{ $item->icon }}'></i>
                {{ $item->name }}
            </a>
            <ul class="nav-dropdown-items">
                @foreach ($item->submenu as $skill)
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ backpack_url($skill->url) }}"
                        >
                            <i class="nav-icon {{ $skill->icon }}"></i>
                            <span>{{ $skill->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
@endforeach

<li class="nav-title mt-3">
    <i class='fa fa-seedling mr-2'></i> Monstera
</li>

<li class='nav-item'>
    <a
        class='nav-link'
        href='#'
    >
        <i class='nav-icon fa fa-seedling'></i>
        En attente
    </a>
</li>
