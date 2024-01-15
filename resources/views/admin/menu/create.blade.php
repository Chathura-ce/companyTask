@extends('layouts.app')

@section('content')

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 mt-3 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Menu</h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('admin.menu.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="label" class="form-label">Label</label>
                                            <input type="text" class="form-control" id="label" name="label" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="route_name" class="form-label">Route Name</label>
                                            <input type="text" class="form-control" id="route_name" name="route_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="parent_id" class="form-label">Parent ID</label>
                                            <input type="number" class="form-control" id="parent_id" name="parent_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="order" class="form-label">Order</label>
                                            <input type="number" class="form-control" id="order" name="order">
                                        </div>
                                        <div class="mb-3">
                                            <label for="icon" class="form-label">Icon</label>
                                            <input type="text" class="form-control" id="icon" name="icon">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Create Menu Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->

@endsection


