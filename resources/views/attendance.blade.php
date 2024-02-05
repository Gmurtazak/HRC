@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Attendance') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table providerTable trackingSheet">
                            <thead>
                            <tr>
                                <th>Name </th>
                                <th>checkin</th>
                                <th>checkout</th>
                                <th>total working hours</th>

                            </tr>
                            </thead>
                            <tbody>
                         @if ($data)
                                @foreach ($data as $attendances)
                                        <tr>

                                            <td> {{ $attendances->name }}</td>
                                            <td>{{ $attendances->checkin }} </td>
                                            <td> {{ $attendances->checkout }}</td>
                                            <td>{{ $attendances->total_working_hours }} </td>
                                        </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
