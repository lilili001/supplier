@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('supplier::suppliers.title.suppliers') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('supplier::suppliers.title.suppliers') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="javascript:;" class="btn btn-default margin-r-5 btn-flat bulk-delete" style="padding:4px 10px">delete</a>
                    <a href="{{ route('admin.supplier.supplier.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('supplier::suppliers.button.create supplier') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="icheckbox_minimal" id="all_checked"></th>
                                <th>序号</th>
                                <th>{{trans('supplier::suppliers.form.supplier name')}}</th>
                                <th>{{trans('supplier::suppliers.form.url')}}</th>
                                <th>{{trans('supplier::suppliers.form.support foreign shipping')}}</th>
                                <th>{{trans('supplier::suppliers.form.support return')}}</th>
                                <th>{{trans('supplier::suppliers.form.return days')}}</th>
                                <th>{{trans('supplier::suppliers.form.cat')}}</th>

                                <th>{{ trans('core::core.table.created at') }}</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($suppliers)): ?>
                            <?php foreach ($suppliers as $key=>$supplier): ?>
                            <tr data-id="{{$supplier->id}}">
                                <td><input type ='checkbox' name='row-check' class='icheckbox_minimal' value=''></td>
                                <td>{{$key+1}}</td>
                                <td>{{$supplier->supplier_name}}</td>
                                <td>{{$supplier->url}}</td>
                                <td>{{$supplier->support_foreign_ship ? '是' : '否' }}</td>
                                <td>{{ isset($supplier->support_return) && $supplier->support_return ==1 ? '是' : '否' }}</td>
                                <td>{{$supplier->return_days}}</td>
                                <td>{{$supplier->cat}}</td>
                                <td>
                                    <a href="{{ route('admin.supplier.supplier.edit', [$supplier->id]) }}">
                                        {{ $supplier->created_at }}
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.supplier.supplier.edit', [$supplier->id]) }}" >编辑</a>
                                        <a data-toggle="modal" data-target="#modal-delete-confirmation" data-action-target="{{ route('admin.supplier.supplier.destroy', [$supplier->id]) }}">删除</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{ trans('core::core.table.created at') }}</th>
                                <th>{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </tfoot>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    @include('core::partials.delete-modal')
@stop


@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('supplier::suppliers.title.create supplier') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.supplier.supplier.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[ 6, "desc" ]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });

            //全选
            $("#all_checked").click(function(){
                $('[name=row-check]:checkbox').prop('checked',this.checked);//checked为true时为默认显示的状态
            });

            var checkedRows = [];

            $('[name="row-check"]').click(function(){
                checkedRows = [];

                if( $('[name="row-check"]:checked').length !== $('[name="row-check"]').length ){
                    $("#all_checked").prop('checked',false)
                }else{
                    $("#all_checked").prop('checked',true)
                }

                $('[name="row-check"]:checked').each(function(index,item){
                    checkedRows.push( $(item).parents('tr').data('id') )
                })
            });

            //批量删除
            $('.bulk-delete').click(function(){
                $.post( route('bulk.delete.suppliers'),{_token:'{{csrf_token()}}' , ids:checkedRows } ).then(function(res){
                    location.reload()
                });
                return false;
            })

        });
    </script>
@endpush
