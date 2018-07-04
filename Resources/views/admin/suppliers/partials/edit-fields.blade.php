<div class="box-body">

    <div class="form-group">
        <label for="">Supplier</label>
        <input type="text" name="supplier_name" value="{{$supplier->supplier_name}}" class="form-control" placeholder="">
    </div>

    <div class="form-group">
        <label for="">url</label>
        <input type="text" name="url" value="{{$supplier->url}}" class="form-control" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Support Foreign Shipping</label>
        <select class="form-control" name="support_foreign_ship" id="">
            <option value="1" {{$supplier->support_foreign_ship ? 'selected' : '' }}>support</option>
            <option value="0" {{!$supplier->support_foreign_ship ? 'selected' : '' }}>Not support</option>
        </select>

    </div>
    <div class="form-group {{ $errors->has("support_return") ? ' has-error' : '' }}" >
        <label for="">Support Return</label>
        <select class="form-control" name="support_return" value="{{$supplier->support_return}}">
            <option value="">请选择</option>
            <option value="1" {{$supplier->support_return ? 'selected' : '' }}>support</option>
            <option value="0" {{!$supplier->support_return ? 'selected' : '' }} >Not support</option>
        </select>
        {!! $errors->first("support_return", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("return_days") ? ' has-error' : '' }}">
        <label for="">Return days</label>
        <input name="return_days" value="{{$supplier->return_days}}" type="text" class="form-control" placeholder="">
        {!! $errors->first("return_days", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("cat") ? ' has-error' : '' }}">
        <label for="">Cat</label>
        <input type="text" name="cat" value="{{$supplier->cat}}" class="form-control" placeholder="">
        {!! $errors->first("cat", '<span class="help-block">:message</span>') !!}
    </div>

</div>
