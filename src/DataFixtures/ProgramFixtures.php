<?php
    
    namespace App\DataFixtures;
    
    use App\Entity\Program;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Common\DataFixtures\DependentFixtureInterface;
    use Doctrine\Persistence\ObjectManager;
    
    class ProgramFixtures extends Fixture implements DependentFixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $program = new Program();
            $program->setTitle('Walking dead');
            $program->setSynopsis("Des zombies envahissent la terre");
            $program->setPoster("https://occ-0-7522-55.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABcSzC4V98I7QlPlZbQR-ldE557Z40Q9qukqsBL_Xj6ubVaNrFrUxhkIvlIxzOaZaIDGcdMzUgVxa3bWmd4Zy6vLJreJ3ol1oXD-o.jpg?r=334%22)");
            $program->setCategory($this->getReference('category_Action'));
            $this->addReference('program_Walking dead', $program);
            $manager->persist($program);
            
            $program = new Program();
            $program->setTitle('Arcane');
            $program->setSynopsis("Championnes de leurs villes jumelles et
            rivales, deux sœurs se battent dans une guerre où font rage des technologies
            magiques et des perspectives diamétralement opposées.");
            $program->setPoster("https://occ-0-7522-55.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABbFg8Rh5qt2kFbh1e_QAO5a-HhV1Pu7CzZ4u2dEtaDvoM1ldpzCg6GdS2XOGRcD6_vC1y4pQt_fAzj09PVc1Sa0Ho6b0yMsNeo9P.jpg?r=f3a%22)");
            $program->setCategory($this->getReference('category_Animation'));
            $this->addReference('program_Arcane', $program);
            $manager->persist($program);
            
            $program = new Program();
            $program->setTitle('The Big Bang Theory');
            $program->setSynopsis("Leonard Hofstadter et Sheldon Cooper vivent en colocation à Pasadena,
            ville de l'agglomération de Los Angeles. Ce sont tous deux des physiciens surdoués, « geeks » de surcroît.
            C'est d'ailleurs autour de cela qu'est axée la majeure partie comique de la série.");
            $program->setPoster("https://upload.wikimedia.org/wikipedia/fr/6/69/BigBangTheory_Logo.png");
            $program->setCategory($this->getReference('category_Comedy'));
            $this->addReference('program_The Big Bang Theory', $program);
            $manager->persist($program);
            
            $program = new Program();
            $program->setTitle('Stranger Things');
            $program->setSynopsis("Quand un jeune garçon disparaît,
            une petite ville découvre une affaire mystérieuse, des expériences secrètes,
            des forces surnaturelles terrifiantes... et une fillette.");
            $program->setPoster("https://occ-0-7522-55.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABer7SeWc6FvkBqWtk61GwL7rshAEVCOARQZVTEJGnLXykYBlO4nbbr6gs7M650BjULuaN6hucXKr5xY2iqPAajrxXd70HawdJeuD.jpg?r=608");
            $program->setCategory($this->getReference('category_Drame'));
            $this->addReference('program_Stranger Things', $program);
            $manager->persist($program);
            
            $program = new Program();
            $program->setTitle('Marianne');
            $program->setSynopsis("De retour dans sa ville natale,
            une célèbre écrivaine de livres d'horreur découvre que l'esprit malin
            qui hante ses rêves sème désormais la désolation dans le monde réel.");
            $program->setPoster("https://occ-0-7522-55.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABaaykDaAu7J30WxVeaqhvXMoY-TEeHeFnnP_xxbshW9lAU7TCq4KkslW-uMMhZYkXXTjujiRFl6UysSbR5HJYMVqj44DILTm6ATZ.jpg?r=6c1");
            $program->setCategory($this->getReference('category_Horreur'));
            $this->addReference('program_Marianne', $program);
            $manager->persist($program);
            
            $program = new Program();
            $program->setTitle('The Sinner');
            $program->setSynopsis("Le brillant enquêteur Harry Ambrose est confronté
            chaque saison à une affaire criminelle complexe et dérangeante.");
            $program->setPoster("https://occ-0-7522-55.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABXKp0HtA9spf65Jp5fwvOPgw9s5aTsMuxP9yhWUF-he-HUviHdCDcHG-tvK4LsLZnIck_R0Mr0issnNSY7c7Ta4fpiU1zyfK37Ye.jpg?r=2a3");
            $program->setCategory($this->getReference('category_Thriller'));
            $this->addReference('program_The Sinner', $program);
            $manager->persist($program);
            
            $manager->flush();
        }
        
        public function getDependencies(): array
        {
            return [
                CategoryFixtures::class,
            ];
        }
    }
