<div class='row'>
    <div class="col-md-4">
        <h2>Nous contacter</h2>
        <h3>Par mail :</h3>
        <h4><a href='mailto:bureau@chorale.polytechnique.org'>bureau@chorale.polytechnique.org</a></h4>


        <h3>Sur les réseaux sociaux :</h3>
        <!--Social buttons-->
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-bg btn-yt mx-1" href="https://www.facebook.com/ensembleVocalEcolePolytechnique/">
                    <i><img src="pictures/Facebook-logo-f.png" alt="logo-facebook" height="70"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-bg btn-yt mx-1" href="https://www.youtube.com/channel/UCwWtVb5arM-E14CcHeq17yQ">
                    <i><img src="pictures/YouTube-logo.png" alt="logo-youtybe" height="50"></i>
                </a>
            </li>
        </ul>
        <!--/.Social buttons-->
    </div>
    <div class="col-md-4">
        <h2>Rester informé</h2>
        <h4>Abonnez-vous à la newsletter pour être informés des prochains concerts !</h4>
    </div>
    <div class="col-md-4">
        <h2>Liens amis</h2>
        <h4>L'<a href="http://ostinato.fr/">Orchestre Ostinato</a> qui nous accompagne pour la plupart de nos concerts avec orchestre.</h4>
        <h4>La <a href="https://www.youtube.com/channel/UCKCGXGyDXG_Cxxl2FIrVzLQ/">chaine YouTube</a> de Yun-Ho, notre pianiste de répétion.</h4>
    </div>
</div>
<div class='row'>
    <div class="col-md-1"></div>
    <div class="col-md-10 text-center">
        <br>
        <?php
        $promo = Bureau::getLastPromo($dbh);
        $src = "pictures/bureau_$promo.jpg";
        if (!file_exists($src)) {
            $src = "pictures/bureau_defaut.jpg";
        }
        
        echo "<h4>A bientôt ! <i>Le bureau $promo</i></h4>";
        echo "<img class='img-responsive' src=$src alt='Bureau $promo'>";
        ?>
    </div>
</div>