@extends('admin.app')

@section('content')
    <!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 fw-bold text-white">Blogs</h3>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalLong">
                                Create New Blog
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                            mb-3">
                            <div>
                                <h4 class="mb-0">Blogs</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                                rounded-1">
                                <i class="bi bi-briefcase fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">18</h1>
                            <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                            mb-3">
                            <div>
                                <h4 class="mb-0">Active Blog</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                                rounded-1">
                                <i class="bi bi-list-task fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">132</h1>
                            <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                            mb-3">
                            <div>
                                <h4 class="mb-0">Teams</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                                rounded-1">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">12</h1>
                            <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                            mb-3">
                            <div>
                                <h4 class="mb-0">Productivity</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                                rounded-1">
                                <i class="bi bi-bullseye fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">76%</h1>
                            <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white border-bottom-0 py-4">
                        <h4 class="mb-0">Active Projects</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Project name</th>
                                <th>Hours</th>
                                <th>priority</th>
                                <th>Members</th>
                                <th>Progress</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex
                                        align-items-center">
                                        <div>
                                            <div class="icon-shape icon-md border p-4
                                            rounded-1">
                                                <img
                                                    src="{{ asset('admin') }}/images/brand/dropbox-logo.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1"><a href="#"
                                                                        class="text-inherit">Dropbox Design
                                                    System</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">34</td>
                                <td class="align-middle"><span class="badge
                                    badge-warning">Medium</span></td>
                                <td class="align-middle">
                                    <div class="avatar-group">
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-1.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-2.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-3.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                            fs-6">+5</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-dark">
                                    <div
                                        class="float-start me-3">15%
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:15%" aria-valuenow="15"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex
                                        align-items-center">
                                        <div>
                                            <div class="icon-shape icon-md border p-4
                                            rounded-1">
                                                <img src="{{ asset('admin') }}/images/brand/slack-logo.svg"
                                                     alt="">
                                            </div>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1"><a href="#"
                                                                        class="text-inherit">Slack Team UI Design</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">47</td>
                                <td class="align-middle"><span class="badge
                                    badge-danger">High</span></td>
                                <td class="align-middle">
                                    <div class="avatar-group">
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-4.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-5.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-6.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                            fs-6">+5</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-dark">
                                    <div
                                        class="float-start me-3">35%
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:35%" aria-valuenow="35"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex
                                        align-items-center">
                                        <div>
                                            <div class="icon-shape icon-md border p-4
                                            rounded-1">
                                                <img
                                                    src="{{ asset('admin') }}/images/brand/github-logo.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1"><a href="#"
                                                                        class="text-inherit">GitHub Satellite</a></h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">120</td>
                                <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                <td class="align-middle">
                                    <div class="avatar-group">
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-7.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-8.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-9.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                            fs-6">+1</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-dark">
                                    <div
                                        class="float-start me-3">75%
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:75%" aria-valuenow="75"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex
                                        align-items-center">
                                        <div>
                                            <div class="icon-shape icon-md border p-4
                                            rounded-1">
                                                <img
                                                    src="{{ asset('admin') }}/images/brand/3dsmax-logo.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1"><a href="#"
                                                                        class="text-inherit">3D Character Modelling</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">89</td>
                                <td class="align-middle"><span class="badge
                                    badge-warning">Medium</span></td>
                                <td class="align-middle">
                                    <div class="avatar-group">
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-10.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-11.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-12.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                            fs-6">+5</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-dark">
                                    <div
                                        class="float-start me-3">63%
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:63%" aria-valuenow="63"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex
                                        align-items-center">
                                        <div>
                                            <div class="icon-shape icon-md border p-4 rounded
                                            bg-primary">
                                                <img
                                                    src="{{ asset('admin') }}/images/brand/layers-logo.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1"><a href="#"
                                                                        class="text-inherit">Webapp Design System</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">108</td>
                                <td class="align-middle"><span class="badge
                                    badge-success">Track</span></td>
                                <td class="align-middle">
                                    <div class="avatar-group">
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-13.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-14.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-15.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                            fs-6">+5</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-dark">
                                    <div
                                        class="float-start me-3">100%
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success"
                                                 role="progressbar" style="width:100%"
                                                 aria-valuenow="100" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-bottom-0">
                                    <div class="d-flex
                                        align-items-center">
                                        <div>
                                            <div class="icon-shape icon-md border p-4 rounded-1">
                                                <img
                                                    src="{{ asset('admin') }}/images/brand/github-logo.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1"><a href="#"
                                                                        class="text-inherit">Github Event Design</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle border-bottom-0">120</td>
                                <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                                <td class="align-middle border-bottom-0">
                                    <div class="avatar-group">
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-13.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-14.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                             src="{{ asset('admin') }}/images/avatar/avatar-15.jpg"
                                             class="rounded-circle">
                                        </span>
                                        <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                            fs-6">+1</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-dark border-bottom-0">
                                    <div
                                        class="float-start me-3">75%
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:75%" aria-valuenow="75"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#">View All Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->

    </div>


    <!-- Modal -->
    <div class="modal fade gd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        {{--                        <span aria-hidden="true">&times;</span>--}}
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- Input -->
                        <div class="mb-3">
                            <label class="form-label" for="textInput">Text</label>
                            <input type="text" id="textInput" class="form-control"
                                   placeholder="Input Text">
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label" for="passwordInput">Password</label>
                            <input type="password" id="passwordInput" class="form-control"
                                   value="********">
                        </div>
                        <!-- Helper Text -->
                        <div class="mb-3">
                            <label class="form-label">Helper text</label>
                            <input type="password" class="form-control" value="**********">
                            <span class="text-muted ">Your password must be 8-20
                                                               characters long, contain letters and numbers, and must not
                                                               contain spaces, special characters, or emoji.</span>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label" for="emailInput">Email</label>
                            <input type="email" id="emailInput" class="form-control"
                                   placeholder="name@example.com">
                        </div>
                        <!-- Select Option -->
                        <div class="mb-3">
                            <label class="form-label" for="selectOne">Select <span
                                    class="form-label-secondary">(Optional)</span></label>
                            <select id="selectOne" class="form-control">
                                <option>Choose an option</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <!-- Mulitple Select Option -->
                        <div class="mb-3">
                            <label class="form-label" for="selectTwo">Multiple
                                select</label>
                            <select id="selectTwo" class="form-control" size="3"
                                    multiple="">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <!-- Text Area -->
                        <div class="mb-3">
                            <label class="form-label" for="textareaInput">Textarea</label>
                            <textarea id="textareaInput" class="form-control"
                                      placeholder="Textarea field" rows="4"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<?php
