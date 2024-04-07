<!-- Trait -->
<?php
 include 'test.php' ;
 
 
    // formatto i prezzi
    trait PriceFormatter {
        public function formatPrice($price, $decimals = 2, $decimalSeparator = ',', $thousandsSeparator = '.') {
            return number_format($price, $decimals, $decimalSeparator, $thousandsSeparator);
        }
    }
    
    // messaggio di errore  legato ad eventuali dati del prodotto non validi

    class InvalidProductException extends Exception {
        public function errorMessage() {
            return 'Errore: dati del prodotto non validi.';
        }
    }
    

?>