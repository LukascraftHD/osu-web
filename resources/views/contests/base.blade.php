{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@php
    $links = [
        [
            'url' => route('contests.index'),
            'title' => trans('layout.header.contests.index'),
        ],
        [
            'url' => $contestMeta->url(),
            'title' => $contestMeta->name,
        ],
    ];
@endphp

@extends('master', [
    'currentSection' => 'community',
    'currentAction' => 'contests',
    'title' => "Contest: {$contestMeta->name}",
    'pageDescription' => strip_tags(markdown($contestMeta->currentDescription())),
    'canonicalUrl' => $contestMeta->url(),
    'opengraph' => [
        'title' => $contestMeta->name,
        'section' => trans('layout.menu.community.contests'),
        'image' => $contestMeta->header_url,
    ],
])

@section('content')
    @include('objects.css-override', ['mapping' => [
        '.header-v4--contests .header-v4__bg' => $contestMeta->header_url,
    ]])

    @include('layout._page_header_v4', ['params' => [
        'links' => $links,
        'linksBreadcrumb' => true,
        'section' => trans('layout.header.contests._'),
        'subSection' => $contestMeta->name,
        'theme' => 'contests',
    ]])

    <div class="osu-page osu-page--contest">
        <div class='contest'>
            @yield('contest-content')
        </div>
    </div>
@endsection
