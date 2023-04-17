<?php
    
    namespace App\DataFixtures;
    
    use App\Entity\Episode;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Common\DataFixtures\DependentFixtureInterface;
    use Doctrine\Persistence\ObjectManager;
    
    class EpisodeFixtures extends Fixture implements DependentFixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            
            // ARCANE - SEASON 1 - EPISODES 9
            
            $episode = new Episode();
            $episode->setTitle("Welcome to the Playground");
            $episode->setNumber(1);
            $episode->setSynopsis("Les sœurs orphelines Vi et Powder causent des remous dans les rues souterraines de Zaun à la suite d'un braquage dans le très huppé Piltover.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode1_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Épisode 2");
            $episode->setNumber(2);
            $episode->setSynopsis("Idéaliste, le chercheur Jayce tente de maîtriser la magie par la science malgré les avertissements de son mentor. Le criminel Silco teste une substance puissante.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode2_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Épisode 3");
            $episode->setNumber(3);
            $episode->setSynopsis("Deux anciens rivaux s'affrontent lors d'un défi spectaculaire qui se révèle fatidique pour Zaun. Jayce et Viktor prennent de gros risques pour leurs recherches.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode3_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Épisode 4");
            $episode->setNumber(4);
            $episode->setSynopsis("Alors que Piltover profite de leur technologie, Jayce et Viktor réfléchissent à ce qu'ils vont faire. Un visage familier ressort de Zaun pour semer la pagaille.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode4_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Épisode 5");
            $episode->setNumber(5);
            $episode->setSynopsis("Caitlyn, la pacifieuse qui n'en fait qu'à sa tête, arpente les bas-fonds pour trouver Silco. Jayce devient une cible en combattant la corruption à Piltover.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode5_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Épisode 6");
            $episode->setNumber(6);
            $episode->setSynopsis("Un protégé discrédite son mentor devant le Conseil à cause de l'évolution rapide d'une technologie magique. Poursuivie par les autorités, Jinx doit affronter son passé.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode6_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Le petit sauveur");
            $episode->setNumber(7);
            $episode->setSynopsis("Caitlyn et Vi retrouvent un allié dans les rues de Zaun et se déchaînent contre une ennemie commune. Viktor prend une décision désespérée.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode7_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("L'eau et l'huile");
            $episode->setNumber(8);
            $episode->setSynopsis("L'héritière désavouée Mel et sa mère échangent des tactiques de combat. Caitlyn et Vi forgent une alliance improbable. Jinx subit une étonnante transformation.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode8_Arcane', $episode);
            $manager->persist($episode);
            
            $episode = new Episode();
            $episode->setTitle("Rouages et engrenages");
            $episode->setNumber(9);
            $episode->setSynopsis("À deux doigts d'entrer en guerre, les chefs de Piltover et de Zaun sont face à un ultimatum, jusqu'à ce qu'un affrontement fatidique bouleverse les deux villes à jamais.");
            $episode->setSeason($this->getReference('season1_Arcane'));
            $this->addReference('episode9_Arcane', $episode);
            $manager->persist($episode);
            
            $manager->flush();
        }
        
        public function getDependencies(): array
        {
            return [
                SeasonFixtures::class
            ];
        }
    }
