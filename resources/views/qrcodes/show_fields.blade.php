<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $Qrcode->user_id }}</p>
</div>

<!-- Website Field -->
<div class="form-group">
    {!! Form::label('website', 'Website:') !!}
    <p>{{ $Qrcode->website }}</p>
</div>

<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $Qrcode->product_name }}</p>
</div>

<!-- Product Url Field -->
<div class="form-group">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p>{{ $Qrcode->product_url }}</p>
</div>

<!-- Company Name Field -->
<div class="form-group">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $Qrcode->company_name }}</p>
</div>

<!-- Callback Url Field -->
<div class="form-group">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p>{{ $Qrcode->callback_url }}</p>
</div>

<!-- Qrcode Path Field -->
<div class="form-group">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    <p>{{ $Qrcode->qrcode_path }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $Qrcode->amount }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $Qrcode->status }}</p>
</div>

