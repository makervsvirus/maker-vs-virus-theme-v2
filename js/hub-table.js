  $(document).ready(function() {
    $('#data-table').DataTable({
      "ajax": 'https://test.makervsvirus.org/wp-json/api/v1/hubs',
      "columns": [{
          "data": "hub_description",
          "title": "Description",
          "render": function(data, type, row) {

            //Assuming description = name of the hub
            $.container = $("<div>")

            var hubname = $('<a href="/mvv_hub/' + data +'">')
                          .text("Hub: " + data);
            $.container.append(hubname);

            if(row["hub_email"]){
              var email = $("<p>").text("Mail: " + row["hub_email"]);
              $.container.append(email);
            }

            if(row["hub_twitter"]){
              var twitter = $("<p>").text("Twitter: " + row["hub_twitter"]);
              $.container.append(twitter);
            }

            return $.container.html();
          }
        },
        {
          "data": "hub_offer",
          "title": "Angebot",
          "render": function(data, type, row) {
            $.container = $("<div>")

            if(row["hub_offer"]){
              var offer_head = $("<p>").text("Wir bieten").addClass("dt-datahead");
              $.container.append(offer_head)
              var offer = $("<pre>").text(row["hub_offer"])
              $.container.append(offer)
            }


            if(row["hub_capacity"]){
              var cap_head = $("<p>").text("Kapazitäten").addClass("dt-datahead");
              $.container.append(cap_head)
              var cap = $("<pre>").text(row["hub_capacity"])
              $.container.append(cap)
            }

            return $.container.html()
          }
        },
        {
          "data": "hub_capacity",
          "title": "Capacity",
          "visible": false
        },
        {
          "data": "hub_city",
          "title": "Anschrift",
          "render": function(data, type, row) {
            $.container = $("<div>")
            var city = $("<p>").text(data);
            var state = $("<p>").text(row["hub_state"]);
            var country = $("<p>").text(row["hub_country"]);
            $.container.append(city);
            $.container.append(state);
            $.container.append(country);

            return $.container.html();
          }
        },
        {
          "data": "hub_state",
          "title": "State",
          "visible": false
        },
        {
          "data": "hub_country",
          "title": "Country",
          "visible": false
        },
        {
          "data": "hub_email",
          "title": "E-Mail",
          "visible": false
        },
        {
          "data": "hub_twitter",
          "title": "Twitter",
          "visible": false
        },

      ]
    });
  });
