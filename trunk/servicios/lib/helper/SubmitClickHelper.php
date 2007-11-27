<?php

  function submit_tag_click($value,$option)
  {

    $code = '<input type="button" name="'.$option['name'].'" value="'.$value.'" class="'.$option['class'].'" onclick="salvar();">';


    $code = $code.'<script type="text/javascript">
          function salvar()
          {
            f=document.'.$option['form'].';
            f.action=location.pathname;
            f.submit();
          }

          </script>';

    return $code;
  }

  function submit_tag_click_confirm($value,$option)
  {
  $confirm = $option['confirm'];

    $code = '<input type="button" name="'.$option['name'].'" value="'.$value.'" class="'.$option['class'].'" onclick="salvar();">';

    $code = $code.'<script type="text/javascript">
          function salvar()
          {
            if(confirm("'.$confirm.'")){
                           f=document.'.$option['form'].';
              f.action=location.pathname;
              f.submit();
            }
          }

          </script>';

    return $code;
  }

  function button_tag_click($value,$enlace,$option)
  {

    if(array_key_exists('html',$option)) $html = $option['html'];
    else $html = '';

    $code = '<input type="button" name="'.$option['name'].'" value="'.$value.'" onclick="'.$enlace.';" '.$html.'>';

    return $code;
  }

?>