<?php
    
    namespace App\Controller;
    
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    #[Route('/program', name: 'program_')]
    class ProgramController extends AbstractController
    {
        #[Route('/', name: 'index')]
        public function index(): Response
        {
            return $this->render('program/index.html.twig', [
                'website' => 'Wild Series'
            ]);
        }
        
        #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'], methods: ['GET'])]
        public function show(int $id): Response
        {
            return $this->render('program/show.html.twig', [
                'id' => $id
            ]);
        }
        
//        #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
//        public function new(int $id): Response
//        {
//            return $this->redirectToRoute('program_new', [
//                'id' => $id
//            ]);
//        }

//        #[Route('/{id}', name: 'delete', methods: ['DELETE'])]
//        public function delete(int $id): Response
//        {
//            return $this->redirectToRoute('program_delete', [
//                'id' => $id
//            ]);
//        }
    }