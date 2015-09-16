<div id="nov-ost" ng-controller="ucitajNovost">
	<div class="novost">
		<div class = "header">
			{{ novost.naslov }}
		</div>

        <div id="">
            <a href=""><img id="google" alt="+google" src="img/social-media/google.png"></a>
            <a href=""><img id="linkedin" alt="linked" src="img/social-media/linkedin.png"></a>
            <a href=""><img id="twitter" alt="tviter" src="img/social-media/twitter.png"></a>
            <a href=""><img id="facebook" alt="fejs" src="img/social-media/facebook.png"></a>
            <br>
        </div>

        <div align = "">
<!--            Samo mijenjamo broj galerije kao parametar f-je-->
            <div onclick="opengallery(1)" onmouseover="gallerynewshover(1)"  onmouseout="gallerynewsnohover(1)"  class="gallery-news">
                <div class="otvori-galeriju" >
									Otvori galeriju
                	<div class="otvori-galeriju-under-line" ></div>
                </div>
            		<div class="news-img-top">
                	<div class="slika-news-gallery" style= "background: url('{{ novost.velika_slika }}') no-repeat center bottom; background-size:cover;" > </div>
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
