<!-- Booking Start -->
<section id="booking">
    <div class="container-fluid booking mt-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px">
                <form id="bookingForm">
                    @csrf
                    <div class="row align-items-end" style="min-height: 60px">
                        <div class="col-md-10">
                            <div class="row align-items-end">
                                <div class="col-md-2">
                                    <div class="mb-3 mb-md-0">
                                        <label for="child">
                                            <span>Child:</span>
                                            <span>{{ config('app.currency.symbol') . $tour->child }}</span>
                                        </label>
                                        <input type="number" name="child" class="form-control p-4" min="0"
                                            max="5" step="1" id="child" value="0">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 mb-md-0">
                                        <label for="Youth">
                                            <span>Youth:</span>
                                            <span>{{ config('app.currency.symbol') . $tour->youth }}</span>
                                        </label>
                                        <input type="number" name="youth" class="form-control p-4" min="0"
                                            max="5" step="1" id="youth" value="0">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 mb-md-0">
                                        <label for="adult">
                                            <span>Adult:</span>
                                            <span>{{ config('app.currency.symbol') . $tour->adult }}</span>
                                        </label>
                                        <input type="number" name="adult" class="form-control p-4" min="0"
                                            max="5" step="1" id="adult" value="0">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 mb-md-0">
                                        <label for="senior">
                                            <span>Senior:</span>
                                            <span>{{ config('app.currency.symbol') . $tour->senior }}</span>
                                        </label>
                                        <input type="number" name="senior" class="form-control p-4" min="0"
                                            max="5" step="1" id="senior" value="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mb-md-0">
                                        <label for="date">Date:</label>
                                        <div class="date" id="date1" data-target-input="nearest">
                                            {{-- <input type="text" id="date"
                                            class="form-control p-4 datetimepicker-input" placeholder="Depart Date OLD"
                                            data-target="#date1" data-toggle="datetimepicker" /> --}}
                                            <input type="date" id="date1"
                                                class="form-control p-4 datetimepicker-input" name="date"
                                                min="{{ \Carbon\Carbon::parse(now())->format('Y-m-d') }}"
                                                max="{{ \Carbon\Carbon::parse($tour->end_date)->format('Y-m-d') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 50px">
                                Book
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
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
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
