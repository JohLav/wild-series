<?php
    
    namespace App\Controller;
    
    use App\Repository\ProgramRepository;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    #[Route('/program', name: 'program_')]
    class ProgramController extends AbstractController
    {
        #[Route('/', name: 'index')]
        public function index(ProgramRepository $programRepository): Response
        {
            $programs = $programRepository->findAll();
            
            return $this->render('program/index.html.twig', [
                'programs' => $programs
            ]);
        }
        
        #[Route('/{id<^[0-9]+$>}', name: 'show', methods: ['GET'])]
        public function show(int $id, ProgramRepository $programRepository): Response
        {
            $program = $programRepository->findOneBy(['id' => $id]);
            // same as $program = $programRepository->find($id);
            
            if(!$program) {
                throw $this->createNotFoundException(
                  "Série $id introuvable dans la table program."
                );
            }
            return $this->render('program/show.html.twig', [
                'program' => $program
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