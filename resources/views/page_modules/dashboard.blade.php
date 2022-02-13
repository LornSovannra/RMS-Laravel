<section>  
    <div style="background: white; border-radius: 10px;">
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

        <div id="piechart_3d" style="width: 900px; height: 500px; margin: 20px;"></div>
    </div>
</section>