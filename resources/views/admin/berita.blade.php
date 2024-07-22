@extends('admin.main')
@section('title', 'Berita')
@section('stylesheet')

@endsection

@section('content')

<!-- ======= Content ======= -->
<div class="page-heading p-6">
    <div class="page-title">
        <h3 class="text-2xl font-semibold text-custom-dark-green">Data Berita</h3>
    </div>

    <!-- ======= Breadcrumb ======= -->
    <nav aria-label="breadcrumb" class="mt-4 flex justify-end"">
        <ol class="breadcrumb flex text-sm">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="text-custom-footer hover:underline">Dashboard</a></li>
            <li class="breadcrumb-item active text-custom-dark-green font-semibold" aria-current="page">Data Berita</li>
        </ol>
    </nav>
    <!-- ======= End Breadcrumb ======= -->
</div>

<div class="page-content">
<!-- ======= Content ======= -->
<section class="section pl-6 pr-6 pb-6">
    <div class="card bg-white shadow-md rounded-lg p-6">
        <div class="card-body">
                <a href="{{ route('admin.berita.create') }}" class="btn btn-outline-success text-green-500 border border-green-500 px-4 py-2 rounded-md hover:bg-green-500 hover:text-white transition">
                    <i class="fa-solid fa-user-plus"></i> Tambah Data Berita
                </a>
        </div>
    </div>
</section>

<!-- ======= Data Table ======= -->
<section class="section pl-6 pr-6">
    <!-- ======= Card ======= -->
    <div class="card bg-white shadow-md rounded-lg p-2">
        <!-- ======= Card Header ======= -->
        <div class="card-header px-4 py-2 border-b">
            <h4 class="text-lg text-custom-dark-green font-semibold">Data Berita</h4>
        </div>
        <!-- ======= End Card Header ======= -->
        <!-- Your table and content here -->

            <!-- ======= End Card Header ======= -->

            <!-- ======= Card Body======= -->
            <div class="card px-4 py-2 text-custom-color-text-table">
                <!-- ======= Tabel Data Berita ======= -->
                <table id="example" class="display">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Publish</th>
                            <th>Kategori Berita</th>
                            <th>Deskripsi Berita</th>
                            <th>Foto Berita 1</th>
                            <th>Foto Berita 2</th>
                            <th>Foto Berita 2</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>
                                <!-- ======= Button ======= -->
                                <div class="buttons space-x-2">
                                    <form action="" method="POST" id="delete-form">
                                        @csrf
                                        @method('DELETE')
                        
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.berita.show', ['beritum' => 'dummy-id']) }}" class="btn icon btn-sm btn-outline-info text-blue-500 border border-blue-500 px-2 py-1 rounded hover:bg-blue-500 hover:text-white" title="Detail Berita">
                                                <i class="fa-solid fa-info"></i>
                                            </a>
                                            <a href="{{ route('admin.berita.edit', ['beritum' => 'dummy-id']) }}" class="btn icon btn-sm btn-outline-primary text-green-500 border border-green-500 px-2 py-1 rounded hover:bg-green-500 hover:text-white" title="Edit Berita">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <button type="submit" class="btn icon btn-sm btn-outline-danger text-red-500 border border-red-500 px-2 py-1 rounded hover:bg-red-500 hover:text-white" title="Hapus berita" onclick="return confirm('Apakah anda yakin ingin menghapus berita ini ?');">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- ======= End Button ======= -->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- ======= End Tabel Data Berita ======= -->

            </div>
            <!-- ======= End Card Body ======= -->

        </div>
        <!-- ======= End Card ======= -->

    </section>
    <!-- ======= End Data Table ======= -->
</div>
    <!-- ======= End Content ======= -->

@endsection

@section('script')

@endsection