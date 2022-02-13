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
    </head>
    <body style="background: whitesmoke;">
        @include('layouts.header')

        <main style="display: grid; grid-template-columns: 300px auto; margin: 30px; gap: 30px;">
          @include('layouts.navigation')
          @include('page_modules.order')
        </main>

        <script>
          $(document).ready(function(){

            $(document).on("click", ".view_btn", function(){
              var order_id = $(this).val()

              $("#viewModal").modal('show')

              $.ajax({
                type: "GET",
                url: "/view-order/" + order_id,
                success: function(res){
                  $("#view_id").val(res.order.id)
                  $("#view_employee_id").val(res.order.employee_id)
                  $("#view_order_date").val(res.order.order_date)
                  $("#view_status").val(res.order.status)
                  $("#view_print_qty").val(res.order.print_qty)
                  $("#view_table_id").val(res.order.table_id)
                }
              })
            })
  
            $(document).on("click", ".edit_btn", function(){
              var order_id = $(this).val()
  
              $("#editModal").modal('show')
  
              $.ajax({
                type: "GET",
                url: "/edit-order/" + order_id,
                success: function(res){
                  $("#employee_id").val(res.order.employee_id)
                  $("#order_date").val(res.order.order_date)
                  $("#status").val(res.order.status)
                  $("#print_qty").val(res.order.print_qty)
                  $("#table_id").val(res.order.table_id)
                  $("#id").val(res.order.id)
                }
              })
            })

            $(document).on("click", ".delete_btn", function(){
              var order_id = $(this).val()

              $("#deleteModal").modal('show')

              $.ajax({
                type: "GET",
                url: "/remove-order/" + order_id,
                success: function(res){
                  $("#remove_id").val(res.order.id)
                }
              })
            })
          })
      </script>
    </body>
</html>