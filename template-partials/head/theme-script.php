<?php
/**
 * Head part for loading theme script
 *
 * @package soapatrickeight
 */

?>

<script>const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;const currentColor = localStorage.getItem('color') ? localStorage.getItem('color') : null;const currentNav = localStorage.getItem('nav') ? localStorage.getItem('nav') : null;if(currentTheme){document.documentElement.setAttribute('data-theme', currentTheme);}if(currentColor){document.documentElement.setAttribute('data-color', currentColor);}if(currentNav){document.documentElement.setAttribute('data-nav', currentNav);}</script>
