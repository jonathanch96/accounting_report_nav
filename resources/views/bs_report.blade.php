@extends('voyager::master')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">

@stop

@section('page_header')
<h1 class="page-title">
    <i class="icon voyager-dollar"></i>
    Balance Sheet Report
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="alert alert-info">
        <strong>Information</strong>
        <p>Pilih bulan sebelum ekport ke excel</p>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">
                <!-- form start -->
                <form target="_blank" role="form" class="form-edit-add" action="bs_report_download" method="GET" enctype="multipart/form-data">

                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}

                    <div class="panel-body">

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group col-md-12">
                            <label class="control-label" for="name">Pilih Bulan</label>
                            <input required type="date" class="form-control" name="month" value="">

                        </div>
                      
                    </div>
                    <div class="panel-footer">
                        @section('submit-buttons')
                        <button type="submit" class="btn btn-primary save">Submit</button>
                        @stop
                        @yield('submit-buttons')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@push('javascript')
<script type="text/javascript">

    $('.form-group input[type=date]').each(function (idx, elt) {
        elt.type = 'text';
        $(elt).datetimepicker({
            format: "MM/YYYY",
            viewMode: "months",
        });

    });

</script>
@endpush