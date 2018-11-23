<?php
/**
<p>
Use Bootstrap css. Split in tree parts, meta, css and javascript.
</p>
 */
class PluginTwitterBootstrap335v{
  
  /**
  <p>
  Including all Bootstrap resources. This is all you need to do.
  </p>
  #code-yml#
  type: widget
  data:
    plugin: 'twitter/bootstrap335v'
    method: all
  #code#
 */  
  public static function widget_all(){
    PluginTwitterBootstrap335v::widget_meta();
    PluginTwitterBootstrap335v::widget_link();
    PluginTwitterBootstrap335v::widget_js();
  }
  
  
  
  
  /**
  <p>
  Include meta in head section.
  </p>
  #code-yml#
  type: widget
  data:
    plugin: 'twitter/bootstrap335v'
    method: meta
  #code#
  <p>
  It should output this HTML.
  </p>
  #code-html#
  &lt;meta charset="utf-8">
  &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
  &lt;meta name="viewport" content="width=device-width, initial-scale=1">  
  #code#
  */
  
  public static function widget_meta(){
    $element = wfFilesystem::loadYml(dirname(__FILE__).'/data/header_meta.yml');
    wfDocument::renderElement($element);
  }
  
  
  /**
  <p>
  Add CSS. Set data/theme to false if skip bootstrap-theme.
  </p>
  #code-yml#
  type: widget
  data:
    plugin: 'twitter/bootstrap335v'
    method: link
    theme: false #If skip default Bootstrap theme.
  #code#
  <p>
  It should output this HTML.
  </p>
  #code-html#
  &lt;link href="/plugin/twitter/bootstrap335v/css/bootstrap.css" rel="stylesheet">
  &lt;link href="/plugin/twitter/bootstrap335v/css/bootstrap-theme.css" rel="stylesheet">   
  #code#
  */
  public static function widget_link($data = array()){
    $element = wfFilesystem::loadYml(dirname(__FILE__).'/data/header_link.yml');
    $theme = wfArray::get($data, 'data/theme');
    if($theme===false){
      unset($element['twitter_bootstrap_theme']);
    }
    wfDocument::renderElement($element);
  }
  
  /**
  <p>
  Add Bootstrap Javascript (including jQuery).
  </p>
  #code-yml#
  type: widget
  data:
    plugin: 'twitter/bootstrap335v'
    method: js
  #code#
  <p>
  It should output this HTML.
  </p>
  #code-html#
  &lt;script src="/plugin/twitter/bootstrap335v/jquery/1.11.3/jquery.min.js">&lt;/script>
  &lt;script src="/plugin/twitter/bootstrap335v/js/bootstrap.min.js">&lt;/script>
  #code#
  */
  public static function widget_js(){
    $element = wfFilesystem::loadYml(dirname(__FILE__).'/data/header_js.yml');
    wfDocument::renderElement($element);
  }
  
  
  
}













