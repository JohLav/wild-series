<?php
    
    namespace App\Controller;
    
    use App\Repository\CategoryRepository;
    use App\Repository\ProgramRepository;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    #[Route('/category', name: 'category_')]
    class CategoryController extends AbstractController
    {
        public function __construct(
            private CategoryRepository $categoryRepository,
            private ProgramRepository  $programRepository
        )
        {
        }
        
        #[Route('/', name: 'index')]
        public function index(): Response
        {
            $categories = $this->categoryRepository->findAll();
            
            return $this->render('category/index.html.twig', [
                'categories' => $categories
            ]);
        }
        
        #[Route('/{categoryName}', name: 'show', methods: ['GET'])]
        public function show(string $categoryName): Response
        {
            $category = $this->categoryRepository->findOneBy(
                ['name' => $categoryName],
            );
            
            if (!$category) {
                throw $this->createNotFoundException(
                    "Catégorie $categoryName introuvable dans la table category."
                );
            }
            
            $programs = $this->programRepository->findBy(
                ['category' => $category],
                ['id' => 'DESC'],
                3,
                0
            );

//            dd($programs);
            
            return $this->render('category/show.html.twig', [
                'category' => $category,
                'programs' => $programs
            ]);
        }
    }