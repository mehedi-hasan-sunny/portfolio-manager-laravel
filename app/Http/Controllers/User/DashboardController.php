<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $actionButtons = [
            [
                "name" => "Create Project",
                "icon" => "las la-plus-circle",
                "class" => "btn-outline-primary",
                "data" => [
                    "data-bs-toggle" => "modal",
                    "data-bs-target" => "#createProjectModal"
                ]
            ],
            [
                "name" => "Link Categories",
                "icon" => "las la-link",
                "href" => route('user.links.view')
            ],
            [
                "name" => "Experiences",
                "icon" => "las la-trophy",
                "href" => route('user.experiences.view')
            ],
            [
                "name" => "Educations",
                "icon" => "las la-university",
                "href" => route('user.educations.view')
            ],
            [
                "name" => "Certifications",
                "icon" => "las la-school",
                "href" => route('user.certifications.view')
            ],
            [
                "name" => "Skills",
                "icon" => "las la-wave-square",
                "href" => route('user.skills.view')
            ],
            [
                "name" => "Testimonials",
                "icon" => "las la-comment",
                "href" => route('user.testimonials.view')
            ],
            [
                "name" => "Services",
                "icon" => "las la-briefcase",
                "href" => route('user.services.view')
            ],
            [
                "name" => "Blogs",
                "icon" => "las la-book-reader",
                "href" => route('user.blogs.view')
            ],
            [
                "name" => "Settings",
                "icon" => "las la-cog",
                "href" => route('user.settings.view')
            ]
        ];
        return view('user.dashboard', compact('actionButtons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
