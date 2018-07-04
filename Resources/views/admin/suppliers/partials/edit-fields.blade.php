<div class="box-body">

    <div class="form-group {{ $errors->has("supplier_name") ? ' has-error' : '' }}" >
       <label class="col-sm-2"  for="">{{trans('supplier::suppliers.form.supplier name')}}</label>
        <div class="col-sm-10">
            <input type="text" name="supplier_name" value="{{$supplier->supplier_name}}" class="form-control" placeholder="">
            {!! $errors->first("supplier_name", '<span class="help-block">:message</span>') !!}
        </div>
    </div>

    <div class="form-group">
       <label class="col-sm-2"  for="">{{trans('supplier::suppliers.form.url')}}</label>
        <div class="col-sm-10">
            <input type="text" name="url" value="{{$supplier->url}}" class="form-control" placeholder="">
        </div>
    </div>

    <div class="form-group">
       <label class="col-sm-2"  for="">{{trans('supplier::suppliers.form.support foreign shipping')}}</label>
        <div class="col-sm-10">
            <select class="form-control" name="support_foreign_ship" id="">
                <option value="1" {{$supplier->support_foreign_ship ? 'selected' : '' }}>support</option>
                <option value="0" {{!$supplier->support_foreign_ship ? 'selected' : '' }}>Not support</option>
            </select>
        </div>
    </div>
    <?php $return = $supplier->support_return ;?>
    <div class="form-group {{ $errors->has("support_return") ? ' has-error' : '' }}" >
       <label class="col-sm-2"  for="">{{trans('supplier::suppliers.form.support return')}}</label>
        <div class="col-sm-10">
            <select class="form-control" name="support_return" value="{{$supplier->support_return}}">
                <option value="">请选择</option>
                <option value="1" {{$supplier->support_return ? 'selected' : '' }}>{{trans('supplier::suppliers.form.support')}}</option>
                <option value="0" {{ isset($return) && $return == 0 ? 'selected' : '' }} >{{trans('supplier::suppliers.form.not support')}}</option>
            </select>
            {!! $errors->first("support_return", '<span class="help-block">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has("return_days") ? ' has-error' : '' }}">
       <label class="col-sm-2"  for="">{{trans('supplier::suppliers.form.return days')}}</label>
        <div class="col-sm-10"><input name="return_days" value="{{$supplier->return_days}}" type="text" class="form-control" placeholder="">
            {!! $errors->first("return_days", '<span class="help-block">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has("cat") ? ' has-error' : '' }}">
       <label class="col-sm-2"  for="">{{trans('supplier::suppliers.form.cat')}}</label>
        <div class="col-sm-10"><input type="text" name="cat" value="{{$supplier->cat}}" class="form-control" placeholder="">
            {!! $errors->first("cat", '<span class="help-block">:message</span>') !!}
        </div>
    </div>

</div>
