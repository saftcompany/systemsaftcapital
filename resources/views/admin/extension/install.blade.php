@extends('layouts.admin')

@php
    $api = new \App\Http\Controllers\Admin\Ext\InstallController();
    $update_data = $api->check_update($product_id);
@endphp

@section('content')
    <style>
        .changelog ul,
        .changelog ol {
            list-style-type: disc;
            list-style-position: inside;
        }
    </style>
    <div class="w-1/2 text-center mx-auto">
        @if ($update_data['status'])
            <div class="alert alert-warning">
                {{ __('Please backup your database and script files before upgrading.') }}
            </div>
        @endif
        <div class="alert alert-success">
            {!! $update_data['message'] !!}
        </div>
        @if ($update_data['status'])
            <div class="card">
                <h1 class="card-title py-5">{{ __('Extensions Installer') }}</h1>
                <div class='alert alert-secondary mx-5 changelog'>
                    <div class="text-start">
                        {!! $update_data['changelog'] !!}
                    </div>
                </div>
                @php
                    $update_id = null;
                    $has_sql = null;
                    $version = null;
                @endphp
                @if (!empty($_POST['update_id']))
                    @php
                        $update_id = strip_tags(trim($_POST['update_id']));
                        $has_sql = strip_tags(trim($_POST['has_sql']));
                        $version = strip_tags(trim($_POST['version']));
                    @endphp
                    <progress id="prog" value="0" max="100.0" class="progress mb-1 mx-auto w-75"></progress>
                    @php
                        $api->download_update($product_id, $_POST['update_id'], $_POST['has_sql'], $_POST['version'], null, null, ['db_host' => getenv('DB_HOST'), 'db_user' => getenv('DB_USERNAME'), 'db_pass' => getenv('DB_PASSWORD'), 'db_name' => getenv('DB_DATABASE')]);
                    @endphp
                @else
                    <div class="card-footer">
                        <form id="updater" action="{{ route('admin.extensions.install', [$product->product_id]) }}"
                            method="POST">
                            @csrf
                            <input type="hidden" class="form-control" value="{{ $update_data['update_id'] }}"
                                name="update_id">
                            <input type="hidden" class="form-control" value="{{ $update_data['has_sql'] }}" name="has_sql">
                            <input type="hidden" class="form-control" value="{{ $update_data['version'] }}" name="version">
                            <button type="submit" class="btn btn-success  w-1/2">{{ __('Install') }}</button>
                        </form>
                    </div>
                @endif
            </div>
        @endif

    </div>
    </div>
    </div>
    <div class="col-6 text-center mx-auto">
        <p>{{ __('Copyright') }} <?php echo date('Y'); ?> {{ __('Mashdiv, All rights reserved.') }}</p><br>
    </div>
@endsection

@push('breadcrumb-plugins')
    @can('terminal_access')
        <a class="btn btn-dark" href="{{ route('admin.terminal') }}"><i class="bi bi-terminal mr-1"></i>
            {{ __('Terminal') }}</a>
    @endcan
    <a class="btn btn-success" href="{{ route('admin.clean') }}"><i class="bi bi-speedometer2"></i>
        {{ __('Optimize') }}</a>
    <a class="btn btn-primary" href="{{ route('admin.extensions.index') }}"><i class="bi bi-chevron-left"></i>
        {{ __('Back') }}</a>
@endpush
