<section>
    <div class="overflow-hidden" style="background: white; border-radius: 10px; padding: 20px;">

        <div {{-- class="d-flex justify-content-between" --}} style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Employee</h1>

            <!-- Button trigger modal -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid green; border-radius: 10px; color: green; padding: 5px 10px; background: transparent; ">
                Create New Employee
            </button>
        </div>

        <form action="{{ route("search_employee") }}" method="get">
            @csrf
            <div style="display: flex; align-items: center; margin-top: 40px; padding: 5px 10px; border-radius: 10px; border: 1px solid green; border-radius: 10px;">
                <i class="fas fa-search" style="margin-right: 10px;"></i>
                <input name="search_employee" type="text" placeholder="Search Employee" style="width: 100%; border: none; outline: none;">
            </div>
        </form>
    
        <div class="text-nowrap" style="overflow-y: hidden; margin-top: 20px;">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Role</th>
                    <th scope="col">Company</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Home Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">State/Province</th>
                    <th scope="col">Zip/Postal Code</th>
                    <th scope="col">Country/Region</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)    
                        <tr>
                          <th scope="row">{{ $user->id }}</th>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->user_type }}</td>
                          <td>{{ $user->role }}</td>
                          <td>{{ $user->company }}</td>
                          <td>{{ $user->job_title }}</td>
                          <td>{{ $user->phone }}</td>
                          <td>{{ $user->home_phone }}</td>
                          <td>{{ $user->address }}</td>
                          <td>{{ $user->city }}</td>
                          <td>{{ $user->state_province }}</td>
                          <td>{{ $user->zip_postal_code }}</td>
                          <td>{{ $user->country_region }}</td>
                          <td>
                              <img class="rounded-circle" style="width: 70px; height: 70px; object-fit: cover;" src="user_photos/{{ $user->photo }}" alt="{{ $user->photo }}">
                          </td>
                          <td >
                            <div class="d-flex gap-2">
                              <button style="border: none; background: transparent;"><i class="far fa-eye" style="font-size: 20px;"></i></button>
                              <button value="{{ $user->id }}" class="edit_btn" style="border: none; background: transparent;"><i class="fas fa-pencil-alt" style="font-size: 20px;"></i></button>
                              <form action="{{ route("delete_employee", $user->id) }}" method="post">
                                    @csrf
                                    <button class="show_remove_confirm" style="border: none; background: transparent;"><i class="far fa-trash-alt" style="font-size: 20px;"></i></button>
                              </form>
                            </div>
                          </td>
                          @include('modals.edit_employee')
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $users->links() }}
        </div>
    </div>

    {{-- Create Employee Modal --}}
    @include('modals.create_employee')
  </div>
</section>