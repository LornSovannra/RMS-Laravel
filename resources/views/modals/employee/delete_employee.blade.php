<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route("delete_employee") }}" method="post">
            @csrf

            <div class="modal-body">
                <div class="text-center">
                    <input type="hidden" name="remove_id" id="remove_id">
    
                    <h1>Are you sure you want to delete it?</h1>
                    <img class="rounded mt-4" src="https://cdn.thinglink.me/api/image/459017412189093889/1024/10/scaletowidth/0/0/1/1/false/true?wait=true" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </div>
        </form>
    </div>
</div>