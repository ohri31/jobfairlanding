<div id="nov-ost" ng-controller="ucitajNovost">
	<div class="novost">
		<div class = "header">
			{{ novost.naslov }}
		</div>
        
        <div id="ikonice">

            <a href=""><img id="google" alt="+google" src="img/social-media/google.png"></a>
            <a href=""><img id="linkedin" alt="linked" src="img/social-media/linkedin.png"></a>
            <a href=""><img id="twitter" alt="tviter" src="img/social-media/twitter.png"></a>
            <a href=""><img id="facebook" alt="fejs" src="img/social-media/facebook.png"></a>
            <br>
        </div>

        <div align = "">
<!--            Samo mijenjamo broj galerije kao parametar f-je-->
            <div class="gallery-news" style="position:relative;">
                <div class="otvori-galeriju" ng-show='novost.galerija_items.length > 0'>
					<img class="icon icons8-Stack-of-Photos" src="data:image/png;base64,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" width="200" height="200">
                    <br />
                    Otvori galeriju
                </div>
            		<div class="news-img-top">
                    <div class="slika-news-gallery" style= "background: url('{{ novost.velika_slika }}') no-repeat center bottom; background-size:cover;" > </div>
                    
                        <a class="grouped-elements" rel="gal2" ng-repeat="link in novost.galerija_items" style="position:absolute;top:0;left:0;right:0;bottom:0;" href="{{ link }}"></a>
                    
                </div>
            </div>
            <br><br>
            <div id ="text">
								<b>{{ novost.opis }}</b>

                <br><br>

                {{ novost.sadrzaj }}
								<br /><br />
								{{ novost.vrijeme }} godine
            </div>
<!--
            <br><br>
            <div class = "slike">
                <li><img src = "img/galerija/2.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/1.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/2.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/1.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/1.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/2.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/1.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/2.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/2.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/1.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/2.JPG" alt="" height = "100px" width = "200px"/></li>
                <li><img src = "img/galerija/1.JPG" alt="" height = "100px" width = "200px"/></li>
            </div>
-->
        </div>
    </div>
</div>
