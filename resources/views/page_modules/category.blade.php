<section>
    <div class="overflow-hidden" style="background: white; border-radius: 10px; padding: 20px;">

        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Category</h1>

            <!-- Button trigger modal -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid green; border-radius: 10px; color: green; padding: 5px 10px; background: transparent; ">
                Create New Category
            </button>
        </div>

        <form action="{{-- {{ route("search_employee") }} --}}" method="get">
            @csrf
            <div style="display: flex; align-items: center; margin-top: 40px; padding: 5px 10px; border-radius: 10px; border: 1px solid green; border-radius: 10px;">
                <i class="fas fa-search" style="margin-right: 10px;"></i>
                <input name="search_employee" type="text" placeholder="Search Category" style="width: 100%; border: none; outline: none;">
            </div>
        </form>
    
        <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px;">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Category Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)    
                        <tr>
                          <th scope="row" class="align-middle">{{ $category->id }}</th>
                          <td class="align-middle">{{ $category->category_name }}</td>
                          <td class="align-middle">{{ $category->status }}</td>
                          <td>
                              <img class="rounded" style="width: 200px; height: 100px; object-fit: cover;" src="category_images/{{ $category->category_image }}" alt="{{ $category->category_image }}">
                          </td>
                          <td class="align-middle">
                            <div class="d-flex gap-2">
                              <button value="{{ $category->id }}" class="view_btn" onMouseOver="this.style.color='#40916c'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-eye" style="font-size: 20px;"></i></button>
                              <button value="{{ $category->id }}" class="edit_btn" onMouseOver="this.style.color='#219ebc'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="fas fa-pencil-alt" style="font-size: 20px;"></i></button>
                              <button value="{{ $category->id }}" class="delete_btn" onMouseOver="this.style.color='#f00'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-trash-alt" style="font-size: 20px;"></i></button>
                            </div>
                          </td>
                          {{-- Edit Modal --}}
                          @include('modals.category.edit_category')
                        </tr>
                        {{-- Delete Modal --}}
                        @include('modals.category.delete_category')
                    @endforeach
                </tbody>
              </table>
              {{ $categories->links() }}
        </div>
    </div>
    <div>
      {{-- View Modal --}}
      @include('modals.category.view_category')
    </div>
    <div>
      {{-- Create Category Modal --}}
      @include('modals.category.create_category')
    </div>
  </div>
</section>