@extends('layouts.app')

<div class="main main-app p-3 p-lg-4">
<div class="container">
    <!-- Dashboard Menus  -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <ol class="breadcrumb fs-sm mb-1">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Storage Management</li>
            </ol>
            <h4 class="main-title mb-0">Welcome to Dashboard</h4>
        </div>

        <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
            <button type="button" class="btn btn-white btn-icon"><i class="ri-share-line fs-18 lh-1"></i></button>
            <button type="button" class="btn btn-white btn-icon"><i class="ri-printer-line fs-18 lh-1"></i></button>
            <button type="button" class="btn btn-primary d-flex align-items-center gap-2"><i
                    class="ri-bar-chart-2-line fs-18 lh-1"></i>Generate<span class="d-none d-sm-inline">
                    Report</span></button>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-xl">
            <a href="/">
                <div class="card card-one">
                    <div class="card-body p-3">
                        <div class="mb-1 text-primary ti--3"><i class="ri-rocket-line fs-48 lh-1"></i></div>
                        <h6 class="fw-semibold text-dark mb-1">All Products</h6>
                        <p class="fs-xs text-secondary"><span class="ff-numerals">6,320</span> All Product</p>
                        <div class="progress ht-3 mb-1">
                            <div class="progress-bar w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                            <span>26.5GB</span>
                            <span>50GB</span>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </a>
        </div><!-- col -->
        <div class="col-6 col-sm-6 col-xl">
            <a href="/">
                <div class="card card-one">
                    <div class="card-body p-3">
                        <div class="mb-1 text-primary ti--3"><i class="ri-file-text-line fs-48 lh-1"></i></div>
                        <h6 class="fw-semibold text-dark mb-1">All Products</h6>
                        <p class="fs-xs text-secondary"><span class="ff-numerals">4,067</span> Teacher</p>
                        <div class="progress ht-3 mb-1">
                            <div class="progress-bar w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                            <span>8.8GB</span>
                            <span>20GB</span>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </a>
        </div><!-- col -->
        <div class="col-6 col-sm-4 col-xl">
            <a href="">
                <div class="card card-one">
                    <div class="card-body p-3">
                        <div class="mb-1 text-primary ti--3"><i class="ri-gallery-line fs-48 lh-1"></i></div>
                        <h6 class="fw-semibold text-dark mb-1">Record Test & Exam</h6>
                        <p class="fs-xs text-secondary"><span class="ff-numerals">1,983</span> Files</p>
                        <div class="progress ht-3 mb-1">
                            <div class="progress-bar w-70 bg-warning" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                            <span>29.5GB</span>
                            <span>40GB</span>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </a>
        </div><!-- col -->
        <div class="col-6 col-sm-4 col-xl">
            <a href="">
                <div class="card card-one">
                    <div class="card-body p-3">
                        <div class="mb-1 text-primary ti--3"><i class="ri-folder-zip-line fs-48 lh-1"></i></div>
                        <h6 class="fw-semibold text-dark mb-1">Archives</h6>
                        <p class="fs-xs text-secondary"><span class="ff-numerals">3,508</span> Files</p>
                        <div class="progress ht-3 mb-1">
                            <div class="progress-bar w-85 bg-danger" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                            <span>26.6GB</span>
                            <span>30GB</span>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </a>
        </div><!-- col -->
        <div class="col-6 col-sm-4 col-xl">
            <a href="">
                <div class="card card-one">
                    <div class="card-body p-3">
                        <div class="mb-1 text-primary ti--3"><i class="ri-folder-2-line fs-48 lh-1"></i></div>
                        <h6 class="fw-semibold text-dark mb-1">Others</h6>
                        <p class="fs-xs text-secondary"><span class="ff-numerals">845</span> Files</p>
                        <div class="progress ht-3 mb-1">
                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                            <span>5.1GB</span>
                            <span>10GB</span>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </a>
        </div><!-- col -->
    </div>
    <!-- end Dashboard Menus  -->
    <br><br>
    <!-- Admission and staff form -->





    <div class="row">
        <div class="col-12">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>Add Poduct</h3>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('store') }}"  enctype="multipart/form-data">
                            @csrf
                            <input type="text" required class="form-control" name="name" placeholder="Name"
                                aria-label="Product name">

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <input type="text" required class="form-control" name="desc"
                                    placeholder="desc" aria-label="">


                            </div>
                            <div class="col-4">
                                <input type="text" required name="price" class="form-control"
                                    placeholder="Price" aria-label="">
                            </div>
                            <div class="col-4">
                                <input type="file" required name="image" class="form-control" placeholder=""
                                    aria-label="email">

                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>

    </div>

<br><br><br>

    <div class="row">
        <div class="col-12">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Price</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                        {{-- <th scope="col">Year of Admission</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->desc }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->image }}</td>
                            <td> <a href="edit/{{ $product->id }}" class="fa fa-edit btn btn-primary"></a>
                                <form method="" action="{{ route('deleteproduct', $product->id) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><span
                                            class="bi bi-trash"></span></button>
                                </form>
                            </td>
                            {{-- <td>{{$teacher->session}}</td> --}}
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Price</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>


</div>
</div>
