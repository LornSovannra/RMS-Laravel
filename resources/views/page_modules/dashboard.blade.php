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

        <div style="display: flex; margin-top: 20px;">
            <div id="columnchart_material" style="width: 700px; height: 400px;"></div>
            <div id="donutchart" style="width: 700px; height: 300px;"></div>
        </div>

        <div style="display: flex; margin-top: 20px;">
            <div id="piechart" style="width: 700px; height: 300px;"></div>
            <div id="barchart_material" style="width: 700px; height: 400px;"></div>
        </div>
    </div>
</section>