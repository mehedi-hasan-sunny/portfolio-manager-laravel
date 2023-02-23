@extends('layouts.adminLayout')

@php
    $actionButtons = [
        [
            "name" => "Create Project",
            "icon" => "las la-plus-circle",
            "class" => "btn-outline-primary",
        ],
        [
            "name" => "Link Categories",
            "icon" => "las la-link",
            "href" => route('admin.links.view')
        ],
        [
            "name" => "Experiences",
            "icon" => "las la-trophy",
            "href" => route('admin.experiences.view')
        ],
        [
            "name" => "Educations",
            "icon" => "las la-university",
            "href" => route('admin.educations.view')
        ],
        [
            "name" => "Certifications",
            "icon" => "las la-school",
            "href" => route('admin.certifications.view')
        ],
        [
            "name" => "Skills",
            "icon" => "las la-wave-square",
            "href" => route('admin.skills.view')
        ],
        [
            "name" => "Testimonials",
            "icon" => "las la-comment",
            "href" => route('admin.testimonials.view')
        ],
        [
            "name" => "Services",
            "icon" => "las la-briefcase",
            "href" => route('admin.services.view')
        ],
        [
            "name" => "Blogs",
            "icon" => "las la-book-reader",
            "href" => route('admin.blogs.view')
        ],
        [
            "name" => "Settings",
            "icon" => "las la-cog",
            "href" => route('admin.settings.view')
        ]
    ];
@endphp
@section('content')
    <div class="container">
        <x-form.input label="test" value="" disabled/>
        <div class="row justify-content-center gap-xs-1 gap-4 mb-4 px-3 mx-5">
            @foreach($actionButtons as $actionButton)
                <x-button icon="{{$actionButton['icon']}}"
                          class="admin-dashboard-button border-2 {{$actionButton['class'] ?? 'btn-outline-dark'}}"
                          href="{{$actionButton['href'] ?? ''}}">
                    {{$actionButton['name']}}
                </x-button>
            @endforeach
        </div>
    </div>
@endsection