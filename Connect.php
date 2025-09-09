<?php 
    class Connect {
        public function connect(){
            return new mysqli("localhost", "faqih", "1243", "galeri_fotografi");
        }
    }
?>