<section>
    <div class="overflow-hidden" style="background: white; border-radius: 10px; padding: 20px;">
        @if(session()->has('table_created'))
          <div style="border-radius: 10px" class="alert alert-primary" role="alert">
              {{ session()->get('table_created') }}
          </div>
        @endif

        @if(session()->has('table_updated'))
            <div style="border-radius: 10px" class="alert alert-warning" role="alert">
                {{ session()->get('table_updated') }}
            </div>
        @endif

        @if(session()->has('table_deleted'))
            <div style="border-radius: 10px" class="alert alert-danger" role="alert">
                {{ session()->get('table_deleted') }}
            </div>
        @endif

        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Table</h1>

            <!-- Button trigger modal -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid green; border-radius: 10px; color: green; padding: 5px 10px; background: transparent; ">
                Create New Table
            </button>
        </div>

        <form action="{{ route("search_table") }}" method="get">
            @csrf
            <div style="display: flex; align-items: center; margin-top: 40px; padding: 5px 10px; border-radius: 10px; border: 1px solid green; border-radius: 10px;">
                <i class="fas fa-search" style="margin-right: 10px;"></i>
                <input name="search_table" type="text" placeholder="Search Table" style="width: 100%; border: none; outline: none;">
            </div>
        </form>
    
        <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px;">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Table Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table)    
                        <tr>
                          <th scope="row" class="align-middle">{{ $table->id }}</th>
                          <td class="align-middle">{{ $table->table_name }}</td>
                          <td class="align-middle">{{ $table->description }}</td>
                          <td class="align-middle">{{ $table->status }}</td>
                          <td class="align-middle">
                            <div class="d-flex gap-2">
                              <button value="{{ $table->id }}" class="view_btn" onMouseOver="this.style.color='#40916c'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-eye" style="font-size: 20px;"></i></button>
                              <button value="{{ $table->id }}" class="edit_btn" onMouseOver="this.style.color='#219ebc'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="fas fa-pencil-alt" style="font-size: 20px;"></i></button>
                              <button value="{{ $table->id }}" class="delete_btn" onMouseOver="this.style.color='#f00'" onMouseOut="this.style.color='#000'" style="border: none; background: transparent;"><i class="far fa-trash-alt" style="font-size: 20px;"></i></button>
                            </div>
                          </td>
                          {{-- Edit Modal --}}
                          @include('modals.table.edit_table')
                        </tr>
                        {{-- Delete Modal --}}
                        @include('modals.table.delete_table')
                    @endforeach
                </tbody>
              </table>
              {{ $tables->links() }}
        </div>
    </div>
    <div>
      {{-- View Modal --}}
      @include('modals.table.view_table')
    </div>
    <div>
      {{-- Create Table Modal --}}
      @include('modals.table.create_table')
    </div>
  </div>
</section>