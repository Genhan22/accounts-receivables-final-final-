@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Invoices
                    <a href="{{ url('admin/invoices/create') }}" class="text-white btn btn-primary btn-sm float-end">
                        Add Invoices
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th>Amount</th>
                            <th>College</th>
                            <th>Scholarship</th>
                            <th>Issue Date</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->StudentNumber }}</td>
                                <td>{{ $invoice->StudentName }}</td>
                                <td>{{ $invoice->Amount }}</td>
                                <td>{{ $invoice->College }}</td>
                                <td>{{ $invoice->Scholarship }}</td>
                                <td>{{ $invoice->DueDate }}</td>
                                <td>{{ $invoice->DatePaid }}</td>
                                <td>
                                    <a href="{{ url('admin/invoices/'.$invoice->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ url('admin/invoices/'.$invoice->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this data?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Invoices Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
