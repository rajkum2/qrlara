<li class="{{ Request::is('qRCODES*') ? 'active' : '' }}">
    <a href="{{ route('qRCODES.index') }}"><i class="fa fa-edit"></i><span>Q R C O D E S</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

