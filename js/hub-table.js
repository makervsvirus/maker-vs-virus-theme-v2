  $(document).ready(function() {
    $('#data-table').DataTable({
      responsive: true,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
      },
      "ajax": '/wp-json/api/v1/hubs',
      "columns": [
        {
          "data": "hub_name",
          "title": "Name",
          "className": 'dt-body-left'
        },{
          "data": "hub_capacity",
          "title": "Kontakt",
          "className": 'dt-body-left',
          "render": function(data, type, row) {
            return "<a href='mailto:"+row["hub_email"]+"'>"+(row["hub_contact_person"]!=""?row["hub_contact_person"]:row["hub_name"])+"</a>";
          }
        },
        {
          "data": "hub_city",
          "title": "Ort",
          "className": 'dt-body-left',
          "render": function(data, type, row) {
            $.container = $("<div>")
            var zip = $("<p>").text(row["hub_zip"]);
            var city = $("<p>").text(data);
            var state = $("<p>").text(row["hub_state"]);
            var country = $("<p>").text(row["hub_country"]);
            $.container.append(zip);
            $.container.append(city);
            $.container.append(state);
            $.container.append(country);

            return $.container.html();
        },
        {
          "data": "hub_state",
          "title": "State",
          "className": 'dt-body-left',
          "visible": false
        },
        {
          "data": "hub_country",
          "title": "Country",
          "className": 'dt-body-left',
          "visible": false
        },
        {
          "data": "hub_zip",
          "title": "Postcode",
          "className": 'dt-body-left',
          "visible": false
        },
        {
          "data": "hub_offer",
          "title": "Wir bieten",
          "className": 'dt-body-left'
        },
        {
          "data": "hub_capacity",
          "title": "Kapazität",
          "className": 'dt-body-left'
        }
      ]
    });
  });
