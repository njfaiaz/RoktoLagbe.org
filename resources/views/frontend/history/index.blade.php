@extends('app')
@section('title', 'History')

@push('style')
    <style>
        .no-donation-message {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
            text-align: center;
            font-weight: 800;
            color: #050505;
        }
    </style>
@endpush


@section('frontend_content')

    <ul class="timeline">
        @forelse($donateHistories as $history)
            <li>
                <div class="timeline-time">
                    <span class="date">{{ \Carbon\Carbon::parse($history->donation_date)->format('d M Y') }}</span>
                    <span class="time">{{ \Carbon\Carbon::parse($history->donation_date)->format('h:i A') }}</span>
                </div>

                <div class="timeline-icon">
                    <a href="javascript:;">&nbsp;</a>
                </div>
                <div class="timeline-body">
                    <div class="timeline-header"> Donar Name =
                        <span class="username"> {{ $history->user->name }}<small></small></span>
                    </div>
                    <div class="timeline-header"> Peasant Name =
                        <span class="username">{{ $history->blood_receiver_name }}<small></small></span>
                    </div>
                    <div class="timeline-header"> Peasant Phone Number =
                        <span class="username">{{ $history->blood_receiver_number }}<small></small></span>
                    </div>
                    <div class="timeline-header">Peasant Blood Name =
                        <span class="username">{{ $history->blood->blood_name }}<small></small></span>
                    </div>
                    <div class="timeline-header"> Peasant Gender =
                        <span class="username">{{ $history->gender }}<small></small></span>
                    </div>
                    <div class="timeline-header">
                        <span class="address_name"> Peasant Address =
                            {{ $history->district->district_name ?? '' }},
                            <strong>{{ $history->upazila->upazila_name ?? '' }},</strong>
                            <strong>{{ $history->union->union_name ?? '' }}</strong>
                        </span>
                    </div>
                    <div class="timeline-header"> What problem did you take blood for? =
                        <p class="username">
                            {{ $history->patient_details ?? 'No patient details.' }}
                        </p>
                    </div>
                </div>
            </li>
        @empty
            <li class="no-donation-message">
                <p>No donation history found.</p>
            </li>
        @endforelse


    </ul>

@endsection
