<section>
    <div class="overflow-hidden" style="background: white; border-radius: 10px; padding: 20px;">

        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Item</h1>

            <!-- Button trigger modal -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid green; border-radius: 10px; color: green; padding: 5px 10px; background: transparent; ">
                Create New Item
            </button>
        </div>

        <form action="{{-- {{ route("search_employee") }} --}}" method="get">
            @csrf
            <div style="display: flex; align-items: center; margin-top: 40px; padding: 5px 10px; border-radius: 10px; border: 1px solid green; border-radius: 10px;">
                <i class="fas fa-search" style="margin-right: 10px;"></i>
                <input name="search_employee" type="text" placeholder="Search Item" style="width: 100%; border: none; outline: none;">
            </div>
        </form>
    
        <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px;">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category ID</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Item Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)    
                        <tr>
                          <th scope="row" class="align-middle">{{ $item->id }}</th>
                          <td class="align-middle">{{ $item->item_name }}</td>
                          <td class="align-middle">{{ $item->description }}</td>
                          <td class="align-middle">{{ $item->category_id }}</td>
                          <td class="align-middle">{{ $item->status }}</td>
                          <td>
                              <img class="rounded-circle" style="width: 70px; height: 70px; object-fit: cover;" src="item_images/{{ $item->item_image }}" alt="{{ $item->item_image }}">
                          </td>
                          <td class="align-middle">
                            <div class="d-flex gap-2">
                              <button value="{{ $item->id }}" class="view_btn" onMouseOver="this.style.color='#40916c'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-eye" style="font-size: 20px;"></i></button>
                              <button value="{{ $item->id }}" class="edit_btn" onMouseOver="this.style.color='#219ebc'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="fas fa-pencil-alt" style="font-size: 20px;"></i></button>
                              <button value="{{ $item->id }}" class="delete_btn" onMouseOver="this.style.color='#f00'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-trash-alt" style="font-size: 20px;"></i></button>
                            </div>
                          </td>
                          {{-- Edit Modal --}}
                          @include('modals.item.edit_item')
                        </tr>
                        {{-- Delete Modal --}}
                        @include('modals.item.delete_item')
                    @endforeach
                </tbody>
              </table>
              {{ $items->links() }}
        </div>
    </div>
    <div>
      {{-- View Modal --}}
      @include('modals.item.view_item')
    </div>
    <div>
      {{-- Create Item Modal --}}
      @include('modals.item.create_item')
    </div>
  </div>
</section>