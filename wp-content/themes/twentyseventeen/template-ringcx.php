<?php
/*
 * Template Name: RingCX Live Dashboard
 */

get_header(); 
?>

<main id="primary" class="site-main">
    <div class="container" style="max-width: 98%; padding: 0 20px; margin: 0 auto;"> 
        
        <?php
        // Da die App im selben Theme-Ordner im Unterordner 'ringcx-app' liegt:
        $app_pfad = __DIR__ . '/ringcx-app/dashboard.php';
        
        if ( file_exists( $app_pfad ) ) {
            include( $app_pfad );
        } else {
            echo '<p>Dashboard-Datei nicht gefunden.</p>';
        }
        ?>

    </div>
</main>

<?php 
get_footer(); 
?>
