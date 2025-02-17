@extends(route_prefix().'admin.admin-master')
@section('title')
    {{__('All Orders')}}
@endsection
@section('style')
    <x-media-upload.css/>
    <x-datatable.css/>
    <x-summernote.css/>
    <style>
        .filter-order-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 0 15px;
            align-items: center;
            justify-content: space-between;
        }
    </style>
@endsection
@section('title')
    {{__('All orders')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12">
        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <x-error-msg/>
                        <x-flash-msg/>
                        <h4 class="header-title mb-4">{{__('All Orders')}}</h4>
                        <div class="filter-order-wrapper">
                            <div class="select-box-wrap mt-3">
                                <select name="filter_order" id="filter_order">
                                    <option value="all">{{{__('All Order')}}}</option>
                                    <option
                                        value="pending" {{request()->filter == 'pending' ? 'selected' : ''}}>{{__('Pending')}}</option>
                                    <option
                                        value="in_progress" {{request()->filter == 'in_progress' ? 'selected' : ''}}>{{__('In Progress')}}</option>
                                    <option
                                        value="cancel" {{request()->filter == 'cancel' ? 'selected' : ''}}>{{__('Cancel')}}</option>
                                    <option
                                        value="complete" {{request()->filter == 'complete' ? 'selected' : ''}}>{{__('Complete')}}</option>
                                </select>
                                <button class="btn btn-primary btn-sm" id="filter_btn">{{__('Filter')}}</button>
                            </div>
                        </div>

{{--                      add  export btn --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group mb-3">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            {{__('Export')}}
                                        </button>
                                        <div class="dropdown-menu">
{{--                                            <a class="dropdown-item" href="{{ route(route_prefix().'admin.product.order.manage.export', ['type' => 'xlsx'])}}">{{ __('XLSX') }}</a>--}}
                                            <a class="dropdown-item" href="{{ route(route_prefix().'admin.product.order.manage.export', ['type' => 'pdf'])}}">{{__('PDF')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <div class="table-wrap table-responsive">
                            <table class="table table-default table-striped table-bordered">
                                <thead class="text-white" style="background-color: #b66dff">
                                <tr>
                                    <th>{{__('Order ID')}}</th>
                                    <th>{{__('Billing Name')}}</th>
                                    <th>{{__('Billing Email')}}</th>
                                    <th>{{__('Total Amount')}}</th>
                                    <th>{{__('Payment Gateway')}}</th>
                                    <th>{{__('Payment Status')}}</th>
                                    <th>{{__('Order Status')}}</th>
                                    <th>{{__('Date')}}</th>
                                    <th>{{__('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_orders as $data)
                                    <tr>
                                        <td class="text-center">{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{amount_with_currency_symbol($data->total_amount)}}</td>
                                        <td class="text-capitalize">{{$data->checkout_type !== 'cod' ? __($data->payment_gateway) : __('Cash On Delivery')}}</td>
                                        <td>
                                            @if($data->payment_status === 'success')
                                                <span
                                                    class="alert alert-success text-capitalize">{{__($data->payment_status)}}</span>
                                            @else
                                                <span
                                                    class="alert alert-warning text-capitalize">{{__($data->payment_status) ?? __('Pending')}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($data->status == 'pending')
                                                <span
                                                    class="alert alert-warning text-capitalize">{{__($data->status)}}</span>
                                            @elseif($data->status == 'cancel')
                                                <span
                                                    class="alert alert-danger text-capitalize">{{__($data->status)}}</span>
                                            @elseif($data->status == 'in_progress')
                                                <span
                                                    class="alert alert-info text-capitalize">{{__(str_replace('_', ' ',ucwords($data->status)))}}</span>
                                            @else
                                                <span
                                                    class="alert alert-success text-capitalize">{{__($data->status)}}</span>
                                            @endif
                                        </td>
                                        <td>{{$data->created_at->format('d M Y')}}</td>
                                        <td>
                                            <a href="#"
                                               data-bs-toggle="modal"
                                               data-bs-target="#user_edit_modal"
                                               class="btn btn-lg btn-info btn-sm mb-3 mr-1 user_edit_btn"
                                            >
                                                <i class="las la-envelope"></i>
                                            </a>
                                            <a href="{{route('tenant.admin.product.order.manage.view',$data->id)}}"
                                               class="btn btn-lg btn-primary btn-sm mb-3 mr-1 view_order_details_btn">
                                                <i class="las la-eye"></i>
                                            </a>

                                            @if($data->status !== 'cancel')
                                                <a href="#"
                                                   data-id="{{$data->id}}"
                                                   data-status="{{$data->status}}"
                                                   data-payment_status="{{$data->payment_status}}"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#order_status_change_modal"
                                                   class="btn btn-lg btn-info btn-sm mb-3 mr-1 order_status_change_btn"
                                                >{{__("Update Status")}}</a>
                                            @endif

                                            @if(!empty($data->user_id) && $data->payment_status == 'pending' || $data->payment_status == null)
                                                <form action="{{route(route_prefix().'admin.product.order.reminder')}}"
                                                      method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                    <button class="btn btn-secondary mb-2 btn-sm" type="submit"><i
                                                            class="las la-bell"></i></button>
                                                </form>
                                            @endif
                                            <form action="{{route(route_prefix().'admin.order.invoice.generate')}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <button class="btn btn-dark btn-sm"
                                                        type="submit">{{__('Invoice')}}</button>
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
    </div>

    @include('tenant.admin.product-order-manage.portion.status-and-mail-send')

    <x-media-upload.markup/>
@endsection

@section('scripts')
    <x-datatable.js/>
    <x-media-upload.js/>
    <x-summernote.js/>
    <x-bulk-action-js :url="route( route_prefix().'admin.product.order.bulk.action')" />

    <script>
        $(document).on('click', '.order_status_change_btn', function (e) {
            e.preventDefault();
            var el = $(this);
            var form = $('#order_status_change_modal');
            form.find('#order_id').val(el.data('id'));

            if (el.data('payment_status') === 'success') {
                form.find('#payment_status').parent().hide();
                form.find('#payment_status').removeAttr('name');
            } else {
                form.find('#payment_status').parent().show();
                form.find('#payment_status').attr('name', 'payment_status');
            }
            form.find('#payment_status option[value="' + el.data('payment_status') + '"]').attr('selected', true);
            form.find('#order_status option[value="' + el.data('status') + '"]').attr('selected', true);
        });

        (function ($) {
            "use strict";
            $(document).ready(function () {

                $(document).on('click', '.order_status_change_btn', function (e) {
                    e.preventDefault();
                    var el = $(this);
                    var form = $('#order_status_change_modal');
                    form.find('#order_id').val(el.data('id'));

                    if (el.data('payment_status') === 'success') {
                        form.find('#payment_status').parent().hide();
                        form.find('#payment_status').removeAttr('name');
                    } else {
                        form.find('#payment_status').parent().show();
                        form.find('#payment_status').attr('name', 'payment_status');
                    }
                    form.find('#payment_status option[value="' + el.data('payment_status') + '"]').attr('selected', true);
                    form.find('#order_status option[value="' + el.data('status') + '"]').attr('selected', true);
                });

                $('#all_user_table').DataTable({
                    "order": [[1, "desc"]],
                    'columnDefs': [{
                        'targets': 'no-sort',
                        'orderable': false
                    }]
                });
                $('.summernote').summernote({
                    height: 250,   //set editable area's height
                    codemirror: { // codemirror options
                        theme: 'monokai'
                    },
                    callbacks: {
                        onChange: function (contents, $editable) {
                            $(this).prev('input').val(contents);
                        }
                    }
                });


                $(document).on('click', '#filter_btn', function () {
                    let type = $('#filter_order').val();

                    location.href = '{{route('tenant.admin.product.order.manage.all').'?filter='}}' + type;
                });
            });
        })(jQuery);
    </script>
@endsection
