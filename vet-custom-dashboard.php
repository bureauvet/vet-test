<?php
class vet_dashboard {

  public function __construct( $file ) {
    $this->file = $file;

    remove_action( 'welcome_panel', 'wp_welcome_panel' );

    add_action('wp_dashboard_setup', [ $this , 'remove_dashboard_widgets'] );
    add_action( 'wp_dashboard_setup', [ $this, 'vet_dashboard_news' ] );

    return $this;
  }

  public function vet_dashboard_news() {
  	wp_add_dashboard_widget(
  		'vet_news',   // Widget slug.
  		'Vet Talks',  // Title.
  		[ $this, 'vet_dashboard_vettalks' ]  // Display function.
      );
  }

  /* Add Vet Talks information */
  public function vet_dashboard_vettalks() {
    $this->vet_dashboard_news_message(
      'Groeien met Inbound Marketing 2',
      '15 juni 2020',
      '14:00',
      'Deze keer hebben we het samen met &Content over Inbound marketing. ',
      'https://bureauvet.nl/vettalks'
    );
  }

  public function vet_dashboard_news_message($title, $date, $time, $desc, $registration_url) {
      echo '<h2>' . $title . '</h2>';
      echo '<p>Op ' . $date . ', ' . $time . ' organiseren wij de volgende Vet Talks!';
      echo '<p>' . $desc . '</p>';
      echo '<a href="' . $registration_url . '" class="button" target="_blank">Registreer nu!</a>';
  }

  /* Remove everything from the dashboard */
  public function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']);
  }

}
