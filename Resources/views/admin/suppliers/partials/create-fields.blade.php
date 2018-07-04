<div class="box-body">

    <div class="form-group {{ $errors->has("supplier_name") ? ' has-error' : '' }}">
        <label for="">supplier_name</label>
        <input class="form-control" type="text" name="supplier_name" value="{{old('supplier_name')}}">
        {!! $errors->first("supplier_name", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("url") ? ' has-error' : '' }}">
        <label for="">url</label>
        <input class="form-control" type="text" name="url" value="{{old('url')}}">
        {!! $errors->first("url", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("support_foreign_ship") ? ' has-error' : '' }}" >
        <label for="">Support Foreign Shipping</label>
        <select class="form-control" name="support_foreign_ship" value="{{old('cat')}}">
            <option value="">请选择</option>
            <option value="1" >support</option>
            <option value="0"  >Not support</option>
        </select>
        {!! $errors->first("support_foreign_ship", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("support_return") ? ' has-error' : '' }}" >
        <label for="">Support Return</label>
        <select class="form-control" name="support_return" value="{{old('cat')}}">
            <option value="">请选择</option>
            <option value="1" >support</option>
            <option value="0"  >Not support</option>
        </select>
        {!! $errors->first("support_return", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("return_days") ? ' has-error' : '' }}">
        <label for="">Return days</label>
        <input name="return_days" value="{{old('return_days')}}" type="text" class="form-control" placeholder="">
        {!! $errors->first("return_days", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has("cat") ? ' has-error' : '' }}">
        <label for="">Cat</label>
        <input name="cat" value="{{old('cat')}}" type="text" class="form-control" placeholder="">
        {!! $errors->first("cat", '<span class="help-block">:message</span>') !!}
    </div>


</div>
