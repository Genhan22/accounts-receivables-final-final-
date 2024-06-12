@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Receipts
                    <a href="{{ url('admin/receipts/create') }}" class="text-white btn btn-primary btn-sm float-end">
                        Add Receipts
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Receipt ID</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th>Amount</th>
                            <th>College</th>
                            <th>Issue Date</th>
                            <th>Date Paid</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($receipts as $receipt)
                            <tr>
                                <td>{{ $receipt->ReceiptID }}</td>
                                <td>{{ $receipt->StudentNumber }}</td>
                                <td>{{ $receipt->StudentName }}</td>
                                <td>{{ $receipt->Amount }}</td>
                                <td>{{ $receipt->College }}</td>
                                <td>{{ $receipt->DueDate }}</td>
                                <td>{{ $receipt->DatePaid }}</td>
                                <td>
                                    <a href="{{ url('admin/receipts/'.$receipt->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ url('admin/receipts/'.$receipt->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this receipt?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No Receipts Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
