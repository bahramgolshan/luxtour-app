<div class="cart">
    <div class="table-responsive">
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
                <tr>
                    <td class="p-3">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="#" class="d-block text-dark">Child</a>
                                <small>
                                    <span class="text-muted">6 – 12 years</span>
                                </small>
                            </div>
                        </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['child']['price'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ $orderData['child']['quantity'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['child']['total'] }}
                    </td>
                </tr>
                <tr>
                    <td class="p-3">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="#" class="d-block text-dark">Youth</a>
                                <small>
                                    <span class="text-muted">13 – 17 years</span>
                                </small>
                            </div>
                        </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['youth']['price'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ $orderData['youth']['quantity'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['youth']['total'] }}
                    </td>
                </tr>
                <tr>
                    <td class="p-3">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="#" class="d-block text-dark">Adult</a>
                                <small>
                                    <span class="text-muted">18 – 64 years</span>
                                </small>
                            </div>
                        </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['adult']['price'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ $orderData['adult']['quantity'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['adult']['total'] }}
                    </td>
                </tr>
                <tr>
                    <td class="p-3">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="#" class="d-block text-dark">Senior</a>
                                <small>
                                    <span class="text-muted">65+ years</span>
                                </small>
                            </div>
                        </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['senior']['price'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ $orderData['senior']['quantity'] }}
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">${{ $orderData['senior']['total'] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
        <div class="mt-4">
            <label class="text-muted font-weight-normal">Date of commence</label>
            <div class="text-large">{{ $orderData['date'] }}</div>
        </div>
        <div class="d-flex">
            <div class="text-right mt-4">
                <label class="text-muted font-weight-normal m-0">Total price</label>
                <div class="text-large">
                    <strong>${{ $orderData['finalPrice'] }}</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="float-right">
        <button type="button" class="btn btn-secondary md-btn-flat mt-2 mr-3">Close</button>
        <button type="button" onclick="formSubmit()" class="btn btn-primary mt-2">Checkout</button>
    </div>
</div>
