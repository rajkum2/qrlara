<div class="table-responsive">
    <table class="table" id="qRCODES-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Website</th>
        <th>Product Name</th>
        <th>Product Url</th>
        <th>Company Name</th>
        <th>Callback Url</th>
        <th>Qrcode Path</th>
        <th>Amount</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($qRCODES as $qRCODE)
            <tr>
                <td>{{ $qRCODE->user_id }}</td>
            <td>{{ $qRCODE->website }}</td>
            <td>{{ $qRCODE->product_name }}</td>
            <td>{{ $qRCODE->product_url }}</td>
            <td>{{ $qRCODE->company_name }}</td>
            <td>{{ $qRCODE->callback_url }}</td>
            <td>{{ $qRCODE->qrcode_path }}</td>
            <td>{{ $qRCODE->amount }}</td>
            <td>{{ $qRCODE->status }}</td>
                <td>
                    {!! Form::open(['route' => ['qRCODES.destroy', $qRCODE->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('qRCODES.show', [$qRCODE->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('qRCODES.edit', [$qRCODE->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
