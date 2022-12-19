<?php
/* Custom search form */
?>






<form 
  role="search" 
  method="get" 
  action="<?php echo esc_url( home_url( '/' ) ); ?>" 
  class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"
>
<label for="wp-block-search__input-1" class="wp-block-search__label"></label><div class="wp-block-search__inside-wrapper "><input type="search" id="wp-block-search__input-1" class="wp-block-search__input wp-block-search__input" name="s" value="" placeholder="" required="" spellcheck="false" data-ms-editor="true"><button type="submit" class="wp-block-search__button wp-element-button">Search</button></div></form>