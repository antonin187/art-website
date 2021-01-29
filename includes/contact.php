<?php
$domain = '/php/monsite';
?>

<section id="contact_section1">
    <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 column">
        <div class="center">
            <p>Nous contacter.</p>
        </div>
        <div id="rubriques_container" class="row wrap center">
            <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
                <div class="padd-around center">
                    <ul>
                        <li>
                            <a class="contact_rubriques">Informations</a>
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
                        <li>
                            <a class="contact_rubriques">Téléphone</a>
                        </li>
                        <li>
                            <a href="tel:+33626771301">06 28 65 14 86</a>
                        </li>
                        <li>
                            <a class="contact_rubriques"">Email</a>
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
                        <li>
                            <a class="contact_rubriques">Nos derniers articles</a>
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
        </div>
    </div>
</section>
<section id="section_email" class="center column">
    <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 center">
        <p>Envoyez-nous directement un message.</p>
    </div>
    <div class="xLarge-4 large-6 medium-10 small-10 xSmall-10 column center">
        <form id="contact_form" class="column" method="post">
            <input type="text" name="nom" placeholder="Nom">
            <input type="email" name="email" placeholder="Adresse email">
            <input type="text" name="Objet" placeholder="Objet">
            <textarea placeholder="Message" type="text" name="message"></textarea> <!-- rows = hauteur et cols = largeur -->
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
</section>