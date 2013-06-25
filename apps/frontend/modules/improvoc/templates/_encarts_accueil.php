   <a 
        class="fancybox.iframe"
        id="voir_spiv" 
        href="http://www.youtube.com/embed/1IpHPSo-pl8">
        <img 
            alt="Voir la vidéo du Spot Promotionnel d'Impro-Vocation" 
            src="/img/voir_spiv_s.png"
        />
    </a>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#main section.events .aEvent .event-item:last').addClass('last');
            
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
            <?php // the first three events (configure in UI the number) ?>
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
