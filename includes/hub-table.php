<div style="margin-top: .5rem; display: flex; justify-content: end;">
  <label for="hub_search">
    <clr-icon shape="search"></clr-icon>
  </label>
  <input type="text" class="clr-input" id="hub_search" placeholder="suchen" />
</div>


<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Ort</th>
      <th>Wir bieten</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post) : ?>

      <?php
      $searchstr = get_the_title() . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_contact_person', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_email', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_twitter', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_city', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_state', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_country', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_offer', true) . "_";
      $searchstr .= get_post_meta($post->ID, 'hub_capacity', true) . "_";
      ?>

      <tr class="hub_table_row" onclick="document.location.href = '<?php echo get_permalink() ?>'" class="c-pointer" searchstring="<?php echo $searchstr; ?>">
        <td>
          <a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
          <br />&nbsp;<br />

          <?php echo get_post_meta($post->ID, 'hub_contact_person', true) ?><br />
          <?php echo get_post_meta($post->ID, 'hub_email', true) ?><br />
          <?php echo get_post_meta($post->ID, 'hub_twitter', true) ?><br />
        </td>
        <td>
          <?php echo get_post_meta($post->ID, 'hub_city', true) ?><br />
          <?php echo get_post_meta($post->ID, 'hub_state', true) ?><br />
          <?php echo get_post_meta($post->ID, 'hub_country', true) ?>
        </td>
        <td>
          <b>Wir bieten</b><br />
          <?php echo nl2br(get_post_meta($post->ID, 'hub_offer', true)) ?>

          <br />&nbsp;<br />
          <b>Kapazitäten</b><br />
          <?php echo get_post_meta($post->ID, 'hub_capacity', true) ?>
        </td>
      </tr>

    <?php endforeach; ?>
  </tbody>
</table>

<script>
  $(document).ready(() => {
    $('#hub_search').on('keyup', (e) => {
      let value = $('#hub_search').val();
      console.log(value);

      $('.hub_table_row').each((index, row) => {

        console.log(row);

        if (value != "") {
          let index = $(row).attr('searchstring').toLowerCase().indexOf(value);
  
          if (index > -1) {
            $(row).css('display', 'table-row');
          } else {
            $(row).css('display', 'none');
          }
        } else {
          $(row).css('display', 'table-row');
        }
      });

    });
  });
</script>