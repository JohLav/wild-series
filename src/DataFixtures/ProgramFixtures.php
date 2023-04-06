<?php
    
    namespace App\DataFixtures;
    
    use App\Entity\Program;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Common\DataFixtures\DependentFixtureInterface;
    use Doctrine\Persistence\ObjectManager;
    
    class ProgramFixtures extends Fixture implements DependentFixtureInterface
    {
//        const CATEGORIES = [
//            'Title',
//            'Synopsis',
//            'Poster'
//        ];
        
        public function load(ObjectManager $manager)
        {
            $program = new Program();
            $program->setTitle('Walking dead');
            $program->setSynopsis("Des zombies envahissent la terre");
            $program->setPoster("/build/images/the-walking-dead.jpeg");
            $program->setCategory($this->getReference('category_Action'));
            $manager->persist($program);
    
            $program = new Program();
            $program->setTitle('Arcane');
            $program->setSynopsis("Championnes de leurs villes jumelles et
            rivales, deux sœurs se battent dans une guerre où font rage des technologies
            magiques et des perspectives diamétralement opposées.");
            $program->setPoster("/build/images/arcane.jpg");
            $program->setCategory($this->getReference('category_Animation'));
            $manager->persist($program);
    
            $program = new Program();
            $program->setTitle('Stranger Things');
            $program->setSynopsis("Quand un jeune garçon disparaît,
            une petite ville découvre une affaire mystérieuse, des expériences secrètes,
            des forces surnaturelles terrifiantes... et une fillette.");
            $program->setPoster("/build/images/stranger-things.jpg");
            $program->setCategory($this->getReference('category_Drame'));
            $manager->persist($program);
    
            $program = new Program();
            $program->setTitle('Marianne');
            $program->setSynopsis("De retour dans sa ville natale,
            une célèbre écrivaine de livres d'horreur découvre que l'esprit malin
            qui hante ses rêves sème désormais la désolation dans le monde réel.");
            $program->setPoster("/build/images/marianne.jpg");
            $program->setCategory($this->getReference('category_Horreur'));
            $manager->persist($program);
    
            $program = new Program();
            $program->setTitle('The Sinner');
            $program->setSynopsis("Le brillant enquêteur Harry Ambrose est confronté
            chaque saison à une affaire criminelle complexe et dérangeante.");
            $program->setPoster("/build/images/the-sinner.jpg");
            $program->setCategory($this->getReference('category_Thriller'));
            $manager->persist($program);
            
            $manager->flush();
        }
        
        public function getDependencies()
        {
            // Tu retournes ici toutes les classes de fixtures
            // dont ProgramFixtures dépend
            return [
                CategoryFixtures::class,
            ];
        }
    }
