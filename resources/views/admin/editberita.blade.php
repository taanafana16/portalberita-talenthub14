@extends('admin.main')
@section('title', 'Edit Berita')
@section('stylesheet')

@endsection

@section('content')

<!-- ======= Content ======= -->
<div class="page-heading p-6">
    <div class="page-title">
        <h3 class="text-2xl font-semibold text-custom-dark-green">Edit Berita</h3>
    </div>

    <!-- ======= Breadcrumb ======= -->
    <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
        <ol class="breadcrumb flex text-sm">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="text-custom-footer hover:underline">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}" class="text-custom-footer hover:underline">Data Berita</a></li>
            <li class="breadcrumb-item active text-custom-dark-green font-semibold" aria-current="page">Edit Berita</li>
        </ol>
    </nav>
    <!-- ======= End Breadcrumb ======= -->
</div>

<!-- ======= Data Table ======= -->
<section class="section pl-6 pr-6">
    <!-- ======= Card ======= -->
    <div class="card bg-white shadow-md rounded-lg p-2">
        <!-- ======= Card Header ======= -->
        <div class="card-header px-4 py-2 border-b">
            <h4 class="text-lg text-custom-dark-green font-semibold">Edit Berita</h4>
        </div>
        <!-- ======= End Card Header ======= -->
        <!-- Your table and content here -->

            <!-- ======= End Card Header ======= -->

            <!-- ======= Card Body======= -->
            <div class="card px-4 py-2">
            </div>
    </div>
</section>

@endsection