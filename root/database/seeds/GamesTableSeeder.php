<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('games')->insert([
        [
            "title" => "World of Warcraft",
            "price" => 9,
            "desc" => "World of Warcraft (WoW) is a massively multiplayer online role-playing game (MMORPG) released in 2004 by Blizzard Entertainment. It is the fourth released game set in the Warcraft fantasy universe. World of Warcraft takes place within the Warcraft world of Azeroth, approximately four years after the events at the conclusion of Blizzard's previous Warcraft release, Warcraft III: The Frozen Throne. The game was announced in 2001, and was released for the 10th anniversary of the Warcraft franchise on November 23, 2004. Since launch, World of Warcraft has had seven major expansion packs released for it: The Burning Crusade, Wrath of the Lich King, Cataclysm, Mists of Pandaria, Warlords of Draenor, Legion, and Battle for Azeroth." ,
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/91/WoW_Box_Art1.jpg/220px-WoW_Box_Art1.jpg"
        ],
        [
            "title" => "Splinter Cell 3: Chaos Theory",
            "price" => 19,
            "desc" => "Tom Clancy's Splinter Cell: Chaos Theory is a stealth game developed by Ubisoft Montreal and Ubisoft Milan and released in March 2005 for the Xbox, PlayStation 2 (PS2), GameCube and Microsoft Windows. Handheld versions for the Nintendo DS, mobile, and N-Gage were also released. A Game Boy Advance port was planned, but later cancelled." ,
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Tom_Clancy%27s_Splinter_Cell_-_Chaos_Theory_Coverart.png/220px-Tom_Clancy%27s_Splinter_Cell_-_Chaos_Theory_Coverart.png"
        ],
        [
            "title" => "Pandemonium!",
            "price" => 1,
            "desc" => "Pandemonium! is a 1996 platforming video game developed by Toys for Bob and published by Crystal Dynamics for the PlayStation, Sega Saturn, Microsoft Windows, N-Gage,[2] Mobile and iOS.[1] Pandemonium! features Fargus, a joker, and Nikki, a sorceress, who unwittingly casts a spell that destroys the town. The goal of the game is to reach the Wishing Engine, where they can wish the town back to normal. For each level, the player can choose which character to be." ,
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/8/8a/Pandemonium_box.jpg/220px-Pandemonium_box.jpg"
        ],
        [
            "title" => "Red Dead Redemption 2",
            "price" => 49,
            "desc" => "Red Dead Redemption 2 is a Western-themed action-adventure game developed and published by Rockstar Games. It was released on October 26, 2018, for the PlayStation 4 and Xbox One consoles. The third entry in the Red Dead series, it is a prequel to the 2010 game Red Dead Redemption. Set in 1899 in a fictionalized version of the Western, Midwestern and Southern United States, the story centers on outlaw Arthur Morgan, a member of the Van der Linde gang dealing with the decline of the Wild West whilst attempting to survive against government forces, rival gangs, and other enemies." ,
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/44/Red_Dead_Redemption_II.jpg/220px-Red_Dead_Redemption_II.jpg"
        ],
        [
            "title" => "The Talos Principle",
            "price" => 19,
            "desc" => "The Talos Principle is a first-person puzzle video game created by the Croatian developer Croteam and published by Devolver Digital. It was simultaneously released on Linux, OS X and Windows in December 2014. It was released for Android in May 2015, for PlayStation 4 in October 2015, for iOS in October 2017, and for Xbox One in August 2018. Virtual reality-enabled versions for the Oculus Rift and HTC Vive were released on 18 October 2017.
            The game features a philosophical storyline. It takes its name from Talos of Greek mythology, a giant mechanical man who protected Europa in Crete from pirates and invaders. Other names taken from mythology and religion and used in the game include Elohim, Gehenna, Milton, Samsara, and Uriel." ,
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/91/The_Talos_Principle_logo.png/220px-The_Talos_Principle_logo.png"
        ],
        [
            "title" => "Pacman",
            "price" => 79,
            "desc" => "Pac-Man is a maze arcade game developed and released by Namco in 1980. It was originally known as Puckman in Japan before being changed to Pac-Man in international releases, done by Midway Games.
            The gameplay involves the titular character in an enclosed maze filled with individual dots, or pellets. The goal is to consume all of the pellets while avoiding four multi-colored ghosts that wander around the maze. As the levels progress, the ghosts progressively become more aggressive, changing their behavior and patterns. If a ghost touches Pac-Man, he loses a life, which can be regained at certain point values. The maze also contains four large power pellets, which gives the player temporary invulnerability, allowing them to consume the ghosts to earn more points. Throughout the game, fruits also appear in the center of the maze, which can be consumed to earn more points." ,
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/1/16/Pac_flyer.png/220px-Pac_flyer.png"
        ]
      ]);
    }
}
