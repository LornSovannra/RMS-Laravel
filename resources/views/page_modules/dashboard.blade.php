<section>  
    <div style="background: white; border-radius: 10px; padding: 20px;">
        @if(session()->has('changed_password_successfully'))
            <div style="border-radius: 10px" class="alert alert-primary" role="alert">
                {{ session()->get('changed_password_successfully') }}
            </div>
        @endif

        @if(session()->has('fail_to_change_password'))
            <div style="border-radius: 10px" class="alert alert-danger" role="alert">
                {{ session()->get('fail_to_change_password') }}
            </div>
        @endif

        <div>
            <div class="row" style="color: white;">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div style="background: #023e8a; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                        <div style="margin: 0 10px;">
                            <div><p>Order Detail</p></div>
                            <div><p style="text-align: right; font-size: 20px;">{{ $num_of_order_detail }}</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div style="background: #d90429; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                        <div style="margin: 0 10px;">
                            <div><p>Order</p></div>
                            <div><p style="text-align: right; font-size: 20px;">{{ $num_of_order }}</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div style="background: #f77f00; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                        <div style="margin: 0 10px;">
                            <div><p>Item</p></div>
                            <div><p style="text-align: right; font-size: 20px;">{{ $num_of_item }}</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div style="background: #ff4d6d; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                        <div style="margin: 0 10px;">
                            <div><p>Table</p></div>
                            <div><p style="text-align: right; font-size: 20px;">{{ $num_of_table }}</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div style="background: #8338ec; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                        <div style="margin: 0 10px;">
                            <div><p>Category</p></div>
                            <div><p style="text-align: right; font-size: 20px;">{{ $num_of_categorie }}</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div style="background: #38b000; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                        <div style="margin: 0 10px;">
                            <div><p>Employee</p></div>
                            <div><p style="text-align: right; font-size: 20px;">{{ $num_of_employee }}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-between mt-2" style="padding: 0 10px;">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px; padding: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                    <h3 style="font-weight: 600; color: #2d6a4f;">Recent Order</h3>
                    <table class="table table-striped mt-2">
                        <thead>
                          <tr style="color: #2d6a4f;">
                            <th scope="col">ID</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Print Qty</th>
                            <th scope="col">Table Name</th>
                          </tr>
                        </thead>    
                        <tbody>
                            @foreach ($orders as $order)    
                                <tr>
                                  <th scope="row" class="align-middle">{{ $order->id }}</th>
                                  <td class="align-middle">{{ $order->name }}</td>
                                  <td class="align-middle">{{ $order->order_date }}</td>
        
                                  @if ($order->status == "Approved" )
                                    <td class="align-middle"><span style="color: whitesmoke; background: #52b788; padding: 2px 7px; border-radius: 20px;">{{ $order->status }}</span></td>
                                  @elseif ($order->status == "Refunded")
                                    <td class="align-middle"><span style="color: whitesmoke; background: #ffc600; padding: 2px 7px; border-radius: 20px;">{{ $order->status }}</span></td>
                                  @else
                                    <td class="align-middle"><span style="color: whitesmoke; background: #adb5bd; padding: 2px 7px; border-radius: 20px;">{{ $order->status }}</span></td>
                                  @endif
                                  
                                  <td class="align-middle">{{ $order->print_qty }}</td>
                                  <td class="align-middle">{{ $order->table_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px; padding: 10px; box-shadow: 0px 0px 6px 0px rgba(0, 153, 255, 0.16);">
                    <h3 style="font-weight: 600; color: #2d6a4f;">Recent Order Detail</h3>
                    <table class="table table-striped mt-2">
                        <thead>
                          <tr style="color: #2d6a4f;">
                            <th scope="col">ID</th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Qty Order</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_details as $order_detail)    
                                <tr>
                                  <th scope="row" class="align-middle">{{ $order_detail->id }}</th>
                                  <td class="align-middle">{{ $order_detail->order_id }}</td>
                                  <td class="align-middle">{{ $order_detail->item_name }}</td>
                                  <td class="align-middle">{{ $order_detail->qty_order }}</td>
                                  {{-- Edit Modal --}}
                                  @include('modals.order_detail.edit_order_detail')
                                </tr>
                                {{-- Delete Modal --}}
                                @include('modals.order_detail.delete_order_detail')
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>