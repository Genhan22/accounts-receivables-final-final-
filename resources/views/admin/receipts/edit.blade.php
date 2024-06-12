@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Receipt
                    <a href="{{ url('admin/receipts') }}" class="text-white btn btn-danger btn-sm float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('admin/receipts/' . $receipt->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Receipt ID</label>
                        <input type="text" name="ReceiptID" value="{{ $receipt->ReceiptID }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Student Number</label>
                        <input type="text" name="StudentNumber" value="{{ $receipt->StudentNumber }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Student Name</label>
                        <input type="text" name="StudentName" value="{{ $receipt->StudentName }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Amount</label>
                        <input type="text" name="Amount" value="{{ $receipt->Amount }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>College</label>
                        <input type="text" name="College" value="{{ $receipt->College }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Issue Date</label>
                        <input type="date" name="DueDate" value="{{ $receipt->DueDate }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Date Paid</label>
                        <input type="date" name="DatePaid" value="{{ $receipt->DatePaid }}" class="form-control"/>
                    </div>
                    <div class="mb-3 col-md-12">
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
