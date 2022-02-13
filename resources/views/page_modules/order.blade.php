<section>
    <div class="overflow-hidden" style="background: white; border-radius: 10px; padding: 20px;">

        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Order</h1>

            <!-- Button trigger modal -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid green; border-radius: 10px; color: green; padding: 5px 10px; background: transparent; ">
                Create New Order
            </button>
        </div>

        <form action="{{ route("search_order") }}" method="get">
            @csrf
            <div style="display: flex; align-items: center; margin-top: 40px; padding: 5px 10px; border-radius: 10px; border: 1px solid green; border-radius: 10px;">
                <i class="fas fa-search" style="margin-right: 10px;"></i>
                <input name="search_order" type="text" placeholder="Search Order" style="width: 100%; border: none; outline: none;">
            </div>
        </form>
    
        <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px;">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Print Qty</th>
                    <th scope="col">Table ID</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)    
                        <tr>
                          <th scope="row" class="align-middle">{{ $order->id }}</th>
                          <td class="align-middle">{{ $order->employee_id }}</td>
                          <td class="align-middle">{{ $order->order_date }}</td>
                          <td class="align-middle">{{ $order->status }}</td>
                          <td class="align-middle">{{ $order->print_qty }}</td>
                          <td class="align-middle">{{ $order->table_id }}</td>
                          <td class="align-middle">
                            <div class="d-flex gap-2">
                              <button value="{{ $order->id }}" class="view_btn" onMouseOver="this.style.color='#40916c'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-eye" style="font-size: 20px;"></i></button>
                              <button value="{{ $order->id }}" class="edit_btn" onMouseOver="this.style.color='#219ebc'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="fas fa-pencil-alt" style="font-size: 20px;"></i></button>
                              <button value="{{ $order->id }}" class="delete_btn" onMouseOver="this.style.color='#f00'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-trash-alt" style="font-size: 20px;"></i></button>
                            </div>
                          </td>
                          {{-- Edit Modal --}}
                          @include('modals.order.edit_order')
                        </tr>
                        {{-- Delete Modal --}}
                        @include('modals.order.delete_order')
                    @endforeach
                </tbody>
              </table>
              {{ $orders->links() }}
        </div>
    </div>
    <div>
      {{-- View Modal --}}
      @include('modals.order.view_order')
    </div>
    <div>
      {{-- Create Order Modal --}}
      @include('modals.order.create_order')
    </div>
  </div>
</section>