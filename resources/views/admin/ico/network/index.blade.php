@extends('layouts.app')

@section('content')
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">{{ __('Networks') }}</h4>
                    <div class="card-search"></div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover custom-data-bs-table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">{{ __('Chain Name') }}</th>
                                <th scope="col">{{ __('Chain ID') }}</th>
                                <th scope="col">{{ __('Currency Name') }}</th>
                                <th scope="col">{{ __('Currency Symbol') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($networks as $network)
                                <tr>
                                    <td data-label="{{ __('Chain Name') }}">{{ $network->chainName }}</td>
                                    <td data-label="{{ __('Chain ID') }}">{{ $network->chainId }}</td>
                                    <td data-label="{{ __('Currency Name') }}">{{ $network->name }}</td>
                                    <td data-label="{{ __('Currency Symbol') }}">{{ $network->symbol }}</td>
                                    <td data-label="{{ __('Status') }}">
                                        @if ($network->status == 1)
                                            <span class="badge bg-success">{{ __('Enabled') }}</span>
                                        @else
                                            <span class="badge bg-warning">{{ __('Disabled') }}</span>
                                        @endif
                                    </td>
                                    <td data-label="{{ __('Action') }}">
                                        <a href="javascript:void(0)" data-id="{{ $network->id }}"
                                            class="btn btn-networkn btn-danger btn-sm removeModalBtn"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Remove') }}"
                                            onclick="$('#removeModal').find('input[name=id]').val($(this).data('id'));$('#removeModal').modal('show');">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="{{ route('admin.networks.edit', $network->id) }}"
                                            class="btn btn-networkn btn-warning btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="{{ __('Edit') }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($empty_message) }}</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table><!-- table end -->
                </div>
            </div><!-- card end -->
            <div class="mb-1">{{ paginateLinks($networks) }}</div>

        </div>


    </div>

    {{-- Remove Subscriber MODAL --}}
    <div id="removeModal" class="modal fade text-start" tabindex="-1" aria-hidden="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Are you sure want to remove?') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.networks.remove') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <p><span class="fw-bold"></span> {{ __('network will be removed.') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Remove') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('breadcrumb-plugins')
    <a href="{{ route('admin.networks.new') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i>
        {{ __('New Network') }}</a>
@endpush
