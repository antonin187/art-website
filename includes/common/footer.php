</main>
<?php //if (!defined('MAINTENANCE')) {
if ($uri != '/contact') {?>
<footer>
    <section>
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 center">
            <p>En savoir plus ?</p>
        </div>
    </section>
    <section class="row wrap">
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="padd-around center">
                <ul>
                    <li class="footer_rubriques">
                        <a>Informations</a>
                    </li>
                    <li>
                        <a href="<?= $domain ?>/rgpd">RGPD</a>
                    </li>
                    <li>
                        <a href="<?= $domain ?>/cgu">CGU</a>
                    </li>
                    <li>
                        <a href="<?= $domain ?>/mentions-legales">Mentions légales</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="padd-around center">
                <ul>
                    <li class="footer_rubriques">
                        <a>Téléphone</a>
                    </li>
                    <li>
                        <a href="tel:+33626771301">06 26 77 13 01</a>
                    </li>
                    <li class="footer_rubriques">
                        <a>Email</a>
                    </li>
                    <li>
                        <a href="mailto:magaleriedart@gmail.com">magaleriedart@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="padd-around center">
                <ul>
                    <li class="footer_rubriques">
                        <a>Nos derniers articles</a>
                    </li>
                    <li>
                        <a href="<?= $domain ?>/blog/premier-article">Vincent Van Gogh</a>
                    </li>
                    <li>
                        <a href="<?= $domain ?>/blog/deuxieme-article">La Joconde</a>
                    </li>
                    <li>
                        <a href="<?= $domain ?>/blog/troisieme-article">Le cubisme</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>
<?php } ?>
<script type="text/javascript" src="<?= $domain ?>/assets/js/script.js"></script>
</body>
</html>
