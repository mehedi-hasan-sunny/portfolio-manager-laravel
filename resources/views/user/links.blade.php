@extends('layouts.userLayout')

@section('content')
    @php
        $data = json_encode(["data-bs-toggle" => "modal", "data-bs-target" => "#createLinkModal"]);
    @endphp
    <div class="container mt-3">
        @include('components.userHeader', compact('data'))

        @if(session()->has('successMessage'))
            <div class="alert alert-success" role="alert">
                {{ session('successMessage')}}
            </div>
        @endif


        <div class="row">
            <div class="col-12 col-md-5">
                <h3>Links</h3>
            </div>
            <div class="col-12 col-md-7">
                <div class="rounded border overflow-hidden">
                    <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col" width="70%">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($links as $link)
                        <tr>
                            <td width="30%">
                                <i class="{{$link->icon_class}} me-2"></i>
                                {{$link->title}}
                            </td>
                            <td>
                                <div class="d-flex justify-center align-center gap-1">
                                    <x-button icon="las la-edit" data="{{$data}}" class="py-1 px-2 border-0"/>
                                    <x-button icon="las la-trash te" class="btn-outline-danger py-1 px-2 border-0"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>


        <div class="modal fade" id="createLinkModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Link</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('user.links.store')}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <x-form.input label="Title" name="title" required/>
                                </div>
                                <div class="col-12 col-md-6">
                                    <x-form.input label="Icon (class name)" name="icon_class" required/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <x-button href="https://icons8.com/line-awesome" rel="noreferrer" target="_blank"
                                          class="me-auto">
                            <span class="small">
                                Checkout <span class="fw-semibold">Line awesome icons</span>
                            </span>
                                </x-button>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection