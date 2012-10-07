   <a 
        class="fancybox.iframe"
        id="voir_spiv" 
        href="http://www.youtube.com/embed/1IpHPSo-pl8">
        <img 
            alt="Voir la vidéo du Spot Promotionnel d'Impro-Vocation" 
            src="img/voir_spiv_s.png"
        />
    </a>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#voir_spiv").fancybox({
                openEffect    : 'none',
                closeEffect	: 'none',
                helpers : {
                    overlay : {
                        css : {
                            'background' : 'rgba(0, 0, 0,0.75)'
                        }
                    }
                }
            });
        });
    </script>
      
    <section class="events" >
        <div class="text">
            <h2><?php a_slot('events-title', 'aRawHTML') ?></h2>
            <!--ul id="derniers_matchs" class="list_events">
                <li>Match contre la Selection Nationale
                    <span class="list_events_date">30/10/2012</span>
                    <span class="list_events_location">Dupréel</span>
                </li>
                <li>ULB - IHECS (match inter-unif)
                    <span class="list_events_date">25/11/2012</span>
                    <span class="list_events_location">Match Externe</span>
                </li>
            </ul  -->
            <?php a_slot('blogpost', 'aEvent',array('maxImages'=>0,'compact'=>true)); ?>
            <div class="add"><?php a_slot('events-text-add', 'aRichText') ?></div>
            <?php //include_component('a', 'standardArea', array('name' => 'next-events', 'width' => 200, 'toolbar' => 'Sidebar')) ?>
            <a class="action" href="/nous-contacter">Réserver une place</a>
        </div>
    </section>      
        
    <section class="stage">
        <div class="text">
            <h2 ><?php a_slot('stage-title', 'aRawHTML') ?></h2>
               <?php a_slot('stage-text', 'aRichText') ?>
                <div class="add"><?php a_slot('stage-text-add', 'aRichText') ?></div>
            <a class="action" href="/nous-rejoindre">Rejoindre le stage</a>
        </div>
    </section>
