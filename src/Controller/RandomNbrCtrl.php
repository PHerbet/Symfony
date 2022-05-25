<?php
    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    class RandomNbr{
        /**
        * @Route("/random") 
        */
    
        public function RandomNbr():Response{
            return new Response(random_int(1,2));
        }
    }
    
?>   