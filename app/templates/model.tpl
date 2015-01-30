<!-- 5月飞粉日半价疯抢<%= cnName %>分会场 -->
<div class="activity-area <%= activityName %>-area">
  <div class="activity-header"></div>

  <!-- 活动顶部广告图 -->
  <{include file="../inc/fansday-banners-521.tpl"}>
  <!-- end 活动顶部广告图 -->

  <div class="activity-content">   

  <{foreach $floors as $index=>$floor}>
  <div id="<{$floor.id}>" class="floor">
    <{if $floor.hasBanner}>
      <div class="header" style="background-image:url('<{$floor.banner}>');">
        <div class="product-recommand">
          <div class="sub">
            <a href="<{$floor.moreUrl}>" class="bannerlink" title="<{$floor.title}>" target="_blank">
            </a>
          </div>  
        </div>
      </div>
    <{/if}>
      <div class="main">
        <div class="triangle"></div>
        <ul class="products-list clearfix">
          <{if $floor.hasBanner}>
            <li class="product-show-2 floorban">
              <img src="<{$static_url}>/images/global/blank.gif" data-url="<{$floor.brand}>" title="" alt="" style="left:0">
            </li>
          <{/if}>
          <{foreach $floor.items as $index=>$item}>
          <li class="product-show-2 <{if $index%4 eq 2}>last<{/if}><{if $item.quantity eq 0}> no-quantity<{/if}>">
            <div class="product-img">
              <a href="<{$item_url}>/<{$item.sku}>.html" target="_blank" title="<{$item.name}>">
                <img src="<{$static_url}>/images/global/blank.gif" data-url="<{image_cache_url p=$item.image w=220 h=220 q=70}>">
              </a>
            </div>
            <div class="product-desc">
              <div class="product-name" title="<{$item.name}>">
                <a href="<{$item_url}>/<{$item.sku}>.html" target="_blank"><{$item.name}></a>
              </div>
              <div class="product-subtitle" title="<{$item.subtitle}>">
                <{$item.subtitle}>
              </div>
            </div>
            <div class="stock">
              库存：<span  class="<{if $item.quantity > 55}>L<{elseif $item.quantity <= 55 and $item.quantity > 5}>M<{elseif $item.quantity <= 5 and $item.quantity > 0}>S<{/if}>"><em style="<{if $item.quantity ge 100}> width:100% <{else}> width:<{$item.quantity}>%<{/if}>"></em></span><{if $item.quantity > 1000}>充足<{else}>剩<{$item.quantity}>件<{/if}>
            </div> 
            <div class="product-price">
              <div>
                
                <span class="market-price">
                  <{if $item.mdprice}> 
                    <{$item.mdname}>:<span class="mp">￥<{$item.mdprice}></span>
                  <{else}>
                    市场价:<span class="mp">￥<{$item.market_price}></span>
                  <{/if}>
                </span>
                <br />
                <span class="feifei-price"><span class="txt">飞飞价:</span><span class="p">￥<{$item.price}></span></span>
                
              </div>
            </div>
            <div class="product-buy" qty="<{$item.quantity }>">
               <{if $item.quantity eq 0}>
                  <a href="javascript:void(0)" title="已抢完了" class="nobuy"></a>
                <{else}>
                  <a href="<{$item_url}>/<{$item.sku}>.html" target="_blank" title=""></a>
                <{/if}>
            </div>
            
            
           
            <img class="label png-fixed" src="//static.feifei.com/images/activity/activity-global/five-discount.png">
          </li>
          <{/foreach}>
        </ul>
      </div>
    </div>
    <{/foreach}>
  </div>
  <div class="activity-footer"></div>
</div>


<!-- 活动左右快捷导航 -->
<{include file="../inc/fansday-sidenav-521.tpl"}>
<!-- end 活动左右快捷导航 -->

<!-- 市场活动广告 -->
<{include file="../inc/activity_banners.tpl"}>
<!-- end 市场活动广告 -->
