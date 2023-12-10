<?php 
$skw=$cfg->Keywords;
$sdesc=$cfg->Description;
if($type=='category'){
  if($category->Intro) $sdesc=$category->Intro;
}elseif($type=='article'){
  $skw=$article->TagsName;
  $sdesc=SubstrUTF8(TransferHTML(trim($article->Intro),'[nohtml][noenter]'),180);
}elseif($type=='author'){
  if($author->Intro) $sdesc=$author->Intro;
}
 ?>
<?php if ($sdesc) { ?>
  <meta name="description" content="<?php  echo $sdesc;  ?>">
<?php } ?>
<?php if ($skw) { ?>
  <meta name="keywords" content="<?php  echo $skw;  ?>">
<?php } ?>