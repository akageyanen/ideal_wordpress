<?php get_header(); ?>
<div class="container">
    <div class="row">
    <div class="col-lg-9">
    <div class="breadcrumbs">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="id-content">
            <p class="id-content__meta">
                <span class="id-content__meta --isDate"><?php the_time('Y年m月j日') ?></span>
                <span class="id-content__meta --isCat"><?php the_category(', ') ?></span>
            </p>
            <h1 class="id-content__headline"><?php the_title(); ?></h1>
        </div>

        <div class="id-content">
            <!--SNSボタン設置 start-->
            <?php $url_encode=urlencode(get_permalink()); $title_encode=urlencode(get_the_title()); ?>
            
            <div class="sns_frame_top">
            
            <div class="sns_area">
            
            <ul class="clearfix">
            <!--Twitter-->
            
            <li class="twitter-o"><a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode;?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" rel="nofollow"><span class="icon-twitter" style="font-size: 145%;"></span>
            
            Tweet
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a></span></li>
            
            
            <!--Facebook-->
            
            <li class="facebook-o"><a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" rel="nofollow"><span class="icon-facebook" style="font-size: 135%;"></span>
            
            Share
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></a></span></li>
            
            
            <!--はてブ-->
            
            <li class="hatena-o"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=530');return false;" target="_blank" rel="nofollow"><span class="icon-hatena" style="font-size: 145%;"></span>
            
            Hatena
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a></span></li>
            
            
            <!--Pocket-->
            
            <li class="pocket-o"><a href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" rel="nofollow"><span class="icon-pocket" style="font-size: 145%;"></span>
            
            Pocket
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':scc_get_share_pocket(); ?></a></span></li>
            
            
            </ul>
            
            </div>
            
            </div>
            
            <!--SNSボタン設置 end-->
            <?php the_content(); ?>
                    <!--SNSボタン設置 start-->
            <?php $url_encode=urlencode(get_permalink()); $title_encode=urlencode(get_the_title()); ?>
            
            <div class="sns_frame_top">
            
            <div class="sns_area">
            
            <ul class="clearfix">
            <!--Twitter-->
            
            <li class="twitter-o"><a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode;?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" rel="nofollow"><span class="icon-twitter" style="font-size: 145%;"></span>
            
            Tweet
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a></span></li>
            
            
            <!--Facebook-->
            
            <li class="facebook-o"><a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" rel="nofollow"><span class="icon-facebook" style="font-size: 135%;"></span>
            
            Share
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></a></span></li>
            
            
            <!--はてブ-->
            
            <li class="hatena-o"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=530');return false;" target="_blank" rel="nofollow"><span class="icon-hatena" style="font-size: 145%;"></span>
            
            Hatena
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a></span></li>
            
            
            <!--Pocket-->
            
            <li class="pocket-o"><a href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" rel="nofollow"><span class="icon-pocket" style="font-size: 145%;"></span>
            
            Pocket
            
            <span class="sns_count"><?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':scc_get_share_pocket(); ?></a></span></li>
            
            
            </ul>
            
            </div>
            
            </div>
            
            <!--SNSボタン設置 end-->
        </div>

    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>