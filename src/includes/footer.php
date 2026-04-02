

</div>
<!-- </main> -->
<?php
$footer_hours = get_opening_hours($pdo);
?>
<footer class="bg-dark text-light py-5 mt-5" style="background-color:#f3f3f3 !important">
    <div class="container">

 <div class="container">
     <div class="row">
         <div class="col-12 col-lg-4">
             <img onclick="window.open('/');" 
             style="max-width: 161px;cursor:pointer; margin-bottom:25px" src="/assets/img/logo-v5.png" alt="">

        
                <table class="table table-sm mb-5">
                    <tbody>
                    <?php foreach ($footer_hours as $fh): ?>
                        <tr>
                            <td style="background-color:#f3f3f3;padding-top: 10px; padding-bottom: 0px;width:90px;">
                                <p class="fs-5" style="font-weight: 600;font-size:14px !important;color:black;line-height: 19px;"><?= day_name($fh['day_of_week']) ?></p>
                                </td>
                            <td style="background-color:#f3f3f3;padding-top: 10px; padding-bottom: 0px;">
                                <?php if ($fh['open_time'] && $fh['close_time']): ?>
                                    <p class="fs-5 mb-0" style="font-size:13px !important;color:#999;line-height:19px;">
                                        <?= format_time($fh['open_time']) ?> – <?= format_time($fh['close_time']) ?>
                                        <?php if ($fh['open_time2'] && $fh['close_time2']): ?>
                                            /&nbsp;<?= format_time($fh['open_time2']) ?> – <?= format_time($fh['close_time2']) ?>
                                        <?php endif; ?>
                                    </p>
                                <?php else: ?>
                                    <p class="fs-5" style="font-size:13px !important;color:#999;line-height: 19px;">Fermé</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
         </div>
         <div class="col-12 col-lg-4 mb-3">
             <div><a class="link" href="/services/entretien-vidange.php">Entretien / Vidange</a></div>
             <div><a class="link" href="/services/revision.php">Révision Premium</a></div>
             <div><a class="link" href="/services/mecanique-generale.php">Mécanique générale</a></div>
             <div><a class="link" href="/services/freins.php">Freins / Plaquettes</a></div>
             <div><a class="link" href="/services/courroie-distribution.php">Courroie de distribution</a></div>
             <div><a class="link" href="/services/embrayage.php">Embrayage</a></div>
             <div><a class="link" href="/services/suspension-amortisseurs.php">Suspension / Amortisseurs</a></div>
             <div><a class="link" href="/services/batterie.php">Batteries</a></div>
             <div><a class="link" href="/services/climatisation.php">Climatisation</a></div>
             <div><a class="link" href="/services/diagnostic.php">Diagnostic électronique</a></div>
             <div><a class="link" href="/services/controle-technique.php">Contrôle technique</a></div>
         </div>
         <div class="col-12 col-lg-4 mt-3">
            <p class="fs-5" style="font-size:16px !important;color:black;line-height: 19px;">3 Chemin des Arestieux</p>
            <p class="fs-5" style="font-size:16px !important;color:black;line-height: 19px;">33610 Cestas, France</p>
            <div style="margin-left: -6px;"><a class="link" href="tel:0618850740">Tel. 06 18 85 07 40</a></div>
            <div style="margin-left: -6px;"><a class="link" href="/contact.php">contact@mecanocestas.com</a></div>
            <div style="margin-left: -6px; margin-top:12px;"><a class="link" href="/devis.php" style="font-weight:600;color:#ff5d17;">Demande de devis</a></div>
         </div>
     </div>
     <div class="space5"></div>
     <div class="space5"></div>
     <div class="space5"></div>
 </div>



       
    </div>
</footer>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/navigation.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="/assets/js/main.js"></script>
<script src="/assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="/assets/js/webflow.schunk.74913c4b4b4ccfa6.js" type="text/javascript"></script>
<script src="/assets/js/webflow.schunk.90c6c35b6b125fc7.js" type="text/javascript"></script>
<script src="/assets/js/webflow.d6992fed.fe41365908d19ba9.js" type="text/javascript"></script>
<script src="/assets/js/navbar-scroll.js" type="text/javascript"></script>

</body>
</html>
