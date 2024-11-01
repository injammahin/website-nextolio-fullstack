@extends('backend.app')
@section('title', 'Manage Modules')
@section('content')
    <div class="content-wrapper">
        <div class="p-3">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Modules</h3>
                    <a href="{{ route('backend.modules.create') }}" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Module
                    </a>

                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modules as $module)
                                    <tr>
                                        <td>{{ $module->name }}</td>
                                        <td>
                                            @if ($module->logo)
                                                <img src="{{ asset('media/modules/logos/' . $module->logo) }}"
                                                    width="75" class="img-fluid rounded shadow-sm" alt="Module Logo">
                                            @else
                                                <span>No Logo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('backend.modules.edit', $module->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('backend.modules.destroy', $module->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this module?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
