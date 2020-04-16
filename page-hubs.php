<?php get_header(); ?>

<div class="bg-white">
  <div class="clr-row" style="">
    <div class="clr-col clr-col-sm-8 clr-offset-sm-2 mapcol">
      <h1>Alle Hubs</h1>
      <h3>Sie haben Bedarfe an Teilen für Türgriffhaken, Faceshields oder eine weitere konkrete Materialanfrage?</h3>
      <p>Bitte suchen Sie den nächstgelegenen lokalen "Hub" zu ihrem Standort. Klicken Sie dafür in der Karte auf ihren Bereich oder nutzen sie die Tabelle unter der Karte mit der Suchfunktion oben rechts an der Tabelle. Ihr lokaler Ansprechpartner wird Sie über die genaue Abwicklung, aktuelle Lieferzeitfenster etc. informieren.
        Für Bedarfe über 250 Stück wenden Sie sich bitte an: <a href="mailto:kliniken@makervsvirus.org">kliniken@makervsvirus.org</a>.</p>
      <p>Bitte beachten Sie: Wir konzentrieren uns momentan nicht auf Mund-Nasen-Masken und stellen auch kein Desinfektionsmittel zur Verfügung.</p>
      <p>&nbsp;</p>
    </div>
  </div>
  <div class="clr-row" style="">
    <div class="clr-col clr-col-sm-8 clr-offset-sm-2 mapcol">
      <!-- <iframe id="maps" src="https://www.google.com/maps/d/embed?mid=1Sc7ZRpHDt-98-SCrfmRuFZNbLtF3I-uf" width="100%" height="700" style="border:none"></iframe> -->
      <?php include 'includes/map.php' ?>
    </div>
  </div>

  <?php

  $posts = get_posts(array(
    'post_type'         => 'mvv_hub',
    'posts_per_page'    =>  -1,
    'orderby'           => 'title',
    'order'              => 'ASC'
  ));

  ?>
  <div class="clr-row">
    <div class="clr-col-lg-8 clr-offset-lg-2">
      <div id="data-table-container">
        <table id="data-table" class="table table-striped table-bordered" width="100%">
          <thead>
          </thead>
          <tfoot>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo get_template_directory_uri() ?>/js/hub-table.js"></script>
<?php get_footer(); ?>
