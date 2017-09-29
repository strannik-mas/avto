<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 5,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Вторая категория',
    'longtitle' => '',
    'description' => '',
    'alias' => 'vtoraya-kategoriya',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 3,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1480376297,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1480376297,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'katalog/vtoraya-kategoriya/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'migxdb' => 
    array (
      0 => 'migxdb',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'migxdb',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MODX Revolution - Вторая категория</title>
<meta name="description" content=""/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!-- Bootstrap -->
<link href="/assets/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/assets/templates/bootstrap/css/style.css" rel="stylesheet" media="screen">
<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>
<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="/assets/components/bootstrap/vendor/js/jquery.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="/assets/components/bootstrap/vendor/js/html5shiv.js"></script>
<script src="/assets/components/bootstrap/vendor/js/respond.min.js"></script>
<![endif]-->
<base href="[[!++site_url]]" />

	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="http://avto/">MODX Revolution</a>
	</div>
	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li data-shopcart="1">
    <a href="">
        <i class="glyphicon glyphicon-shopping-cart"></i>
        Корзина
    </a>
</li>

            </ul>
            <ul class="nav navbar-nav">
	<li  class="first">
	<a href="http://avto/" >Главная</a>
	
</li>

<li class="active dropdown">
	<a href="katalog/" title="Каталог" class="dropdown-toggle disabled" data-toggle="dropdown" >
		Каталог 
		<b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
	<li  class="first">
	<a href="katalog/pervaya-kategoriya/" >Первая категория</a>
	
</li>

<li  class="last active">
	<a href="katalog/vtoraya-kategoriya/" >Вторая категория</a>
	
</li>


</ul>

</li>

<li  class="last">
	<a href="informacziya.html" >Информация</a>
	
</li>


</ul>

	</div><!--/.nav-collapse -->
  </div>
</div>

		<div class="container">
		[[!If?
			&subject=`1`
			&operator=`!empty`
			&then=`<ol class="breadcrumb">
	<li><a href="/">Главная</a></li><li><a href="/katalog/">Каталог</a></li><li>Вторая категория</li>
</ol>

`
		]]
		
		[[!If?
			&subject=`0`
			&operator=`!empty`
			&then=`<div class="row">
				<div class="col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
					<div class="well sidebar-nav">
	  
</div><!--/.well -->

				</div>
				<div class="col-md-10">
					
				</div>
			</div>`
			&else=``
		]]
                
                
                
                    <div class="row">
                        
			[[!getPage@print_catalog]]
			<br clear="all" />
			<ul class="pagination">
				[[!+page.nav]]
			</ul>
                    </div>
		</div>
		<div id="footer">
	<div class="container">
		<p class="text-muted">&copy; MODX Revolution 2017
			<a href="http://modx.com/extras/package/bootstrap" target="_blank" class="pull-right"><small>Bootstrap 1.0.28-pl</small></a>
		</p>
	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/components/bootstrap/dist/js/bootstrap.min.js"></script>

	</body>
</html>
',
    '_isForward' => false,
    '_sjscripts' => 
    array (
      0 => '<link rel="stylesheet" href="/assets/components/shopkeeper3/web/css/default/style.css" type="text/css" />',
    ),
    '_jscripts' => 
    array (
      0 => '<script type="text/javascript" src="/assets/components/shopkeeper3/web/js/lang/ru.js?v=3.2.4"></script>',
      1 => '<script type="text/javascript" src="/assets/components/shopkeeper3/web/js/shopkeeper.js?v=3.2.4"></script>',
      2 => '	<script type="text/javascript">
        SHK.data = {"price_total":"0.00","items_total":0,"items_unique_total":0,"delivery_price":0,"delivery_name":"","ids":[]};
        jQuery(document).bind( \'ready\', function(){
            SHK.init( {"prodCont":"div.shk-item","site_base_url":"\\/","counterField":false,"counterFieldCart":true,"changePrice":"1","flyToCart":"helper","noLoader":false,"allowFloatCount":false,"animCart":true,"goToOrderFormPage":false,"orderFormPageUrl":"\\/","debug":false} );
        });
	</script>
',
    ),
    '_loadedjscripts' => 
    array (
      '/assets/components/shopkeeper3/web/css/default/style.css' => true,
      '/assets/components/shopkeeper3/web/js/lang/ru.js?v=3.2.4' => true,
      '/assets/components/shopkeeper3/web/js/shopkeeper.js?v=3.2.4' => true,
      '	<script type="text/javascript">
        SHK.data = {"price_total":"0.00","items_total":0,"items_unique_total":0,"delivery_price":0,"delivery_name":"","ids":[]};
        jQuery(document).bind( \'ready\', function(){
            SHK.init( {"prodCont":"div.shk-item","site_base_url":"\\/","counterField":false,"counterFieldCart":true,"changePrice":"1","flyToCart":"helper","noLoader":false,"allowFloatCount":false,"animCart":true,"goToOrderFormPage":false,"orderFormPageUrl":"\\/","debug":false} );
        });
	</script>
' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Вторая категория',
    '[[*description]]' => '',
    '[[If? 
    &subject=`1`
	&operand=`1`
	&then=`<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>`]]' => '<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>',
    '[[$Head]]' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MODX Revolution - Вторая категория</title>
<meta name="description" content=""/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!-- Bootstrap -->
<link href="/assets/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/assets/templates/bootstrap/css/style.css" rel="stylesheet" media="screen">
<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>
<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="/assets/components/bootstrap/vendor/js/jquery.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="/assets/components/bootstrap/vendor/js/html5shiv.js"></script>
<script src="/assets/components/bootstrap/vendor/js/respond.min.js"></script>
<![endif]-->
<base href="[[!++site_url]]" />
',
    '[[Shopkeeper3@cart_catalog]]' => '<li data-shopcart="1">
    <a href="">
        <i class="glyphicon glyphicon-shopping-cart"></i>
        Корзина
    </a>
</li>
',
    '[[If? &subject=`1` &operand=`1` &then=`katalog/` &else=`#`]]' => 'katalog/',
    '[[If? &subject=`1` &operand=`1` &then=`disabled`]]' => 'disabled',
    '[[Wayfinder?
                &startId=`0`
                &level=`2`
                &outerTpl=`Wayfinder.outerTpl`
                &innerTpl=`Wayfinder.innerTpl`
                &parentRowTpl=`Wayfinder.parentRowTpl`
                &innerRowTpl=`Wayfinder.innerRowTpl`
                &rowTpl=`Wayfinder.rowTpl`                    
            ]]' => '<ul class="nav navbar-nav">
	<li  class="first">
	<a href="http://avto/" >Главная</a>
	
</li>

<li class="active dropdown">
	<a href="katalog/" title="Каталог" class="dropdown-toggle disabled" data-toggle="dropdown" >
		Каталог 
		<b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
	<li  class="first">
	<a href="katalog/pervaya-kategoriya/" >Первая категория</a>
	
</li>

<li  class="last active">
	<a href="katalog/vtoraya-kategoriya/" >Вторая категория</a>
	
</li>


</ul>

</li>

<li  class="last">
	<a href="informacziya.html" >Информация</a>
	
</li>


</ul>
',
    '[[$Navbar]]' => '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="http://avto/">MODX Revolution</a>
	</div>
	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li data-shopcart="1">
    <a href="">
        <i class="glyphicon glyphicon-shopping-cart"></i>
        Корзина
    </a>
</li>

            </ul>
            <ul class="nav navbar-nav">
	<li  class="first">
	<a href="http://avto/" >Главная</a>
	
</li>

<li class="active dropdown">
	<a href="katalog/" title="Каталог" class="dropdown-toggle disabled" data-toggle="dropdown" >
		Каталог 
		<b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
	<li  class="first">
	<a href="katalog/pervaya-kategoriya/" >Первая категория</a>
	
</li>

<li  class="last active">
	<a href="katalog/vtoraya-kategoriya/" >Вторая категория</a>
	
</li>


</ul>

</li>

<li  class="last">
	<a href="informacziya.html" >Информация</a>
	
</li>


</ul>

	</div><!--/.nav-collapse -->
  </div>
</div>
',
    '[[RenderBreadcrumbs]]' => 1,
    '[[BreadCrumb?
	&containerTpl=`Breadcrumb.containerTpl`
]]' => '<ol class="breadcrumb">
	<li><a href="/">Главная</a></li><li><a href="/katalog/">Каталог</a></li><li>Вторая категория</li>
</ol>
',
    '[[$Breadcrumb]]' => '<ol class="breadcrumb">
	<li><a href="/">Главная</a></li><li><a href="/katalog/">Каталог</a></li><li>Вторая категория</li>
</ol>

',
    '[[*longtitle]]' => '',
    '[[If?
			&subject=``
			&operator=`!empty`
			&then=`<div class="page-header">
				<h1></h1>
			</div>`
		]]' => '',
    '[[RenderSidebar]]' => 0,
    '[[*id]]' => 5,
    '[[Wayfinder?
		&startId=`5`
		&level=`2`
		&outerTpl=`Wayfinder.Sidebar.outerTpl`
		&innerTpl=`Wayfinder.Sidebar.innerTpl`
		&innerRowTpl=`Wayfinder.Sidebar.innerRowTpl`
	  ]]' => '',
    '[[$Sidebar]]' => '<div class="well sidebar-nav">
	  
</div><!--/.well -->
',
    '[[Years]]' => '2017',
    '[[$Footer]]' => '<div id="footer">
	<div class="container">
		<p class="text-muted">&copy; MODX Revolution 2017
			<a href="http://modx.com/extras/package/bootstrap" target="_blank" class="pull-right"><small>Bootstrap 1.0.28-pl</small></a>
		</p>
	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
',
    '[[~4?&scheme=`abs`]]' => '/katalog/pervaya-kategoriya/',
    '[[phpthumbon?input=`assets/images/catalog/upl.jpg`&options=`w=200&h=150&bg=ffffff&far=1`]]' => '/assets/cache_image/catalog/upl_200x150_c4c.jpg',
    '[[~4]]' => '/katalog/pervaya-kategoriya/',
    '[[phpthumbon?input=`assets/images/catalog/nami_logo.jpg`&options=`w=200&h=150&bg=ffffff&far=1`]]' => '/assets/cache_image/catalog/nami_logo_200x150_c4c.jpg',
    '[[$?namespace=``&limit=`2`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&className=`ShopContent`&element=`getProducts`&includeTVList=`image,price`&includeTVs=`1`&packageName=`shop`&parents=`4`&tpl=`product`&total=`3`&pageOneLimit=`2`&actualLimit=`2`&toPlaceholder=``&qs=`30172b5bf62d1675f4055af8f2eefe6b`&pageCount=`2`&href=`/katalog/vtoraya-kategoriya/`&pageNo=`1`]]' => '<li[[+activeClasses]]><a class="active"[[+title]] href="/katalog/vtoraya-kategoriya/">1</a></li>',
    '[[$?namespace=``&limit=`2`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&className=`ShopContent`&element=`getProducts`&includeTVList=`image,price`&includeTVs=`1`&packageName=`shop`&parents=`4`&tpl=`product`&total=`3`&pageOneLimit=`2`&actualLimit=`2`&toPlaceholder=``&qs=`9c5d0bef31b65733a57eefb0376a417d`&pageCount=`2`&href=`/katalog/vtoraya-kategoriya/?page=2`&pageNo=`2`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">2</a></li>',
    '[[$?namespace=``&limit=`2`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&className=`ShopContent`&element=`getProducts`&includeTVList=`image,price`&includeTVs=`1`&packageName=`shop`&parents=`4`&tpl=`product`&total=`3`&pageOneLimit=`2`&actualLimit=`2`&toPlaceholder=``&qs=`cce66b53e8157dc3dc48d5936a218b4f`&pageCount=`2`&href=`/katalog/vtoraya-kategoriya/?page=2`&pageNo=`2`]]' => '<li class="control"><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">&gt;&gt;</a></li>',
    '[[$?namespace=``&limit=`2`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&className=`ShopContent`&element=`getProducts`&includeTVList=`image,price`&includeTVs=`1`&packageName=`shop`&parents=`4`&tpl=`product`&total=`3`&pageOneLimit=`2`&actualLimit=`2`&toPlaceholder=``&qs=`82c9ecea6c01039e29ebd8094a21098c`&pageCount=`2`&href=`/katalog/vtoraya-kategoriya/?page=2`&pageNo=`2`]]' => '<li class="control"><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">Last</a></li>',
    '[[$?namespace=``&limit=`2`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&className=`ShopContent`&element=`getProducts`&includeTVList=`image,price`&includeTVs=`1`&packageName=`shop`&parents=`4`&tpl=`product`&total=`3`&pageOneLimit=`2`&actualLimit=`2`&toPlaceholder=``&qs=`c8d3297d17e0427713364687ae591d37`&pageCount=`2`&pages=`<li[[+activeClasses]]><a class="active"[[+title]] href="/katalog/vtoraya-kategoriya/">1</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">2</a></li>`&next=`<li class="control"><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">&gt;&gt;</a></li>`&last=`<li class="control"><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">Last</a></li>`]]' => '[[+first]][[+prev]]<li[[+activeClasses]]><a class="active"[[+title]] href="/katalog/vtoraya-kategoriya/">1</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">2</a></li><li class="control"><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">&gt;&gt;</a></li><li class="control"><a[[+classes]][[+title]] href="/katalog/vtoraya-kategoriya/?page=2">Last</a></li>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'Head' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Head',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>[[++site_name]] - [[*pagetitle]]</title>
<meta name="description" content="[[*description]]"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!-- Bootstrap -->
<link href="[[++assets_url]]components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="[[++assets_url]]templates/bootstrap/css/style.css" rel="stylesheet" media="screen">
[[If? 
    &subject=`[[++bootstrap.dropdown_disabled]]`
	&operand=`1`
	&then=`<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>`]]
<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="[[++assets_url]]components/bootstrap/vendor/js/jquery.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="[[++assets_url]]components/bootstrap/vendor/js/html5shiv.js"></script>
<script src="[[++assets_url]]components/bootstrap/vendor/js/respond.min.js"></script>
<![endif]-->
<base href="[[!++site_url]]" />
',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>[[++site_name]] - [[*pagetitle]]</title>
<meta name="description" content="[[*description]]"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!-- Bootstrap -->
<link href="[[++assets_url]]components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="[[++assets_url]]templates/bootstrap/css/style.css" rel="stylesheet" media="screen">
[[If? 
    &subject=`[[++bootstrap.dropdown_disabled]]`
	&operand=`1`
	&then=`<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>`]]
<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="[[++assets_url]]components/bootstrap/vendor/js/jquery.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="[[++assets_url]]components/bootstrap/vendor/js/html5shiv.js"></script>
<script src="[[++assets_url]]components/bootstrap/vendor/js/respond.min.js"></script>
<![endif]-->
<base href="[[!++site_url]]" />
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Navbar' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Navbar',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="[[++site_url]]">[[++site_name]]</a>
	</div>
	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                [[Shopkeeper3@cart_catalog]]
            </ul>
            [[Wayfinder?
                &startId=`0`
                &level=`2`
                &outerTpl=`Wayfinder.outerTpl`
                &innerTpl=`Wayfinder.innerTpl`
                &parentRowTpl=`Wayfinder.parentRowTpl`
                &innerRowTpl=`Wayfinder.innerRowTpl`
                &rowTpl=`Wayfinder.rowTpl`                    
            ]]
	</div><!--/.nav-collapse -->
  </div>
</div>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="[[++site_url]]">[[++site_name]]</a>
	</div>
	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                [[Shopkeeper3@cart_catalog]]
            </ul>
            [[Wayfinder?
                &startId=`0`
                &level=`2`
                &outerTpl=`Wayfinder.outerTpl`
                &innerTpl=`Wayfinder.innerTpl`
                &parentRowTpl=`Wayfinder.parentRowTpl`
                &innerRowTpl=`Wayfinder.innerRowTpl`
                &rowTpl=`Wayfinder.rowTpl`                    
            ]]
	</div><!--/.nav-collapse -->
  </div>
</div>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Breadcrumb' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Breadcrumb',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '[[BreadCrumb?
	&containerTpl=`Breadcrumb.containerTpl`
]]
',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '[[BreadCrumb?
	&containerTpl=`Breadcrumb.containerTpl`
]]
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Sidebar' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Sidebar',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<div class="well sidebar-nav">
	  [[Wayfinder?
		&startId=`[[*id]]`
		&level=`2`
		&outerTpl=`Wayfinder.Sidebar.outerTpl`
		&innerTpl=`Wayfinder.Sidebar.innerTpl`
		&innerRowTpl=`Wayfinder.Sidebar.innerRowTpl`
	  ]]
</div><!--/.well -->
',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<div class="well sidebar-nav">
	  [[Wayfinder?
		&startId=`[[*id]]`
		&level=`2`
		&outerTpl=`Wayfinder.Sidebar.outerTpl`
		&innerTpl=`Wayfinder.Sidebar.innerTpl`
		&innerRowTpl=`Wayfinder.Sidebar.innerRowTpl`
	  ]]
</div><!--/.well -->
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<div id="footer">
	<div class="container">
		<p class="text-muted">&copy; [[++site_name]] [[Years]]
			<a href="http://modx.com/extras/package/bootstrap" target="_blank" class="pull-right"><small>Bootstrap 1.0.28-pl</small></a>
		</p>
	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="[[++assets_url]]components/bootstrap/dist/js/bootstrap.min.js"></script>
',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<div id="footer">
	<div class="container">
		<p class="text-muted">&copy; [[++site_name]] [[Years]]
			<a href="http://modx.com/extras/package/bootstrap" target="_blank" class="pull-right"><small>Bootstrap 1.0.28-pl</small></a>
		</p>
	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="[[++assets_url]]components/bootstrap/dist/js/bootstrap.min.js"></script>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'If' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'If',
          'description' => 'Simple if (conditional) snippet',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags(\'\',$subject,true,true);

$output = \'\';
$operator = !empty($operator) ? $operator : \'\';
$operand = !isset($operand) ? \'\' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case \'!=\':
            case \'neq\':
            case \'not\':
            case \'isnot\':
            case \'isnt\':
            case \'unequal\':
            case \'notequal\':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<\':
            case \'lt\':
            case \'less\':
            case \'lessthan\':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>\':
            case \'gt\':
            case \'greater\':
            case \'greaterthan\':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<=\':
            case \'lte\':
            case \'lessthanequals\':
            case \'lessthanorequalto\':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>=\':
            case \'gte\':
            case \'greaterthanequals\':
            case \'greaterthanequalto\':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'isempty\':
            case \'empty\':
                $output = empty($subject) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'!empty\':
            case \'notempty\':
            case \'isnotempty\':
                $output = !empty($subject) && $subject != \'\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'isnull\':
            case \'null\':
                $output = $subject == null || strtolower($subject) == \'null\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'inarray\':
            case \'in_array\':
            case \'ia\':
                $operand = explode(\',\',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'==\':
            case \'=\':
            case \'eq\':
            case \'is\':
            case \'equal\':
            case \'equals\':
            case \'equalto\':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'subject' => 
            array (
              'name' => 'subject',
              'desc' => 'The data being affected.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The data being affected.',
              'area_trans' => '',
            ),
            'operator' => 
            array (
              'name' => 'operator',
              'desc' => 'The type of conditional.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'EQ',
                  'text' => 'EQ',
                  'name' => 'EQ',
                ),
                1 => 
                array (
                  'value' => 'NEQ',
                  'text' => 'NEQ',
                  'name' => 'NEQ',
                ),
                2 => 
                array (
                  'value' => 'LT',
                  'text' => 'LT',
                  'name' => 'LT',
                ),
                3 => 
                array (
                  'value' => 'GT',
                  'text' => 'GT',
                  'name' => 'GT',
                ),
                4 => 
                array (
                  'value' => 'LTE',
                  'text' => 'LTE',
                  'name' => 'LTE',
                ),
                5 => 
                array (
                  'value' => 'GT',
                  'text' => 'GTE',
                  'name' => 'GTE',
                ),
                6 => 
                array (
                  'value' => 'EMPTY',
                  'text' => 'EMPTY',
                  'name' => 'EMPTY',
                ),
                7 => 
                array (
                  'value' => 'NOTEMPTY',
                  'text' => 'NOTEMPTY',
                  'name' => 'NOTEMPTY',
                ),
                8 => 
                array (
                  'value' => 'ISNULL',
                  'text' => 'ISNULL',
                  'name' => 'ISNULL',
                ),
                9 => 
                array (
                  'value' => 'inarray',
                  'text' => 'INARRAY',
                  'name' => 'INARRAY',
                ),
              ),
              'value' => 'EQ',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The type of conditional.',
              'area_trans' => '',
            ),
            'operand' => 
            array (
              'name' => 'operand',
              'desc' => 'When comparing to the subject, this is the data to compare to.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'When comparing to the subject, this is the data to compare to.',
              'area_trans' => '',
            ),
            'then' => 
            array (
              'name' => 'then',
              'desc' => 'If conditional was successful, output this.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If conditional was successful, output this.',
              'area_trans' => '',
            ),
            'else' => 
            array (
              'name' => 'else',
              'desc' => 'If conditional was unsuccessful, output this.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If conditional was unsuccessful, output this.',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags(\'\',$subject,true,true);

$output = \'\';
$operator = !empty($operator) ? $operator : \'\';
$operand = !isset($operand) ? \'\' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case \'!=\':
            case \'neq\':
            case \'not\':
            case \'isnot\':
            case \'isnt\':
            case \'unequal\':
            case \'notequal\':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<\':
            case \'lt\':
            case \'less\':
            case \'lessthan\':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>\':
            case \'gt\':
            case \'greater\':
            case \'greaterthan\':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<=\':
            case \'lte\':
            case \'lessthanequals\':
            case \'lessthanorequalto\':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>=\':
            case \'gte\':
            case \'greaterthanequals\':
            case \'greaterthanequalto\':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'isempty\':
            case \'empty\':
                $output = empty($subject) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'!empty\':
            case \'notempty\':
            case \'isnotempty\':
                $output = !empty($subject) && $subject != \'\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'isnull\':
            case \'null\':
                $output = $subject == null || strtolower($subject) == \'null\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'inarray\':
            case \'in_array\':
            case \'ia\':
                $operand = explode(\',\',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'==\':
            case \'=\':
            case \'eq\':
            case \'is\':
            case \'equal\':
            case \'equals\':
            case \'equalto\':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Shopkeeper3' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Shopkeeper3',
          'description' => 'Shopping cart',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-1.11.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).bind( \'ready\', function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'lang' => 
            array (
              'name' => 'lang',
              'desc' => 'prop_shk.lang',
              'type' => 'textfield',
              'options' => '',
              'value' => 'ru',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Язык',
              'area_trans' => '',
            ),
            'prodCont' => 
            array (
              'name' => 'prodCont',
              'desc' => 'prop_shk.prodcont',
              'type' => 'textfield',
              'options' => '',
              'value' => 'div.shk-item',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'CSS-селектор элемента, внутри которого находится информация о товаре',
              'area_trans' => '',
            ),
            'tplPath' => 
            array (
              'name' => 'tplPath',
              'desc' => 'prop_shk.tplpath',
              'type' => 'textfield',
              'options' => '',
              'value' => 'core/components/shopkeeper3/elements/chunks/ru/',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Путь до папки с чанками сниппета',
              'area_trans' => '',
            ),
            'cartTpl' => 
            array (
              'name' => 'cartTpl',
              'desc' => 'prop_shk.carttpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE shopCart.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон корзины',
              'area_trans' => '',
            ),
            'cartRowTpl' => 
            array (
              'name' => 'cartRowTpl',
              'desc' => 'prop_shk.cartrowtpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE shopCartRow.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон строки корзины',
              'area_trans' => '',
            ),
            'orderDataTpl' => 
            array (
              'name' => 'orderDataTpl',
              'desc' => 'prop_shk.orderdatatpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE orderData.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон для содержимого заказа',
              'area_trans' => '',
            ),
            'flyToCart' => 
            array (
              'name' => 'flyToCart',
              'desc' => 'prop_shk.flytocart',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'helper',
                  'value' => 'helper',
                  'name' => 'helper',
                ),
                1 => 
                array (
                  'text' => 'image',
                  'value' => 'image',
                  'name' => 'image',
                ),
                2 => 
                array (
                  'text' => 'scrollimage',
                  'value' => 'scrollimage',
                  'name' => 'scrollimage',
                ),
                3 => 
                array (
                  'text' => 'nofly',
                  'value' => 'nofly',
                  'name' => 'nofly',
                ),
              ),
              'value' => 'helper',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Эффект добавления товара в корзину',
              'area_trans' => '',
            ),
            'fieldPrice' => 
            array (
              'name' => 'fieldPrice',
              'desc' => 'prop_shk.pricetv',
              'type' => 'textfield',
              'options' => '',
              'value' => 'price',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя TV параметра цены',
              'area_trans' => '',
            ),
            'style' => 
            array (
              'name' => 'style',
              'desc' => 'prop_shk.style',
              'type' => 'textfield',
              'options' => '',
              'value' => 'default',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Стиль корзины',
              'area_trans' => '',
            ),
            'currency' => 
            array (
              'name' => 'currency',
              'desc' => 'prop_shk.currency',
              'type' => 'textfield',
              'options' => '',
              'value' => 'руб.',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Валюта по умолчанию',
              'area_trans' => '',
            ),
            'noCounter' => 
            array (
              'name' => 'noCounter',
              'desc' => 'prop_shk.nocounter',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать стрелки изменения кол-ва товара',
              'area_trans' => '',
            ),
            'noLoader' => 
            array (
              'name' => 'noLoader',
              'desc' => 'prop_shk.noloader',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать прелоадер',
              'area_trans' => '',
            ),
            'orderFormPageId' => 
            array (
              'name' => 'orderFormPageId',
              'desc' => 'prop_shk.orderformpage',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID страницы с формой оформления заказа',
              'area_trans' => '',
            ),
            'goToOrderFormPage' => 
            array (
              'name' => 'goToOrderFormPage',
              'desc' => 'prop_shk.gotoorderformpage',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Переходить на страницу оформления заказа сразу после добавлении товара в корзину',
              'area_trans' => '',
            ),
            'counterField' => 
            array (
              'name' => 'counterField',
              'desc' => 'prop_shk.counterfield',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара стрелки больше/меньше',
              'area_trans' => '',
            ),
            'counterFieldCart' => 
            array (
              'name' => 'counterFieldCart',
              'desc' => 'prop_shk.counterFieldCart',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара в корзине стрелки больше/меньше',
              'area_trans' => '',
            ),
            'excepDigitGroup' => 
            array (
              'name' => 'excepDigitGroup',
              'desc' => 'prop_shk.excepdigitgroup',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разделять числа цен в корзине на разряды',
              'area_trans' => '',
            ),
            'changePrice' => 
            array (
              'name' => 'changePrice',
              'desc' => 'prop_shk.changeprice',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'yes',
                  'value' => '1',
                  'name' => 'yes',
                ),
                1 => 
                array (
                  'text' => 'no',
                  'value' => '0',
                  'name' => 'no',
                ),
                2 => 
                array (
                  'text' => 'replace',
                  'value' => 'replace',
                  'name' => 'replace',
                ),
              ),
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'При изменении параметров с ценой - изменяется цена товара, а индекс с плюсом не появляется',
              'area_trans' => '',
            ),
            'animCart' => 
            array (
              'name' => 'animCart',
              'desc' => 'prop_shk.animcart',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Анимация изменения высоты корзины',
              'area_trans' => '',
            ),
            'allowFloatCount' => 
            array (
              'name' => 'allowFloatCount',
              'desc' => 'prop_shk.allowfloatcount',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разрешить покупать дробное число товара',
              'area_trans' => '',
            ),
            'jsScript' => 
            array (
              'name' => 'jsScript',
              'desc' => 'prop_shk.nojavascript',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Работать без JavaScript',
              'area_trans' => '',
            ),
            'noJQuery' => 
            array (
              'name' => 'noJQuery',
              'desc' => 'prop_shk.nojquery',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не подгружать jquery.js',
              'area_trans' => '',
            ),
            'noConflict' => 
            array (
              'name' => 'noConflict',
              'desc' => 'prop_shk.noconflict',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим noConflict для jQuery. Используется, если на сайте уже используется другая JS-библиотека (не jQuery)',
              'area_trans' => '',
            ),
            'hideOn' => 
            array (
              'name' => 'hideOn',
              'desc' => 'prop_shk.hideon',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не выводить корзину на страницах (id через запятую)',
              'area_trans' => '',
            ),
            'TVsaveList' => 
            array (
              'name' => 'TVsaveList',
              'desc' => 'prop_shk.TVsaveList',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список имён TV-параметров, которые нужно сохранить в БД при отправке заказа. Если пусто, сохраняются все TV.',
              'area_trans' => '',
            ),
            'fromParentList' => 
            array (
              'name' => 'fromParentList',
              'desc' => 'prop_shk.fromParentList',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список полей через запятую, которые нужно добавить товарам от родителей',
              'area_trans' => '',
            ),
            'fromParentHeight' => 
            array (
              'name' => 'fromParentHeight',
              'desc' => 'prop_shk.fromParentHeight',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Сколько уровней родителей учитывать при использовании параметра fromParentList',
              'area_trans' => '',
            ),
            'additParamSource' => 
            array (
              'name' => 'additParamSource',
              'desc' => 'prop_shk.additParamSource',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID источника доп.параметров (ресурс MODX)',
              'area_trans' => '',
            ),
            'className' => 
            array (
              'name' => 'className',
              'desc' => 'prop_shk.className',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modResource',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя класса (объекта) товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'packageName' => 
            array (
              'name' => 'packageName',
              'desc' => 'prop_shk.packageName',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя пакета класса товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'savePurchasesFields' => 
            array (
              'name' => 'savePurchasesFields',
              'desc' => 'prop_shk.savePurchasesFields',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список названий полей товаров, которые нужно сохранять при заказе',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_shk.debug',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим отладки',
              'area_trans' => '',
            ),
            'processParams' => 
            array (
              'name' => 'processParams',
              'desc' => 'prop_shk.processParams',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Просчитывать дополнительные параметры перед добавлением товара в корзину',
              'area_trans' => '',
            ),
            'pluralWords' => 
            array (
              'name' => 'pluralWords',
              'desc' => 'prop_shk.pluralWords',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Слова для склонения в зависимости от количества товара в корзине',
              'area_trans' => '',
            ),
            'groupBy' => 
            array (
              'name' => 'groupBy',
              'desc' => 'prop_shk.groupBy',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя поля для группировки товаров в корзине',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-1.11.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).bind( \'ready\', function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'RenderBreadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'RenderBreadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * RenderBreadcrumbs snippet
 *
 * @package Bootstrap
 */
$ids = $modx->getParentIds($modx->resource->id);
return isset($ids[0]) && $ids[0] == 0 ? 0 : 1;',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * RenderBreadcrumbs snippet
 *
 * @package Bootstrap
 */
$ids = $modx->getParentIds($modx->resource->id);
return isset($ids[0]) && $ids[0] == 0 ? 0 : 1;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'BreadCrumb' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'BreadCrumb',
          'description' => 'This snippet will create a breadcrumb navigation for the current resource or a specific resource.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.4.3 pl
 * 07/03/15
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property exclude - (string) Comma separated list of resources IDs not shown in breadcrumb. [Default value : []]
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Add the home page crumb at the start of the breadcrumb; [Default value : true].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property categoryCrumbTpl - (string) Default category crumb template for BreadCrumb; [Default value : BreadCrumbCategoryCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = !empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true);
$exclude              = !empty($exclude) ? explode(\',\', $exclude) : array();
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, true, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>\');
$homeCrumbTpl         = !empty($homeCrumbTpl) ? $homeCrumbTpl : $modx->getOption(\'homeCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@INLINE <li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'linkCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$categoryCrumbTpl     = !empty($categoryCrumbTpl) ? $categoryCrumbTpl : $modx->getOption(\'categoryCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'maxCrumbTpl\', $scriptProperties, \'@INLINE <li>...</li>\');

// include parseTpl
include_once $modx->getOption(\'breadcrumb.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumb/includes/\').\'include.parsetpl.php\';

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if (!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\')) {
    return \'\';
}

// We get all the other crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while ($resourceId != $from && $crumbsCount < $maxCrumbs)
{
    if (!$resource = $modx->getObject(\'modResource\', $resourceId)) {
        break;
    }

    // We check the conditions to show crumb
    if (
        $resourceId != $modx->getOption(\'site_start\')                                                                           // ShowHomeCrumb
        && (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))                                         // ShowHidden
        && (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))                                      // ShowContainer
        && ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\'))                                        // UnPub
        && (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)                      // ShowCurrent
        && !in_array($resourceId, $exclude)                                                                                     // Excluded resources
    ) {
        // If is LTR direction, we push resource at the beginning of the array
        if ($direction == \'ltr\') {
            array_unshift($crumbs, $resource);
        }
        // Else we push it at the end
        else {
            $crumbs[] = $resource;
        }

        $crumbsCount++;
    }
    $resourceId = $resource->get(\'parent\');
}

// Add home crumb
if ($showHomeCrumb && $resource = $modx->getObject(\'modResource\', $modx->getOption(\'site_start\'))) {
    if ($direction == \'ltr\') {
        array_unshift($crumbs, $resource);
    } else {
        $crumbs[] = $resource;
    }
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
    // Home crumb tpl ?
    if ($resource->get(\'id\') == $modx->getOption(\'site_start\'))
    {
        $tpl = $homeCrumbTpl;
    }
    // Current crumb tpl ?
    elseif ($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
    {
        $tpl = $currentCrumbTpl;
    }
    // resource is a container only, calculated in a similar manner to Wayfinder
    elseif ($resource->get(\'isfolder\')
        && ( $resource->get(\'template\') == 0
            || strpos($resource->get(\'link_attributes\'), \'rel="category"\') !== false
            )
    ) {
        $tpl = $categoryCrumbTpl;
    }
    // or default crumb tpl ?
    else {
        $tpl = $linkCrumbTpl;
    }

    // Placeholders
    $placeholders = $resource->toArray();
    if ($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl) {
        if (is_numeric($resource->get(\'content\'))) {
            $link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
        } else {
            $link = $resource->get(\'content\');
        }
    } else {
        $link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
    }
    $placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

    // Output
    $output .= parseTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if ($crumbsCount == $maxCrumbs) {
    // If is LTR direction, we push the max delimiter at the beginning of the crumbs
    if ($direction == \'ltr\') {
        $output = parseTpl($maxCrumbTpl).$output;
    }
    // Else we push it at the end
    else {
        $output .= parseTpl($maxCrumbTpl);
    }
}

// We build the breadcrumb output
$output = parseTpl($containerTpl, array(
    \'crumbs\' => $output,
));

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'breadcrumb_snippet_from_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the first crumb.',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'breadcrumb_snippet_to_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the last crumb.',
              'area_trans' => '',
            ),
            'maxCrumbs' => 
            array (
              'name' => 'maxCrumbs',
              'desc' => 'breadcrumb_snippet_maxcrumbs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max crumbs shown in breadcrumb',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'breadcrumb_snippet_showhidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show hidden resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showContainer' => 
            array (
              'name' => 'showContainer',
              'desc' => 'breadcrumb_snippet_showcontainer_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show container resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showUnPub' => 
            array (
              'name' => 'showUnPub',
              'desc' => 'breadcrumb_snippet_showunpub_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show unpublished resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showCurrentCrumb' => 
            array (
              'name' => 'showCurrentCrumb',
              'desc' => 'breadcrumb_snippet_showcurrentcrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show current resource as a crumb.',
              'area_trans' => '',
            ),
            'showBreadCrumbAtHome' => 
            array (
              'name' => 'showBreadCrumbAtHome',
              'desc' => 'breadcrumb_snippet_showbreadcrumbatHome_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show BreadCrumb on the home page.',
              'area_trans' => '',
            ),
            'showHomeCrumb' => 
            array (
              'name' => 'showHomeCrumb',
              'desc' => 'breadcrumb_snippet_showhomecrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show the home page as a crumb.',
              'area_trans' => '',
            ),
            'useWebLinkUrl' => 
            array (
              'name' => 'useWebLinkUrl',
              'desc' => 'breadcrumb_snippet_useweblinkurl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Use the weblink url instead of the url to the weblink.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'breadcrumb_snippet_direction_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => ' Right To Left (rtl)',
                  'name' => ' Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'breadcrumb_snippet_scheme_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'URL Generation Scheme.',
              'area_trans' => '',
            ),
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'breadcrumb_snippet_containertpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Container template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'homeCrumbTpl' => 
            array (
              'name' => 'homeCrumbTpl',
              'desc' => 'breadcrumb_snippet_homecrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Home crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'currentCrumbTpl' => 
            array (
              'name' => 'currentCrumbTpl',
              'desc' => 'breadcrumb_snippet_currentcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li>[[+pagetitle]]</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Current crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'linkCrumbTpl' => 
            array (
              'name' => 'linkCrumbTpl',
              'desc' => 'breadcrumb_snippet_linkcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'categoryCrumbTpl' => 
            array (
              'name' => 'categoryCrumbTpl',
              'desc' => 'breadcrumb_snippet_categorycrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default category crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'maxCrumbTpl' => 
            array (
              'name' => 'maxCrumbTpl',
              'desc' => 'breadcrumb_snippet_maxcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li>...</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max delimiter crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.4.3 pl
 * 07/03/15
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property exclude - (string) Comma separated list of resources IDs not shown in breadcrumb. [Default value : []]
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Add the home page crumb at the start of the breadcrumb; [Default value : true].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property categoryCrumbTpl - (string) Default category crumb template for BreadCrumb; [Default value : BreadCrumbCategoryCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = !empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true);
$exclude              = !empty($exclude) ? explode(\',\', $exclude) : array();
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, true, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>\');
$homeCrumbTpl         = !empty($homeCrumbTpl) ? $homeCrumbTpl : $modx->getOption(\'homeCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@INLINE <li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'linkCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$categoryCrumbTpl     = !empty($categoryCrumbTpl) ? $categoryCrumbTpl : $modx->getOption(\'categoryCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'maxCrumbTpl\', $scriptProperties, \'@INLINE <li>...</li>\');

// include parseTpl
include_once $modx->getOption(\'breadcrumb.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumb/includes/\').\'include.parsetpl.php\';

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if (!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\')) {
    return \'\';
}

// We get all the other crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while ($resourceId != $from && $crumbsCount < $maxCrumbs)
{
    if (!$resource = $modx->getObject(\'modResource\', $resourceId)) {
        break;
    }

    // We check the conditions to show crumb
    if (
        $resourceId != $modx->getOption(\'site_start\')                                                                           // ShowHomeCrumb
        && (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))                                         // ShowHidden
        && (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))                                      // ShowContainer
        && ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\'))                                        // UnPub
        && (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)                      // ShowCurrent
        && !in_array($resourceId, $exclude)                                                                                     // Excluded resources
    ) {
        // If is LTR direction, we push resource at the beginning of the array
        if ($direction == \'ltr\') {
            array_unshift($crumbs, $resource);
        }
        // Else we push it at the end
        else {
            $crumbs[] = $resource;
        }

        $crumbsCount++;
    }
    $resourceId = $resource->get(\'parent\');
}

// Add home crumb
if ($showHomeCrumb && $resource = $modx->getObject(\'modResource\', $modx->getOption(\'site_start\'))) {
    if ($direction == \'ltr\') {
        array_unshift($crumbs, $resource);
    } else {
        $crumbs[] = $resource;
    }
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
    // Home crumb tpl ?
    if ($resource->get(\'id\') == $modx->getOption(\'site_start\'))
    {
        $tpl = $homeCrumbTpl;
    }
    // Current crumb tpl ?
    elseif ($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
    {
        $tpl = $currentCrumbTpl;
    }
    // resource is a container only, calculated in a similar manner to Wayfinder
    elseif ($resource->get(\'isfolder\')
        && ( $resource->get(\'template\') == 0
            || strpos($resource->get(\'link_attributes\'), \'rel="category"\') !== false
            )
    ) {
        $tpl = $categoryCrumbTpl;
    }
    // or default crumb tpl ?
    else {
        $tpl = $linkCrumbTpl;
    }

    // Placeholders
    $placeholders = $resource->toArray();
    if ($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl) {
        if (is_numeric($resource->get(\'content\'))) {
            $link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
        } else {
            $link = $resource->get(\'content\');
        }
    } else {
        $link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
    }
    $placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

    // Output
    $output .= parseTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if ($crumbsCount == $maxCrumbs) {
    // If is LTR direction, we push the max delimiter at the beginning of the crumbs
    if ($direction == \'ltr\') {
        $output = parseTpl($maxCrumbTpl).$output;
    }
    // Else we push it at the end
    else {
        $output .= parseTpl($maxCrumbTpl);
    }
}

// We build the breadcrumb output
$output = parseTpl($containerTpl, array(
    \'crumbs\' => $output,
));

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'RenderSidebar' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'RenderSidebar',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * RenderSidebar snippet
 *
 * @package Bootstrap
 */
return $modx->getCount(\'modResource\', array(
    \'parent\' => $modx->resource->id,
    \'deleted\' => false,
    \'hidemenu\' => false,
    \'published\' => true
));',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * RenderSidebar snippet
 *
 * @package Bootstrap
 */
return $modx->getCount(\'modResource\', array(
    \'parent\' => $modx->resource->id,
    \'deleted\' => false,
    \'hidemenu\' => false,
    \'published\' => true
));',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Years' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Years',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * Years snippet
 *
 * @package Bootstrap
 */
return date(\'Y\');',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Years snippet
 *
 * @package Bootstrap
 */
return date(\'Y\');',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'getPage' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getPage',
          'description' => '<b>1.2.4-pl</b> A generic wrapper snippet for returning paged results and navigation from snippets that return limitable collections.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'namespace' => 
            array (
              'name' => 'namespace',
              'desc' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'The key of a property that indicates the current page.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a property that indicates the current page.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'The maximum number of pages to display when rendering paging controls',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The maximum number of pages to display when rendering paging controls',
              'area_trans' => '',
            ),
            'elementClass' => 
            array (
              'name' => 'elementClass',
              'desc' => 'The class of element that will be called by the getPage snippet instance.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modSnippet',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The class of element that will be called by the getPage snippet instance.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'The key of a placeholder to be set with the paging navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page.nav',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder to be set with the paging navigation controls.',
              'area_trans' => '',
            ),
            'pageNavTpl' => 
            array (
              'name' => 'pageNavTpl',
              'desc' => 'Content representing a single page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing a single page navigation control.',
              'area_trans' => '',
            ),
            'pageNavOuterTpl' => 
            array (
              'name' => 'pageNavOuterTpl',
              'desc' => 'Content representing the layout of the page navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the layout of the page navigation controls.',
              'area_trans' => '',
            ),
            'pageActiveTpl' => 
            array (
              'name' => 'pageActiveTpl',
              'desc' => 'Content representing the current page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the current page navigation control.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'Content representing the first page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the first page navigation control.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'Content representing the last page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the last page navigation control.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'Content representing the previous page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the previous page navigation control.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'Content representing the next page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the next page navigation control.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'If true, unique page requests will be cached according to addition cache properties.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, unique page requests will be cached according to addition cache properties.',
              'area_trans' => '',
            ),
            'cache_key' => 
            array (
              'name' => 'cache_key',
              'desc' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'area_trans' => '',
            ),
            'cache_handler' => 
            array (
              'name' => 'cache_handler',
              'desc' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'area_trans' => '',
            ),
            'cache_expires' => 
            array (
              'name' => 'cache_expires',
              'desc' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'area_trans' => '',
            ),
            'pageNavScheme' => 
            array (
              'name' => 'pageNavScheme',
              'desc' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'phpthumbon' => 
      array (
        'fields' => 
        array (
          'id' => 44,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'phpthumbon',
          'description' => 'Создание превьюх картинок',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * phpThumbOn
 * Создание превьюх картинок
 *
 * Copyright 2013 by Agel_Nash <Agel_Nash@xaker.ru>
 *
 * @category images
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 */

if(empty($modx) || !($modx instanceof modX)) return \'\';

$componentPath = (string)$modx->getOption(\'phpthumbon.core_path\', null, $modx->getOption(\'core_path\').\'components/phpthumbon/\');

if(!isset($modx->phpThumbOn)){
    $modx->phpThumbOn = $modx->getService("phpthumbon","phpThumbOn",$componentPath.\'model/phpthumbon/\', $scriptProperties);
}

if(!($flag = ($modx->phpThumbOn instanceof phpThumbOn))){
    $modx->phpThumbOn = null;
}
return $flag ? $modx->phpThumbOn->run($scriptProperties) : $modx->getOption(\'phpthumbon.noimage\', $scriptProperties);',
          'locked' => false,
          'properties' => 
          array (
            'input' => 
            array (
              'name' => 'input',
              'desc' => 'phpthumbon.input',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'phpthumbon:properties',
              'area' => '',
              'desc_trans' => 'Путь к картинке',
              'area_trans' => '',
            ),
            'options' => 
            array (
              'name' => 'options',
              'desc' => 'phpthumbon.folder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'phpthumbon:properties',
              'area' => '',
              'desc_trans' => 'phpthumbon.folder',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * phpThumbOn
 * Создание превьюх картинок
 *
 * Copyright 2013 by Agel_Nash <Agel_Nash@xaker.ru>
 *
 * @category images
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 */

if(empty($modx) || !($modx instanceof modX)) return \'\';

$componentPath = (string)$modx->getOption(\'phpthumbon.core_path\', null, $modx->getOption(\'core_path\').\'components/phpthumbon/\');

if(!isset($modx->phpThumbOn)){
    $modx->phpThumbOn = $modx->getService("phpthumbon","phpThumbOn",$componentPath.\'model/phpthumbon/\', $scriptProperties);
}

if(!($flag = ($modx->phpThumbOn instanceof phpThumbOn))){
    $modx->phpThumbOn = null;
}
return $flag ? $modx->phpThumbOn->run($scriptProperties) : $modx->getOption(\'phpthumbon.noimage\', $scriptProperties);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'num_format' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'num_format',
          'description' => 'Number format output filter',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/*
 * numFormat snippet
 * example: [[*price:num_format]]
 */

if(strlen($input)==0) return \'\';

$input = floatval(str_replace(array(\' \',\',\'), array(\'\',\'.\'), $input));
return number_format($input,(floor($input) == $input ? 0 : 2),\'.\',\' \');',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/*
 * numFormat snippet
 * example: [[*price:num_format]]
 */

if(strlen($input)==0) return \'\';

$input = floatval(str_replace(array(\' \',\',\'), array(\'\',\'.\'), $input));
return number_format($input,(floor($input) == $input ? 0 : 2),\'.\',\' \');',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);