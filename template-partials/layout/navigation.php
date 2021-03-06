<?php
/**
 * Layout part for displaying the navigation
 *
 * @package soapatrickeight
 */

?>

<div class="site-navigation">
  <nav class="main-navigation">
    <ul>
      <li>
        <a class="main-navigation__link main-navigation__link--home" href="<?php echo esc_url( home_url() ); ?>" aria-label="Home">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 894.28 1024" class="main-navigation__icon main-navigation__icon--home">
            <path d="M323.6,1023.67,572.31,197.44h177.1c51.76,0,89.85,6.51,112.64,19.54,21.81,12.37,32.23,34.83,32.23,68.36,0,27-6.19,60.23-18.23,99L828.52,542.52c-11.4,37.11-23.77,68.36-37.11,92.78-13,23.76-28.65,43-46.88,57-17.91,14-39.72,24.09-64.46,30-25.07,6.19-56,9.12-91.8,9.12H553.11L465.21,1024h0l-141.61-.33ZM636.45,582.89A51.51,51.51,0,0,0,658.91,578c7.16-3.25,13.35-9.44,19.21-18.23,5.2-8.13,10.74-19.2,16.27-33.2q8.31-20.51,17.58-53.72c8.47-26.69,14.65-48.83,18.56-65.43,3.91-16.93,5.86-29.63,5.86-38.74,0-11.07-3.58-17.91-10.42-20.84-4.88-1.95-11.39-2.93-20.18-2.93l-38.09.33-66.41,221-4.89,16.28Z"/>
            <path d="M130.56,856.83c-6.84,0-15.63-.32-16.28-.32-33.21-1.63-59.9-9.12-79.43-22.47C12.06,818.42.67,792.7,0,754.94c-.32-25.39,4.89-57.3,15.63-94.41L34.2,596.07H170.27l-12.69,41.67c-4.56,17.58-6.84,30.28-6.84,39.72.33,19.86,11.4,31.25,30.28,31.25h1a73.18,73.18,0,0,0,15.3-1.63l.66-.32a50.68,50.68,0,0,0,22.13-15c9.12-11.07,17.26-27.67,24.74-51.43,4.89-17.91,7.17-33.54,7.17-47.53,0-24.42-5.86-45.91-17.58-63.16-11.07-16.28-23.12-32.88-36.46-49.16-8.47-9.76-16.93-20.51-25.4-31.57a206.37,206.37,0,0,1-21.81-35.81,213.32,213.32,0,0,1-15.62-42.65,207.61,207.61,0,0,1-6.19-52.09c0-30.92,6.19-67.06,18.23-108.08,11.39-37.11,24.42-69.66,38.74-96.68,14.32-26.37,31.25-48.51,50.46-65.11a185.79,185.79,0,0,1,67.39-36.79C329.47,3.91,359.74,0,393.92,0,440.15,0,475,8.14,498.1,24.09c22.46,15.63,33.53,41.67,33.53,79.76,0,25.39-5.86,57-16.93,94.08l-19.53,64.13H357.79l14.65-43.62c4.88-17.25,7.48-30.28,7.48-39.39,0-20.18-11.06-31.58-30.6-31.58-15.3,0-28.32,5.86-38.09,17.58-9.44,11.07-16.92,28-23.43,52.41A155.66,155.66,0,0,0,282.91,237a100.72,100.72,0,0,0-1.3,17.25c0,21.49,5.53,40.37,16.28,56.32,10.09,15,22.13,30.28,35.16,45.9,8.13,9.77,16.6,20.51,25.39,31.58a246.34,246.34,0,0,1,22.46,36.46c6.84,13.35,12.37,28.65,16.93,44.93s6.84,34.83,6.84,55a347.36,347.36,0,0,1-3.91,49.48c-2.6,17.91-7.16,37.12-13,57.63-13,43.62-27,80.08-41.67,109.05C331.42,768.94,314.16,792.38,295,810a167.1,167.1,0,0,1-67.06,36.79c-26.05,7.16-56.65,10.74-91.48,10.74A18.09,18.09,0,0,0,130.56,856.83Z"/>
          </svg>
        </a>
      </li>
      <li>
        <a class="main-navigation__link main-navigation__link--animation" href="<?php echo esc_url( home_url( '/' ) ); ?>storage" aria-label="<?php esc_html_e( 'Storage', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Storage', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" class="secondary" d="M32 160v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V160zm288 84a12 12 0 0 1-12 12H204a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h104a12 12 0 0 1 12 12z"></path>
            <path fill="currentColor" class="primary" d="M512 64v48a16 16 0 0 1-16 16H16a16 16 0 0 1-16-16V64a32 32 0 0 1 32-32h448a32 32 0 0 1 32 32z"></path>
          </svg>
        </a>
      </li>
      <li>
        <a class="main-navigation__link main-navigation__link--animation" href="<?php echo get_post_type_archive_link( 'lab' ) ?>" aria-label="<?php esc_html_e( 'Lab', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Lab', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" class="primary" d="M138.07 320h171.84l72.93 117.29a6.4 6.4 0 0 1 .09 7.12 6.11 6.11 0 0 1-5.88 3.52H70.89a6.08 6.08 0 0 1-5.89-3.46 6.45 6.45 0 0 1 .11-7.18z"></path>
            <path fill="currentColor" class="secondary" d="M112 64h224a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16H112a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16zm325.19 339.5L320 215V96h-64v137.27l126.85 204a6.4 6.4 0 0 1 .09 7.12 6.11 6.11 0 0 1-5.88 3.52H70.89a6.08 6.08 0 0 1-5.89-3.44 6.45 6.45 0 0 1 .11-7.18L192 233.27V96h-64v119L10.79 403.5c-29.3 47.1 4.5 108.5 60.1 108.5h306.2c55.7 0 89.4-61.5 60.1-108.5z"></path>
          </svg>
        </a>
      </li>
      <li>
        <a class="main-navigation__link main-navigation__link--animation" href="<?php echo get_post_type_archive_link( 'factory' ) ?>" aria-label="<?php esc_html_e( 'Factory', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Factory', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" class="secondary" d="M512 184v272a24 24 0 0 1-24 24H136a24 24 0 0 0 24-24V252.31l139.12-88.53A24 24 0 0 1 336 184v68.28l139.12-88.53A24 24 0 0 1 512 184z"></path>
            <path fill="currentColor" class="primary" d="M136 480H24a24 24 0 0 1-24-24V56a24 24 0 0 1 24-24h112a24 24 0 0 1 24 24v400a24 24 0 0 1-24 24z"></path>
          </svg>
        </a>
      </li>
      <li>
        <a class="main-navigation__link main-navigation__link--animation main-navigation__link--patrick" href="<?php echo esc_url( home_url( '/' ) ); ?>patrick" aria-label="<?php esc_html_e( 'Patrick', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Patrick', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" class="primary" d="M144 0a48 48 0 1 0 48 48 48.08 48.08 0 0 0-48-48zm357.5 66.6L321.08 1a16 16 0 0 0-20.5 9.6l-43.8 120.3a16 16 0 0 0 9.6 20.5l180.5 65.6a16 16 0 0 0 20.5-9.6L511 87.1a15.93 15.93 0 0 0-9.52-20.5z"></path>
            <path fill="currentColor" class="secondary" d="M321 212l-47.8-16-49.3-49.3a63.47 63.47 0 0 0-45.2-18.8h-62.9a63.63 63.63 0 0 0-57.2 35.4L3.38 273.7a32 32 0 1 0 57.2 28.6L80 263.6v54.8L64.08 476.8a32 32 0 0 0 28.6 35c1.1.1 2.2.2 3.2.2a32.05 32.05 0 0 0 31.8-28.8l13.2-131.2h15.3L192 423.5V480a32 32 0 0 0 64 0v-56.5a64.27 64.27 0 0 0-6.7-28.6l-41.2-82.5v-91.2l20 20a65 65 0 0 0 25 15.5l46.1 15.4-11.2 30.8a16 16 0 0 0 9.6 20.5l15 5.5a16 16 0 0 0 20.5-9.6l46.19-126.87L334 176zM429.68 6.5l-15-5.5a16 16 0 0 0-20.5 9.6l-5.49 15 45.1 16.4 5.49-15a16 16 0 0 0-9.6-20.5z"></path>
          </svg>
        </a>
      </li>
      <li>
        <a class="main-navigation__link main-navigation__link--animation main-navigation__link--patrick" href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy" aria-label="<?php esc_html_e( 'Privacy', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Privacy', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" class="secondary" d="M255.38 421.22L224 480l-31.38-58.78L208 352l-17.79-35.58a161.25 161.25 0 0 0 67.58 0L240 352zM224 288a128 128 0 0 0 128-127.21c-7.49 1.54-15.51 3-24 4.2v6.59c-.11.11-6.07 3.47-6.93 6.28-4.23 12.9-7.59 26.65-17.88 36.19-10.94 10.07-52 24.26-69.33-27.09-3-9.1-16.69-9.1-19.83 0-18.41 54.39-60.66 35.1-69.33 27.09-10.29-9.54-13.76-23.29-17.88-36.19-.86-2.7-6.82-6.17-6.82-6.28V165c-8.48-1.25-16.5-2.66-24-4.2A128 128 0 0 0 224 288z"></path>
            <path fill="currentColor" class="primary" d="M120 165v6.59c0 .11 6 3.58 6.82 6.28 4.12 12.9 7.59 26.65 17.88 36.19 8.67 8 50.92 27.3 69.33-27.09 3.14-9.1 16.79-9.1 19.83 0 17.33 51.35 58.39 37.16 69.33 27.09 10.29-9.54 13.65-23.29 17.88-36.19.86-2.81 6.82-6.17 6.93-6.28V165c52.95-7.83 88-21.47 88-37 0-13.75-27.51-26-70.6-34.09-9.35-32.11-26.69-64.08-40-80.72a32.1 32.1 0 0 0-39.5-8.8l-27.6 13.8a32 32 0 0 1-28.6 0l-27.6-13.8a32.1 32.1 0 0 0-39.5 8.8c-13.22 16.64-30.6 48.61-40 80.72C59.51 102 32 114.25 32 128c0 15.52 35.05 29.16 88 37zm263.9 143.27l23.9-62.58a16 16 0 0 0-15-21.7h-32.12L224 480 87.32 224h-31a16 16 0 0 0-14.7 22.3l25.74 60.06A133.56 133.56 0 0 0 0 422.4V464a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48v-41.6a133.5 133.5 0 0 0-64.1-114.13z"></path>
          </svg>
        </a>
      </li>
      <li>
        <button type="button" class="main-navigation__link main-navigation__link--animation" id="toggle-settings" aria-label="<?php esc_html_e( 'Settings', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Settings', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" class="secondary" d="M80 0H48a16 16 0 0 0-16 16v80h64V16A16 16 0 0 0 80 0zm112 496a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16v-48h-64zm-160 0a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V192H32zM240 0h-32a16 16 0 0 0-16 16v336h64V16a16 16 0 0 0-16-16zm112 496a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V320h-64zM400 0h-32a16 16 0 0 0-16 16v208h64V16a16 16 0 0 0-16-16z"></path>
            <path fill="currentColor" class="primary" d="M112 96H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm320 128h-96a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zM272 352h-96a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="main-navigation__link main-navigation__link--animation" id="toggle-search-collapse" aria-label="<?php esc_html_e( 'Search', 'soapatrickeight' ); ?>">
          <span><?php esc_html_e( 'Search', 'soapatrickeight' ); ?></span>
          <svg aria-hidden="true" focusable="false" class="main-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" class="primary" d="M208 80a128 128 0 1 1-90.51 37.49A127.15 127.15 0 0 1 208 80m0-80C93.12 0 0 93.12 0 208s93.12 208 208 208 208-93.12 208-208S322.88 0 208 0z"></path>
            <path fill="currentColor" class="secondary" d="M504.9 476.7L476.6 505a23.9 23.9 0 0 1-33.9 0L343 405.3a24 24 0 0 1-7-17V372l36-36h16.3a24 24 0 0 1 17 7l99.7 99.7a24.11 24.11 0 0 1-.1 34z"></path>
          </svg>
        </button>
      </li>
    </ul>
  </nav>
</div>
