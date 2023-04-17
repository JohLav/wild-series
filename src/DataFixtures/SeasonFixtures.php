<?php
    
    namespace App\DataFixtures;
    
    use App\Entity\Season;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Common\DataFixtures\DependentFixtureInterface;
    use Doctrine\Persistence\ObjectManager;
    
    class SeasonFixtures extends Fixture implements DependentFixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            // ARCANE - SEASON 1
            
            $season = new Season();
            $season->setNumber(1);
            $season->setYear(2021);
            $season->setDescription("Championnes de leurs villes jumelles et rivales, deux sœurs se battent
             dans une guerre où font rage des technologies magiques et des perspectives diamétralement opposées.");
            $season->setProgram($this->getReference('program_Arcane'));
            $this->addReference('season1_Arcane', $season);
            $manager->persist($season);
            
            // THE BIG BANG THEORY - SEASONS 1 TO 7 (12 TOTAL)
    
            $season = new Season();
            $season->setNumber(1);
            $season->setYear(2006);
            $season->setDescription("The first Pilot of what will become 'The Big Bang Theory'.
            Leonard and Sheldon are two awkward scientists who share an apartment.
            They meet a drunk girl called Katie and invite her to stay at their place,
            because she has nowhere to stay. The two guys have a female friend, also a scientist, called Gilda.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season1_The Big Bang Theory', $season);
            $manager->persist($season);
    
            $season = new Season();
            $season->setNumber(2);
            $season->setYear(2008);
            $season->setDescription("Leonard becomes concerned when his date with Penny ends abruptly
            and she starts blowing him off. When told the truth, Sheldon would rather move out than
            keep Penny's reasons a secret from Leonard.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season2_The Big Bang Theory', $season);
            $manager->persist($season);
    
            $season = new Season();
            $season->setNumber(3);
            $season->setYear(2010);
            $season->setDescription("After returning from the North Pole, a conflict among the guys
            sends Sheldon back to Texas and interferes with Leonard's reunion with Penny.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season3_The Big Bang Theory', $season);
            $manager->persist($season);
    
            $season = new Season();
            $season->setNumber(4);
            $season->setYear(2011);
            $season->setDescription("Penny ends up tagging along on Sheldon's first ever date with
            Amy, while Howard finds an unusual use for a robotic arm.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season4_The Big Bang Theory', $season);
            $manager->persist($season);
    
            $season = new Season();
            $season->setNumber(5);
            $season->setYear(2012);
            $season->setDescription("The gang deal with the fallout from Penny and Raj's night together.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season5_The Big Bang Theory', $season);
            $manager->persist($season);
            
            $season = new Season();
            $season->setNumber(6);
            $season->setYear(2012);
            $season->setDescription("Raj crashes Sheldon and Amy's second anniversary and interferes in Leonard
            and Penny's relationship. Howard gets caught in the middle of an argument between Bernadette and his mother.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season6_The Big Bang Theory', $season);
            $manager->persist($season);
    
            $season = new Season();
            $season->setNumber(7);
            $season->setYear(2013);
            $season->setDescription("Sheldon and Penny bond over missing Leonard. Howard tries to help Raj get
            over his breakup with Lucy. Amy and Bernadette take a trip together to a biology convention.");
            $season->setProgram($this->getReference('program_The Big Bang Theory'));
            $this->addReference('season7_The Big Bang Theory', $season);
            $manager->persist($season);
            
            $manager->flush();
        }
        
        public function getDependencies()
        {
            return [
                ProgramFixtures::class
            ];
        }
    }
