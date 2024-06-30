<!-- Booking Start -->
<section id="booking">
    <div class="container-fluid booking mt-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px">
                <form id="bookingForm">
                    @csrf
                    <div class="row align-items-end" style="min-height: 60px">
                        <div class="col-md-9">
                            <div class="row align-items-end">
                                <div class="col-md-4">
                                    <div class="mb-3 mb-md-0">
                                        <label for="adult">
                                            <span>Number of travellers</span>
                                        </label>
                                        <input type="number" name="adult" class="form-control p-4" min="1"
                                            step="1" id="adult" value="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mb-md-0">
                                        <label for="date">Date</label>
                                        <div class="date" id="date1">
                                            {{-- <input type="text" id="date"
                                            class="form-control p-4 datetimepicker-input" placeholder="Depart Date OLD"
                                            data-target="#date1" data-toggle="datetimepicker" /> --}}
                                            <input type="date" id="date" class="form-control p-4" name="date"
                                                min="{{ \Carbon\Carbon::parse(now() > $tour->start_date ? now() : $tour->start_date)->format('Y-m-d') }}"
                                                max="{{ \Carbon\Carbon::parse($tour->end_date)->format('Y-m-d') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mb-md-0">
                                        <label for="adult">
                                            <span>Pickup Time</span>
                                        </label>
                                        <select name="shift_id" class="custom-select px-4" style="height: 47px"
                                            required>
                                            <option value="">--Select Time--</option>
                                            @foreach ($tour->shifts as $shift)
                                                <option value="{{ $shift->id }}">
                                                    {{ \Carbon\Carbon::parse($shift->start_time)->format('h:i A') }}
                                                    {{ isset($shift->end_time) ? ' - ' . \Carbon\Carbon::parse($shift->end_time)->format('h:i A') : '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 50px">
                                Check Availability
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Booking End -->

<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Order Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>

@section('page-script')
    <script>
        $(document).ready(function() {
            $('#bookingForm').submit(function(event) {
                event.preventDefault()
                const data = $('#bookingForm').serializeArray()

                let route = "{!! route('payment', ['tour' => $tour]) !!}";

                $.ajax({
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: route,
                    data: data,
                    success: function(response) {
                        $('#bookingModal .modal-body').html(response)
                        $('#bookingModal').modal('show')
                    },
                    error: function(response) {
                        alert('error')
                    }
                });
            })
        });
    </script>
    <script>
        function formSubmit() {
            $('#bookingForm').submit()
        }
    </script>
@endsection
