<form id="bookingCheckoutForm" class="p-2" action="{{ route('payment.checkout', ['tour' => $tour]) }}" method="POST"
    onsubmit="showAjaxLoader()">
    @csrf
    <input type="hidden" class="form-control text-center" name="date" value="{{ $bookingData['date'] }}">
    <input type="hidden" class="form-control text-center" name="shift_id" value="{{ $bookingData['shift']->id }}">

    <div class="table-responsive pb-3">
        <table class="table table-bordered m-0">
            <thead>
                <tr>
                    <th class="text-center py-3 px-4" style="min-width: 200px;">Package
                    </th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Quantity</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookingData['passengers'] as $age => $quantity)
                    <tr>
                        <td class="font-weight-semibold align-middle p-4">
                            <div><i class="fa fa-map" aria-hidden="true"></i>
                                <strong clas>{{ $tour->title }}</strong>
                            </div>
                            <div><i class="fa fa-calendar-check" aria-hidden="true"></i>
                                {{ \Carbon\Carbon::parse($bookingData['date'])->format('M d, Y') }}
                            </div>
                            <div><i class="fa fa-clock" aria-hidden="true"></i>
                                {{ \Carbon\Carbon::parse($bookingData['shift']->start_time)->format('h:i A') }}
                                @isset($bookingData['shift']->end_time)
                                    {{ ' - ' . \Carbon\Carbon::parse($bookingData['shift']->end_time)->format('h:i A') }}
                                @endisset
                            </div>
                        </td>
                        <td class="text-center font-weight-semibold align-middle p-4">
                            {{ config('app.currency.symbol') . number_format($tour[$age], 2, '.', '') }}
                        </td>
                        <td class="text-center font-weight-semibold align-middle p-4">
                            {{ $quantity }}
                            <input type="hidden" class="form-control text-center" name="{{ $age }}"
                                value="{{ $quantity }}">
                        </td>
                        <td class="text-center font-weight-semibold align-middle p-4">
                            {{ config('app.currency.symbol') . number_format($tour[$age] * $quantity, 2, '.', '') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                @isset($tour->discount)
                    <tr>
                        <td class="font-weight-normal px-4" colspan="3">Saving</td>
                        <td class="text-center font-weight-normal">
                            <div class="text-large text-success">
                                <strong>{{ config('app.currency.symbol') . number_format($bookingData['amountDiscount'], 2, '.', '') }}</strong>
                            </div>
                        </td>
                    </tr>
                @endisset
                <tr>
                    <td class="font-weight-normal px-4" colspan="3">
                        Total
                    </td>
                    <td class="text-center font-weight-normal">
                        <div class="text-large">
                            <strong>{{ config('app.currency.symbol') . number_format($bookingData['amountTotal'] - $bookingData['amountDiscount'], 2, '.', '') }}</strong>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <h5 class="h4 pb-2 pt-4 border-bottom">Reservation Information</h5>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group col-md-6">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
        </div>
    </div>

    <h5 class="h4 pb-2 pt-4 border-bottom">Information Of Stay in Vancouver</h5>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="addressInVancouver">Address</label>
            <input type="text" class="form-control" id="addressInVancouver" name="addressInVancouver">
        </div>
    </div>

    <div class="overflow-auto mt-2 mb-4" style="background-color: lightgrey;height: 200px;">
        @include('sections.terms-and-conditions')
    </div>

    <div class="form-row border-bottom">
        <div class="form-group col-md-12">
            <div class="form-check">
                <input class="form-check-input me-2" type="checkbox" id="conditions" name="acceptConditions"
                    required />
                <label class="form-check-label" for="conditions">
                    I have read and agree to the <a href="{{ route('terms') }}" target="_blank">terms and
                        conditions</a> above
                </label>
            </div>
        </div>
    </div>



    <div class="d-flex justify-content-end pt-3">
        <button type="button" class="btn btn-secondary md-btn-flat mt-2 mr-3" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mt-2">
            <div class="spinner hidden" id="spinner"></div>
            <span id="button-text">Pay now</span>
        </button>
        <div id="payment-message" class="hidden"></div>
    </div>
</form>
