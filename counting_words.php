<?php

  function countWords($str) {
    return str_word_count($str);
  }

echo countWords('The cat In The haT aTe The haT.');
