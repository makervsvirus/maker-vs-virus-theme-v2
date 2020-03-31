<div id="data-table-container table-responsive" class="container">
    <table id="data-table" class="table table-striped table-bordered" width="100%">
        <thead>
        </thead>
        <tfoot>
        </tfoot>
    </table>
</div>


<script>
  $(document).ready(function() {
    $('#data-table').DataTable({
      "ajax": '/wp-json/api/v1/hubs',
      "columns": [{
          "data": "hub_description",
          "title": "Description"
        },
        {
          "data": "hub_offer",
          "title": "Offer"
        },
        {
          "data": "hub_capacity",
          "title": "Capacity"
        },
        {
          "data": "hub_city",
          "title": "City"
        },
        {
          "data": "hub_state",
          "title": "State"
        },
        {
          "data": "hub_country",
          "title": "Country"
        },
        {
          "data": "hub_email",
          "title": "E-Mail"
        }
      ]
    });
  });
</script>