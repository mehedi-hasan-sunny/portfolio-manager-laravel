@extends('layouts.userLayout')

@section('content')
    <div class="container mt-3">
        <div class="d-flex align-items-center justify-space-between mb-4 px-md-3 mx-md-5">
            <a href="#" class="d-flex align-items-center gap-1 text-decoration-none" data-bs-toggle="dropdown"
               aria-expanded="false">
                <div href="#">
                    <img class="mb-0 img-fluid img-thumbnail rounded-circle"
                         src="http://res.cloudinary.com/workvue2021/image/upload/v1659623189/hlbyyc3yxkigr2yirab3.jpg"
                         style="width:60px;height:60px" alt="Profile">
                </div>

                <ul class="dropdown-menu py-0 overflow-hidden shadow">
                    <li>
                        <button class="dropdown-item border-bottom">Upload</button>
                    </li>
                    <li>
                        <button class="dropdown-item border-bottom">Edit</button>
                    </li>
                    <li>
                        <button class="dropdown-item border-bottom">Logout</button>
                    </li>
                </ul>
                <div
                        class="text-decoration-none d-block h-100 fs-5 text-dark">
                    Mehedi Hasan
                </div>
            </a>
            <x-button icon="la la-edit" class="ms-auto">
                Edit profile
            </x-button>
        </div>
        <div class="d-flex flex-wrap gap-3 gap-md-5 mb-4 px-md-3 mx-md-5">
            @foreach($actionButtons as $actionButton)
                <x-button icon="{{$actionButton['icon']}}" data="{{json_encode($actionButton['data'] ?? null)}}"
                          class="user-dashboard-button border-2 {{$actionButton['class'] ?? 'btn-outline-dark'}}"
                          href="{{$actionButton['href'] ?? ''}}">
                    {{$actionButton['name']}}
                </x-button>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="createProjectModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Project</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data">
                        <x-form.input label="Title" name="title" required/>
                        <x-form.input label="Description" type="textarea" name="description" required/>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <x-form.input label="Start Date" name="startDate" type="date" required/>
                            </div>
                            <div class="col-12 col-md-6">
                                <x-form.input label="End Date" name="endDate" type="date"/>
                            </div>
                        </div>
                        <x-form.input accept="image/jpeg,image/png" label="Thumbnail" name="thumbnail" type="file"
                                      required/>
                        <x-form.input label="Images" name="images[]" type="file" multiple required/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection