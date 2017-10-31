<?php



    class Account {

        public function __construct(){
        
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($em);
            $this->validateEmails($em2, $em2);
            $this->validatePasswords($pw, $pw2);
        }
            private function validateUsername($un){
                echo ("userName function called");
            }
            
            private function validateFirstName($fn){
                
            }
        
            private function validateLastName($ln){
                
            }
        
            private function validateEmails($em, $em2){
                
            }
        
            private function validatePasswords($pw, $pw2){
        
            }

    }

?>