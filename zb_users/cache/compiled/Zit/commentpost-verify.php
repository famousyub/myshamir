
<?php if ($option['ZC_COMMENT_VERIFY_ENABLE'] && !$zbp->CheckRights('NoValidCode')) { ?>
<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify"><?php  echo $lang['msg']['validcode'];  ?>(*)</label><img style="width:<?php  echo $option['ZC_VERIFYCODE_WIDTH'];  ?>px;height:<?php  echo $option['ZC_VERIFYCODE_HEIGHT'];  ?>px;cursor:pointer;" src="<?php  echo $article->ValidCodeUrl;  ?>" alt="" title="" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();"/></p>
<?php } ?>