<!DOCTYPE html>
<html><head>

<!-- start typekit fonts -->
<script src="//use.typekit.net/mfn4btr.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<!-- end typekit fonts -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"  content="initial-scale=1, width=device-width, user-scalable=false;">

<title><?php 
			if(is_front_page()){
	?>
				KBS
	<?php
			}else{
				echo wp_title(); 
			}
	?></title>

<!-- Theme stylesheet -->
<link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<!-- Font awesome -->
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet" type="text/css" />

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

<!-- AddThis -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51e5418f145ec050"></script>
<!-- AddThis -->

</head>

<body>

<!-- start #mobile menu -->
<div id="mobile-menu" class="mobile-menu hidden-desktop">  
    <nav class="mobile-menu-container" role="navigation"> 
        <!-- start .close -->
        <div class="close">
        </div>
        <!-- end .close -->
        <div class="clear"></div>
        <!-- start .search -->
        <div class="search">     
            <form role="search" action="/">                            
                <input class="field" type="text" placeholder="Search the site..." name="" /> 
                <button class="submit" type="submit"><i class="fa fa-search"></i></button>                         
            </form>  
        </div>
        <!-- end .search -->
	<?php 
		$items = wp_get_nav_menu_items( 'main' );
		$curParent = false;
		$menuHiechary;
		for($i = 0; $i < count($items); $i++){
			if($items[$i]->menu_item_parent != 0){
				$menuHiechary[$items[$i]->menu_item_parent]['child'][$items[$i]->ID] = $i;
			}else{
				$menuHiechary[$items[$i]->ID]['parent'] = $i;
			}
			if(get_the_ID() == $items[$i]->object_id){
				$curParent = $items[$i]->menu_item_parent;
			}
		}
	?> 
	<ul>    
	<?php
		foreach($menuHiechary as $key => $value){
			if($key == $curParent){
			?>
				<li class="current_page_ancestor">
			<?php
			}else{
			?>
				<li>
			<?php
			}

			if(count($value['child']) > 0){
			?>
                			<div class="parent">
                    				<div class="table">
                        				<div class="table-cell">
                       						<a href="<?php echo $items[$value['parent']]->url; ?>"><?php echo $items[$value['parent']]->title; ?></a>       
                        				</div>
                        				<div class="table-cell">
                            					<div class="show-submenu">
                                					<div class="table">
                                    						<div class="table-cell">
                                        						<div class="bars"></div>
                                    						</div>
                                					</div>
                                					<div class="active-state">
                                    						<div class="table">
                                        						<div class="table-cell">
                                            							<div class="active-bars"></div>
                                        						</div>
                                    						</div>
                                					</div>
                            					</div>
                            					<div class="clear"></div>    
                        				</div>
                    				</div>  
                			</div>
                			<div class="submenu">
                    				<ul>
				<?php
				foreach($value['child'] as $subKey => $subValue){
					if(get_the_ID() == $items[$subValue]->object_id){
				?>
                      				<li class="current_page_item">
				<?php
					}else{
				?>
                      				<li>
				<?php
					}
				?>
                               				<a href="<?php echo $items[$subValue]->url; ?>"><?php echo $items[$subValue]->title; ?></a>
                       				</li>
				<?php
				}
				?>
						</ul>
					</div>
			<?php
			}else{
			?>
                       			<a href="<?php echo $items[$value['parent']]->url; ?>"><?php echo $items[$value['parent']]->title; ?></a>
			<?php
			}
			?>
				</li>
			<?php
		}
		?>
	</ul> 
        <!-- start .top menu -->
		<?php 
			$items = wp_get_nav_menu_items( 'secondary' );
		?>
        <div class="top-menu">
            <ul>
		<?php
			for($i = 0; $i < count($items) - 1; $i++){
		?>
			<li>
				<a href="<?php echo $items[$i]->url; ?>"><?php echo $items[$i]->post_title; ?></a>
			</li>
		<?php
			}
		?>
                    <li class="last">
                        <a href="<?php echo $items[$i]->url; ?>"><?php echo $items[$i]->post_title; ?></a>
                    </li>
            </ul>
        </div>
        <!-- end .top menu -->
    </nav>
</div>
<!-- end #mobile menu -->

<!-- start div #page -->
<div id="page"> 

    <!-- start header -->
    <header class="site-header" role="banner">  

        <!-- start .search-form -->
        <div class="search-form hidden-phone hidden-tablet"> 
            <div class="container">
                <form role="search" action="/">                            
                    <input class="field" type="text" placeholder="Search the site..." name="s" />                         
                </form>
                <div class="clear"></div>    
            </div>
        </div>
        <!-- end .search-form -->

        <div class="container">  

            <!-- start .header-logo -->
            <div class="header-logo">
		<?php if ( get_theme_mod( 'test_logo' ) ) : ?>
        		<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'test_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		<?php else : ?>
        		<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        		<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
		<?php endif; ?>
            </div>
            <!-- end .header-logo -->

            <!-- start .top menu -->
		<?php 
			$items = wp_get_nav_menu_items( 'secondary' );
		?>
            <div class="top-menu visible-desktop">
                <ul>
		<?php
			for($i = 0; $i < count($items) - 1; $i++){
		?>
			<li>
				<a href="<?php echo $items[$i]->url; ?>"><?php echo $items[$i]->title; ?></a>
			</li>
		<?php
			}
		?>
                    <li class="last">
                        <a href="<?php echo $items[$i]->url; ?>"><?php echo $items[$i]->title; ?></a>
                    </li>
                </ul>
            </div>
            <!-- end .top menu -->
            
            <!-- start .show-search -->
            <div class="show-search visible-desktop">
                <div class="indicator"></div>
            </div> 
            <!-- end .show-search -->
        
            <!-- start .main-menu -->
		<?php 
			$items = wp_get_nav_menu_items( 'main' );
			$curParent = false;
			$menuHiechary;
			for($i = 0; $i < count($items); $i++){
				if($items[$i]->menu_item_parent != 0){
					$menuHiechary[$items[$i]->menu_item_parent]['child'][$items[$i]->ID] = $i;
				}else{
					$menuHiechary[$items[$i]->ID]['parent'] = $i;
				}
				if(get_the_ID() == $items[$i]->object_id){
					$curParent = $items[$i]->menu_item_parent;
				}
			}
		?>
            <div class="main-menu visible-desktop">   
                <ul>    
			<?php
			foreach($menuHiechary as $key => $value){
				if($key == $curParent){
				?>
					<li class="current_page_ancestor">
                        			<a href="<?php echo $items[$value['parent']]->url; ?>"><?php echo $items[$value['parent']]->title; ?></a>
				<?php
				}else{
				?>
					<li>
                        			<a href="<?php echo $items[$value['parent']]->url; ?>"><?php echo $items[$value['parent']]->title; ?></a>
				<?php
				}
				if(count($value['child']) > 0){
				?>
						<ul>
					<?php
					foreach($value['child'] as $subKey => $subValue){
						if(get_the_ID() == $items[$subValue]->object_id){
					?>
                            				<li class="current_page_item">
					<?php
						}else{
					?>
                            				<li>
					<?php
						}
					?>
                                				<a href="<?php echo $items[$subValue]->url; ?>"><?php echo $items[$subValue]->title; ?></a>
                            				</li>
					<?php
					}
					?>
						</ul>
				<?php
				}
				?>
					</li>
				<?php
			}
			?>                    
                </ul>
                <div class="clear"></div>
            </div>
            <!-- start .main-menu -->
            
            <!-- start .show-mobile-menu -->
            <div class="show-mobile-menu hidden-desktop">
            </div>
            <!-- end .show-mobile-menu -->

            <div class="clear"></div>
        </div> 
           
    </header>
    <!-- end header -->                                        