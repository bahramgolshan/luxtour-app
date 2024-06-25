<form id="bookingCheckoutForm" action="{{ route('payment.checkout', ['tour' => $tour]) }}" method="POST">
    @csrf
    <input type="hidden" class="form-control text-center" name="date" value="{{ $bookingData['date'] }}">
    <div class="cart">

        <p><strong>Tour Package:</strong> {{ $tour->title }}</p>
        <p><strong>Booking Date:</strong>
            {{ \Carbon\Carbon::parse($bookingData['date'])->format('M d, Y') }}</p>

        <div class="table-responsive py-3">
            <table class="table table-bordered m-0">
                <thead>
                    <tr>
                        <th class="text-center py-3 px-4" style="min-width: 400px;">Age Tier
                        </th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Quantity</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookingData['passengers'] as $age => $quantity)
                        <tr>
                            <td class="p-3">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <div>{{ __('tour.' . $age . '.title') }}
                                            ({{ __('tour.' . $age . '.ageRange') }})
                                        </div>
                                        <small>
                                            <span class="text-muted">{{ __('tour.' . $age . '.description') }}</span>
                                        </small>
                                    </div>
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
                    <tr>
                        <td class="font-weight-normal" colspan="3">
                            <strong>Total Amount</strong>
                        </td>
                        <td class="text-center font-weight-normal">
                            <div class="text-large">
                                <strong>{{ config('app.currency.symbol') . number_format($bookingData['amountTotal'], 2, '.', '') }}</strong>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        {{-- <div class="py-4">
            <p class="text-muted font-weight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis,
                delectus reprehenderit harum voluptate.</p>
        </div> --}}

        <div class="float-right">
            <button type="button" class="btn btn-secondary md-btn-flat mt-2 mr-3" data-dismiss="modal">Close</button>
            <button type="submit" id="submit" class="btn btn-primary mt-2">
                <div class="spinner hidden" id="spinner"></div>
                <span id="button-text">Pay now</span>
            </button>
            <div id="payment-message" class="hidden"></div>
        </div>
    </div>
</form>
