<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Appointment Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/frontend/booking/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/booking/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/booking/vendor/date-picker/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/booking/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/images/neco-logo.png')}}">
    <meta name="robots" content="noindex, follow">
    
</head>

<body>
    <div class="wrapper">
        <div class="inner" >
            <form action ="{{url('request-appointment')}}" method="POST">
                @csrf
                <h3>Book an Appointment</h3>
                @if(session('error'))
                   <div class="alert alert-danger" style="color:red;">
                        {{ session('error') }}
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success" style="color:#2b1b7588">
                        {{ session('success')}}
                    </div>
                    {{ session()->forget('success') }}
                @endif
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="name">Names *</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name">
                        @error('name')
                            <div class="text-red-500" style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <label for="phone">Phone *</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="0712345678">
                        @error('phone')
                            <div class="text-red-500" style="color: red;">{{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email">
                        @error('email')
                            <div class="text-red-500" style="color: red;">{{ $message}}</div>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="dp1">Date *</label>
                        {{-- <span class="lnr lnr-calendar-full"></span> --}}
                        {{-- <input type="text" class="form-control datepicker-here" data-language="en" name="date" value="{{ old('date') }}" data-date-format="dd M yyyy" id="dp1"> --}}
                        <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                        @error('date')
                            <div class="text-red-500" style="color: red;">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <label for>Time</label>
                        <input type="time" class="form-control timepicker-here" data-language="en" value="{{ old('time') }}" name="time">
                        @error('time')
                            <div class="text-red-500" style="color: red;">{{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row last">
                    <div class="form-wrapper">
                        <label for> Issue *</label>
                        <select name="issue" id="issue" value="{{old('issue')}}" class="form-control">
                            <option value="">Select Option</option>
                            <option value="Depression Treatment">Depression Treatment</option>
                            <option value="Personal Problem">Personal Problem</option>
                            <option value="Relationship Problem">Relationship Problem</option>
                            <option value="Family Problem">Family Problem</option>
                            <option value="Couples Counselling">Couples Counselling</option>
                            <option value="Business Problem">Business Problem</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('issue')
                            <div class="text-red-500" style="color: red;">{{ $message}}</div>
                        @enderror
                        <i class="zmdi zmdi-chevron-down"></i>
                    </div>    
                </div>
                <button style="border-radius: 35px;">
                    <span>Submit</span>
                </button>
            </form>
        </div>
    </div>
    <script src="{{asset('assets/frontend/booking/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/booking/vendor/date-picker/js/datepicker.js')}}"></script>
    <script src="{{asset('assets/frontend/booking/vendor/date-picker/js/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/frontend/booking/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    
</body>



</html>