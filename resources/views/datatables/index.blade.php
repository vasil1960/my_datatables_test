@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Получен от</th>
            <th>Поделение</th>
            <th>РУГ At</th>
            <th>От дата</th>
            <th>Подател</th>
            <th>Телефон</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'signalfrom', name: 'signalfrom' },
                { data: 'pod_id', name: 'pod_id' },
                { data: 'glav_pod', name: 'glav_pod' },
                { data: 'signaldate', name: 'signaldate' },
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' }
            ]
        });
    });
</script>
@endpush