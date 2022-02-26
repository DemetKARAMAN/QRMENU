<?php
$id=0;
 $id = $_GET["id"];
  
    try
    {
        $db = new PDO("sqlsrv:Server=78.187.50.217,1433;Database=ERP12PALANDOKEN", "sa", "emex");
    }
    catch (Exception $exception)
    {
        echo $exception->getMessage();
    }
   echo $_POST['btnClickedValue'];
   
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR MENU</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <script src="https://unpkg.com/scrollreveal@4.0.0-beta.6"></script>
   
	<link rel="stylesheet" href="css1/animate.css">
	<!-- Icomoon Icon Fonts-->

	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css1/simple-line-icons.css">
	


	<link rel="stylesheet" href="css1/style.css">
    
  
</head>

<body>
<input type="hidden" id="btnClickedValue" name="btnClickedValue" value="" />
    <section id="main-menu" class="menu-cart scroll-reveal">
        <div class="container">
            <h1 class="header-txt">
				<?php 
				$data = $db -> query("select * from FIRMA_SABITERI")->fetchAll();
     			foreach ($data as $item)
	 			echo $item["AD"];
			?></h1>
            <div class="divider">
                <?xml version="1.0" encoding="utf-8"?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                    <style type="text/css">
                         .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                    </style>
                    <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                         717,171.5 "/>
                    <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                        1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                    <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                    <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                    <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                </svg>
            </div>
            <!--.divider-->
            <?php  $data2 = $db -> query("SELECT AD,ID FROM STOK_GRUP WHERE ID!= 75983 AND ID!=437865 ")->fetchAll();
            $dataPoints2 = array();
             for ($i = 0; $i < count($data2); ++$i) {

             array_push($dataPoints2,array("ID"=>$data2[$i]["ID"] , "AD"=> $data2[$i]["AD"]));} ?>
				<ul class="menu-navigation" data-tabs data-match-height="true" id="example-tabs">
				    
     		<?php for ($i = 0; $i < count($data2); ++$i) { ?>
	 				 
                <li class="tabs-title"><a class="m-anim" onclick="getThis(this)" href="#<?php echo $dataPoints2[$i]['ID'];?>" id="<?php echo $dataPoints2[$i]['ID'];?>"  aria-selected="true" data-text="<?php echo $dataPoints2[$i]['AD'];?>"> <?php echo $dataPoints2[$i]['AD']; ?></a></li>
               <?php } ?> 
            </ul>
			
            
            <div class="tabs-content" data-tabs-content="example-tabs">
            <?php  $data3 = $db -> query("SELECT SG.AD AS GRUPAD, K.SAD, K.FIYAT,SG.ID  FROM STOK_GRUP AS SG  INNER JOIN  (SELECT S.AD AS SAD,T.FIYAT,S.STOK_GRUP FROM STOK AS S
                                        INNER JOIN (SELECT SSB.STOK,SSBF.FIYAT FROM STOK_STOK_BIRIM AS SSB INNER JOIN STOK_STOK_BIRIM_FIYAT AS SSBF ON SSB.ID=SSBF.STOK_STOK_BIRIM) T ON T.STOK=S.ID) K ON K.STOK_GRUP=SG.ID
                                        WHERE SG.ID!= 75983 AND SG.ID!=437865")->fetchAll();
            $dataPoints3 = array();
             for ($i = 0; $i < count($data3); ++$i) {

             array_push($dataPoints3,array("GRUPAD"=>$data3[$i]["GRUPAD"] , "SAD"=> $data3[$i]["SAD"],"ID"=> $data3[$i]["ID"], "FIYAT"=> $data3[$i]["FIYAT"]));} ?>
             </div>
            
                <div id="fh5co-menus" data-section="menu">
			
				<div class="row row-padded">
			
					<div class="col-md-6">
			
						<div class="fh5co-food-menu to-animate-2">
						<h1 class="header-txt">
			                     <?php for ($j = 0; $j < count($data2); ++$j) {
                                 if($dataPoints2[$j]["ID"]==$id) { 
                                 echo $dataPoints2[$j]["AD"]; break;}}?></h1>
            <div class="divider">
                <?xml version="1.0" encoding="utf-8"?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                    <style type="text/css">
                         .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                    </style>
                    <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                         717,171.5 "/>
                    <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                        1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                    <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                    <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                    <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                </svg>
            </div>
							
							<ul>
							    <?php for ($j = 0; $j < count($data3); ++$j) {
                                 if($dataPoints3[$j]["ID"]==$id) { ?>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="image.jpg" class="img-responsive" alt="BERK">
										</figure>
										<div>
											<h3><?php echo $dataPoints3[$j]["SAD"]; ?></h3>
											<p>Far far away, behind the word mountains.</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										<?php echo number_format($dataPoints3[$j]["FIYAT"], 2, '.', ','); ?>₺
									</div>
								</li>
								<?php }} ?> 
							</ul>
						</div>
					</div>
					
			
			
			</div>
		</div> 
        </div>
        <!--.container-->
    </section>
    <!--.menu-cart-->


    <a href="#0" class="cd-top">Top</a>

    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.0.2/what-input.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script type="text/javascript">
        $('.slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3500,
            arrows: false,
            fade: true,
            cssEase: 'linear'
        });

    </script>

    <script>
        $(window).on('load', function() {
            $("#preloader").fadeOut();
        });
 
    </script>
    
    <script>

        function getThis(element){
   
    let Etiket = document.getElementsByClassName("tabs-panel");
    var id = element.id;  //tıkladığımız stok grubunun idsini getirir.
    window.location.href = "index.php?id="+id; //sayfa içinde post yapıyor. Idyi php kullanmak için

    console.log(Etiket);
}
    </script>
    
   


</body>

</html>
