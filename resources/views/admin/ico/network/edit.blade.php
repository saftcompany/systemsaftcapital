@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">{{ 'EVM Network Settings' }}</h4>
            <div class="card-search"></div>
        </div>
        <form method="POST" action="{{ route('admin.networks.update', $network->id) }}">
            @csrf
            <input type="hidden" name="is_active" id="is_active">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="chainName">{{ __('Chain Name') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="chainName" name="chainName"
                                aria-describedby="chainName" value="{{ $network->chainName }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="chainName">{{ __('Chain ID') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="chainId" name="chainId"
                                aria-describedby="chainName" value="{{ $network->chainId }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="name">{{ __('Currency Name') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="name" name="name" aria-describedby="name"
                                value="{{ $network->name }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="symbol">{{ __('Currency Symbol') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="symbol" name="symbol"
                                aria-describedby="symbol" value="{{ $network->symbol }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="decimals">{{ __('Currency Decimals') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="decimals" name="decimals"
                                aria-describedby="decimals" value="{{ $network->decimals }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="rpcUrls">{{ __('RPC URLs') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="rpcUrls" name="rpcUrls"
                                aria-describedby="rpcUrls" value="{{ $network->rpcUrls }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="blockExplorerUrls">{{ __('Block Explorer URLs') }}</label>
                        <div class="input-group mb-1">
                            <input type="name" class="form-control" id="blockExplorerUrls" name="blockExplorerUrls"
                                aria-describedby="blockExplorerUrls" value="{{ $network->blockExplorerUrls }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <label class="form-label" for="iconUrls">{{ __('Icon URL') }}</label>
                        <div class="input-group mb-1">
                            <input type="text" class="form-control" id="iconUrls" name="iconUrls"
                                aria-describedby="iconUrls" value="{{ $network->iconUrls }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-label" for="status">{{ __('Status') }}</div>
                        <div class="btn btn-outline-secondary btn-sm">
                            <div class="d-inline-block me-1 text-danger">{{ __('Disabled') }}</div>
                            <div class="form-check form-switch d-inline-block">
                                <input type="checkbox" class="form-check-input"
                                    @if ($network->status == 1) checked @endif data-bs-toggle="toggle" name="status"
                                    id="status" style="cursor: pointer;">
                                <label for="site_state" class="form-check-label text-success">{{ __('Enabled') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end m-1">
                <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> {{ __('Edit') }}
                </button>
            </div>
        </form>
    </div>
@endsection
@push('breadcrumb-plugins')
    <a href="{{ route('admin.networks.index') }}" class="btn btn-primary btn-sm"><i class="bi bi-chevron-left"></i>
        {{ __('Back') }}</a>
@endpush
