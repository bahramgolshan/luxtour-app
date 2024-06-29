<form id="bookingCheckoutForm" action="{{ route('payment.checkout', ['tour' => $tour]) }}" method="POST">
    @csrf
    <input type="hidden" class="form-control text-center" name="name" value="{{ $bookingData['name'] }}">
    <input type="hidden" class="form-control text-center" name="date" value="{{ $bookingData['date'] }}">
    <div class="cart">

        <div class="table-responsive py-3">
            <table class="table table-bordered m-0">
                <thead>
                    <tr>
                        <th class="text-center py-3 px-4" style="min-width: 200px;">Package
                        </th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Quantity</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookingData['passengers'] as $age => $quantity)
                        <tr>
                            <td class="font-weight-semibold align-middle p-4">
                                {{ $tour->title }}
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
                        <td class="font-weight-normal px-4" colspan="3">
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

        <div class="py-4">
            <p class="text-muted font-weight-normal"><strong>Name:
                </strong>{{ $bookingData['name'] }}
            </p>
            <p class="text-muted font-weight-normal"><strong>Booking
                    Date: </strong>{{ \Carbon\Carbon::parse($bookingData['date'])->format('M d, Y') }}
            </p>
        </div>
        <div class="">
            <p class="text-muted font-weight-normal mb-0">
                <small>
                    At LuxTour, we prioritize your security. When you click "Pay Now" button, you will be redirected to
                    Stripe's secure payment page. <a href="https://stripe.com">Stripe</a> is trusted by millions of
                    businesses worldwide for handling
                    payments securely. Rest assured, your card details are encrypted and protected using
                    industry-leading security
                    protocols.
                </small>
            </p>
        </div>





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
