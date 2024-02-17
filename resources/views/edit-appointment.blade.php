@extends('appointment.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">{{ __('Edit Appointment') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
                            @csrf
                            @method('PUT') <div class="form-group">
                                <label for="name" class="font-weight-bold">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $appointment->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $appointment->email) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date" class="font-weight-bold">Date</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $appointment->date) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="appointment_time" class="font-weight-bold">Time</label>
                                <input type="time" name="appointment_time" id="appointment_time" class="form-control" value="{{ old('appointment_time', $appointment->appointment_time) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="pet_name" class="font-weight-bold">Pet's Name</label>
                                <input type="text" name="pet_name" id="pet_name" class="form-control" value="{{ old('pet_name', $appointment->pet_name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="pet_type" class="font-weight-bold">Pet's Type</label>
                                <input type="text" name="pet_type" id="pet_type" class="form-control" value="{{ old('pet_type', $appointment->pet_type) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="veterinarian" class="font-weight-bold">Veterinarian</label>
                                <input type="text" name="veterinarian" id="veterinarian" class="form-control" value="{{ old('veterinarian', $appointment->veterinarian) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="concern" class="font-weight-bold">Appointment Concern</label>
                                <textarea name="concern" id="concern" class="form-control" required>{{ old('concern', $appointment->concern) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Update Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
