<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >

        {{-- Pie Chart --}}
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['Work',     11],
              ['Eat',      2],
              ['Commute',  2],
              ['Watch TV', 2],
              ['Sleep',    7]
            ]);
    
            var options = {
              title: 'My Daily Activities',
              is3D: true,
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>
    </head>
    <body style="background: whitesmoke;">
        @include('layouts.header')

        <main style="display: grid; grid-template-columns: 300px auto; margin: 30px; gap: 30px;">
          @include('layouts.navigation')
          @include('page_modules.employee')
        </main>

        <script>
          $(document).ready(function(){
            $('.show_remove_confirm').click(function(e) {
                if(!confirm('Are you sure you want to delete this?')) {
                    e.preventDefault();
                }
            });
  
            $(document).on("click", ".edit_btn", function(){
              var user_id = $(this).val()
  
              $("#editModal").modal('show')
  
              $.ajax({
                type: "GET",
                url: "/edit-employee/" + user_id,
                success: function(res){
                  $("#name").val(res.user.name)
                  $("#email").val(res.user.email)
                  $("#user_type").val(res.user.user_type)
                  $("#role").val(res.user.role)
                  $("#company").val(res.user.company)
                  $("#job_title").val(res.user.job_title)
                  $("#phone").val(res.user.phone)
                  $("#home_phone").val(res.user.home_phone)
                  $("#address").val(res.user.address)
                  $("#city").val(res.user.city)
                  $("#state_province").val(res.user.state_province)
                  $("#zip_postal_code").val(res.user.zip_postal_code)
                  $("#country_region").val(res.user.country_region)
                  $("#id").val(res.user.id)
                }
              })
            })
          })
      </script>
    </body>
</html>