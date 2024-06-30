<form id="bookingCheckoutForm" class="p-2" action="{{ route('payment.checkout', ['tour' => $tour]) }}" method="POST">
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
                        <td class="font-weight-normal px-4" colspan="3">Discount</td>
                        <td class="text-center font-weight-normal">
                            <div class="text-large">
                                {{ config('app.currency.symbol') . number_format($bookingData['amountDiscount'], 2, '.', '') }}
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
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
    </div>

    <div class="overflow-auto mt-2 mb-4" style="background-color: lightgrey;height: 200px;">
        <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id nemo magnam eveniet minima
            quo suscipit
            laborum nam earum pariatur ipsum. Aspernatur earum labore molestiae sed alias, beatae adipisci. Unde
            amet recusandae, corrupti voluptate porro neque laborum quis veritatis expedita ad voluptatem harum
            adipisci dicta id dolor cupiditate asperiores optio itaque? Quo harum cumque explicabo perferendis optio
            eos aut porro fugiat quae expedita sed eaque eveniet quaerat neque magnam animi veniam repudiandae,
            adipisci aperiam. Aspernatur necessitatibus vel ex explicabo dolore quis inventore quas eaque
            consequuntur, tempora similique nam unde autem minima odio vitae! Soluta debitis ex earum quas
            laudantium possimus, quaerat inventore omnis, vel quidem cumque tenetur laborum, similique animi
            expedita accusamus ut sequi adipisci? Inventore veniam aut iste facere, tempore nihil assumenda culpa
            iusto, fuga possimus minus dolore ut aliquam praesentium deleniti id laboriosam facilis harum amet ea
            repellendus sunt ipsa consectetur nam. Incidunt reiciendis accusantium fuga beatae modi minima, sint id
            maiores? Incidunt cumque nostrum voluptatem quas amet consequatur quo. Numquam, veniam! Deserunt id
            dolor explicabo inventore. Repellat totam nesciunt, officiis beatae soluta nam sunt modi asperiores
            necessitatibus! Maiores unde rerum ipsam non perspiciatis. Exercitationem a cum rem architecto, debitis
            incidunt corrupti? Aut, tempore architecto culpa delectus, sunt consectetur recusandae ut, nesciunt
            dolorem officiis veritatis! Numquam nobis aspernatur ex voluptas, officiis quae modi est iste qui optio
            reprehenderit expedita velit, rerum magni fugit totam! Earum nostrum sint numquam sed at mollitia
            aspernatur porro ut accusantium iste! Fuga saepe nostrum impedit eos quisquam ducimus modi officiis,
            suscipit expedita quo porro consequatur deserunt ipsa dolores! Culpa deserunt quisquam expedita itaque,
            tempora architecto officiis iste veniam amet eos natus illum odio. Provident nemo at repellendus quas
            quia dicta error, vitae maiores porro beatae saepe nam totam dolorem expedita delectus tenetur fugiat?
            Placeat, voluptatibus doloremque exercitationem delectus expedita iusto consequuntur autem laudantium
            cumque excepturi, iste nam unde impedit magnam rem est voluptatum, et reprehenderit earum? Natus
            dolores, maxime enim nesciunt consequatur eos at reiciendis est quod voluptatem ad ipsum officia
            officiis nostrum quidem repellat, distinctio nisi. Vero dolorem autem nemo odio consectetur temporibus,
            atque possimus ipsam, quaerat aut nam rerum quisquam quidem voluptatum laboriosam repellendus. Ratione,
            exercitationem quod, consequatur sed animi enim, quibusdam voluptas tempora aut et iusto ipsam nihil
            tempore impedit totam cumque accusamus dignissimos eveniet itaque debitis. Veritatis sint quia
            temporibus minima, cupiditate, aspernatur amet placeat saepe magni facere dignissimos, non vitae soluta
            odit itaque sapiente architecto quis nihil. Officia, obcaecati quas! Distinctio adipisci neque ipsa
            facere quia aliquid eveniet nesciunt iste deserunt ipsam dolorem excepturi saepe recusandae animi,
            laudantium blanditiis qui aliquam iusto consequuntur nostrum, asperiores rerum facilis voluptas rem!
            Neque atque repellat voluptatem ab et quidem odio est. Architecto ad tempora dolorum expedita optio unde
            necessitatibus molestias aliquid! Iste natus consequuntur accusamus facilis, tempore sit cum. Nihil
            doloremque dolorum rerum laboriosam repudiandae quae aliquid voluptatem ea et nisi. Accusamus
            asperiores, atque saepe ipsam dolor sed in soluta possimus id, ducimus labore voluptate aspernatur harum
            excepturi? Illum reiciendis quas at earum expedita autem, nam quam cupiditate mollitia unde,
            necessitatibus modi deserunt porro nisi beatae non quisquam eveniet corrupti suscipit incidunt! Fuga
            inventore minus cupiditate eius. Earum laudantium odio amet eaque sed excepturi, magnam voluptates
            possimus impedit quisquam beatae eum reprehenderit doloremque ipsum corrupti rem architecto enim,
            adipisci animi temporibus perspiciatis atque nemo vero delectus. Consequuntur veniam impedit ut incidunt
            reiciendis corrupti? Iste modi minima blanditiis laudantium ex, dicta dolorem aut quibusdam voluptas
            ipsam reprehenderit magnam corrupti facilis, consectetur sapiente distinctio expedita in dolorum ipsa
            error nam assumenda? Qui, dolor magnam! Accusamus fugit possimus ipsa reprehenderit quia sequi, unde
            tempora voluptatibus dolores sit animi maxime ipsum enim repellendus nisi deleniti at. Natus nesciunt
            facere consequatur non ducimus, quo veritatis ex obcaecati praesentium incidunt accusamus et ad enim
            porro saepe corporis! Magnam illum quis dignissimos corrupti natus molestias quam culpa illo explicabo
            eum nobis, perspiciatis aperiam aut reiciendis nam laborum accusamus, facere temporibus! Provident
            maxime modi neque corrupti vel id unde doloremque alias. Exercitationem, consequatur unde itaque
            deleniti accusamus dolor reiciendis eos tempore id beatae? Molestiae consequatur laudantium sed,
            perspiciatis harum architecto, in et nihil quia cupiditate ab voluptatem repellendus? Suscipit quas
            possimus recusandae, quae sapiente ab. Accusantium quas in sit iste, distinctio explicabo? Voluptatibus
            eos sit, perferendis atque, corrupti repellendus enim veritatis harum quibusdam inventore in! Excepturi
            iure repellat minima reiciendis voluptatem necessitatibus quas laboriosam, enim veritatis recusandae
            sunt dolore, voluptates rerum magni obcaecati. Voluptates asperiores nobis beatae culpa totam sint.
            Totam rerum distinctio maiores, odio sint odit obcaecati nesciunt ullam aperiam, numquam reprehenderit
            nostrum expedita eius voluptatibus molestias temporibus repellat reiciendis quia, rem harum optio veniam
            officiis in aspernatur! Temporibus quos assumenda minus tempore eaque quia ipsam natus! Labore,
            doloribus facilis saepe possimus, dolorem hic, assumenda libero vitae dolor repellendus ut ex! Debitis
            odit iusto ipsa cum hic, iste minus numquam odio deserunt culpa optio illo laudantium eligendi nihil
            amet quidem commodi totam dignissimos nulla natus. Nostrum, a asperiores harum, ut dolore provident
            possimus doloribus quidem modi sapiente doloremque eveniet ex praesentium aperiam dicta obcaecati. Totam
            iusto nemo nisi repellendus? Eligendi voluptate est ab aliquam itaque soluta laboriosam mollitia illo
            nihil, quod, deleniti eius. Odio est, vel fugiat repellat quaerat consectetur id inventore itaque
            recusandae quibusdam perferendis eum nulla. Ab, at harum pariatur et dolorem dignissimos architecto nisi
            assumenda vitae fugit? Ex ducimus molestiae nulla facilis, fugit dolore pariatur, vero alias officiis
            beatae dolorem omnis temporibus eveniet amet quae repellendus. Repellat excepturi aspernatur repellendus
            ipsa modi non, expedita aperiam reprehenderit, eveniet corporis autem quos placeat doloribus deserunt
            laudantium, at nemo? Itaque alias aliquid iure asperiores magnam ullam distinctio nobis ipsum, neque
            eaque earum voluptate, sit similique quasi soluta modi est reiciendis sapiente esse doloribus laudantium
            sint non molestiae. Ducimus assumenda reiciendis ex ullam distinctio, at facere quos hic ipsa tenetur
            asperiores excepturi repellat consequuntur omnis et odio accusantium facilis aspernatur iusto
            perspiciatis, ad illo architecto. Deserunt, repellendus consequatur itaque hic doloremque expedita harum
            facere doloribus repellat provident illum adipisci voluptate iste impedit dolorem commodi, deleniti
            tempora animi inventore officiis minima voluptatibus temporibus, laboriosam cumque. Molestiae quisquam
            totam soluta ullam cumque!</p>
    </div>

    <div class="form-row border-bottom">
        <div class="form-group col-md-12">
            <div class="form-check">
                <input class="form-check-input me-2" type="checkbox" id="conditions" name="acceptConditions"
                    required />
                <label class="form-check-label" for="conditions">
                    I have read and agree to the <a href="https://#" target="_blank">terms and conditions</a> above
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

    {{-- <div>
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
        </div> --}}
</form>
