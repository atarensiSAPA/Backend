<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('article');
            $table->unsignedBigInteger('id_usuari')->nullable();

            $table->foreign('id_usuari')->references('id')->on('users');
        });
        DB::table('articles')->insert([
            ['article' => 'Csgo', 'id_usuari' => NULL],
            ['article' => 'Csgo2', 'id_usuari' => NULL],
            ['article' => 'Valorant', 'id_usuari' => NULL],
            ['article' => 'League of legends', 'id_usuari' => NULL],
            ['article' => 'Overwatch', 'id_usuari' => NULL],
            ['article' => 'World of Warcraft', 'id_usuari' => NULL],
            ['article' => 'The simpsons hit and run', 'id_usuari' => NULL],
            ['article' => 'Team fight tactics', 'id_usuari' => NULL],
            ['article' => 'Team fortress 2', 'id_usuari' => NULL],
            ['article' => 'Pokemon verde', 'id_usuari' => NULL],
            ['article' => 'Pokemon amarillo', 'id_usuari' => NULL],
            ['article' => 'Pokemon diamante', 'id_usuari' => NULL],
            ['article' => 'Pokemon esmeralda', 'id_usuari' => NULL],
            ['article' => 'Pokemon platino', 'id_usuari' => NULL],
            ['article' => 'Pokemon negro', 'id_usuari' => NULL],
            ['article' => 'Pokemon blanco', 'id_usuari' => NULL],
            ['article' => 'Pokmeong go', 'id_usuari' => NULL],
            ['article' => 'Brawlhalla', 'id_usuari' => NULL],
            ['article' => 'osu!', 'id_usuari' => NULL],
            ['article' => 'Tetris', 'id_usuari' => NULL],
            ['article' => 'Ajedrez', 'id_usuari' => NULL],
            ['article' => 'Monopoly', 'id_usuari' => NULL],
            ['article' => 'Buscaminas', 'id_usuari' => NULL],
            ['article' => 'Dota 2', 'id_usuari' => NULL],
            ['article' => 'Smite', 'id_usuari' => NULL],
            ['article' => 'Mario kart', 'id_usuari' => NULL],
            ['article' => 'Super smash bros', 'id_usuari' => NULL],
            ['article' => 'Super smash bros ultimate', 'id_usuari' => NULL],
            ['article' => 'Mario galaxy', 'id_usuari' => NULL],
            ['article' => 'Mario maker', 'id_usuari' => NULL],
            ['article' => 'Sonic', 'id_usuari' => NULL],
            ['article' => 'pac-man', 'id_usuari' => NULL],
            ['article' => 'Sea of thieves', 'id_usuari' => NULL],
            ['article' => 'Black desert', 'id_usuari' => NULL],
            ['article' => 'Lost ark', 'id_usuari' => NULL],
            ['article' => 'Cookie clicker', 'id_usuari' => NULL],
            ['article' => 'Realm of the mad god', 'id_usuari' => NULL],
            ['article' => 'Assetto corsa', 'id_usuari' => NULL],
            ['article' => 'Monster hunter rise', 'id_usuari' => NULL],
            ['article' => 'Monster hunter world', 'id_usuari' => NULL],
            ['article' => 'Batman arkham', 'id_usuari' => NULL],
            ['article' => 'Ark survival evolved', 'id_usuari' => NULL],
            ['article' => 'Baloons TD battles', 'id_usuari' => NULL],
            ['article' => 'Trove', 'id_usuari' => NULL],
            ['article' => 'Elsword', 'id_usuari' => NULL],
            ['article' => 'Nostale', 'id_usuari' => NULL],
            ['article' => 'Albion online', 'id_usuari' => NULL],
            ['article' => '7 days to die', 'id_usuari' => NULL],
            ['article' => 'Dead cells', 'id_usuari' => NULL],
            ['article' => 'Hollow knight', 'id_usuari' => NULL],
            ['article' => 'Deceit', 'id_usuari' => NULL],
            ['article' => 'Destiny 2', 'id_usuari' => NULL],
            ['article' => "Don't starve together", 'id_usuari' => NULL],
            ['article' => 'Grand theft auto: san andres', 'id_usuari' => NULL],
            ['article' => 'Grand theft auto V', 'id_usuari' => NULL],
            ['article' => 'Grand theft auto: vice city', 'id_usuari' => NULL],
            ['article' => 'Grand theft auto III', 'id_usuari' => NULL],
            ['article' => 'Grand theft auto IV', 'id_usuari' => NULL],
            ['article' => 'Gran turismo', 'id_usuari' => NULL],
            ['article' => 'Half-life', 'id_usuari' => NULL],
            ['article' => 'Limbo', 'id_usuari' => NULL],
            ['article' => 'Paladins', 'id_usuari' => NULL],
            ['article' => 'Payday 2', 'id_usuari' => NULL],
            ['article' => 'Payday 3', 'id_usuari' => NULL],
            ['article' => 'Terraria', 'id_usuari' => NULL],
            ['article' => 'Minecraft', 'id_usuari' => NULL],
            ['article' => 'Roblox', 'id_usuari' => NULL],
            ['article' => 'Uno', 'id_usuari' => NULL],
            ['article' => 'Unturned', 'id_usuari' => NULL],
            ['article' => 'War thunder', 'id_usuari' => NULL],
            ['article' => 'Aimlab', 'id_usuari' => NULL],
            ['article' => 'Dark souls', 'id_usuari' => NULL],
            ['article' => 'Demon souls', 'id_usuari' => NULL],
            ['article' => 'The witcher III', 'id_usuari' => NULL],
            ['article' => 'Dead red redemption 2', 'id_usuari' => NULL],
            ['article' => 'Bloodborne', 'id_usuari' => NULL],
            ['article' => 'Sekiro', 'id_usuari' => NULL],
            ['article' => 'Elden ring', 'id_usuari' => NULL],
            ['article' => 'Apex legends', 'id_usuari' => NULL],
            ['article' => 'Among us', 'id_usuari' => NULL],
            ['article' => 'Beyond two souls', 'id_usuari' => NULL],
            ['article' => 'Bioshock', 'id_usuari' => NULL],
            ['article' => 'Call of Duty', 'id_usuari' => NULL],
            ['article' => 'Black ops 2', 'id_usuari' => NULL],
            ['article' => 'Cube world', 'id_usuari' => NULL],
            ['article' => "No man's sky", 'id_usuari' => NULL],
            ['article' => 'Starfield', 'id_usuari' => NULL],
            ['article' => 'God of war ragnarok', 'id_usuari' => NULL],
            ['article' => 'Dead by daylight', 'id_usuari' => NULL],
            ['article' => 'Defiance', 'id_usuari' => NULL],
            ['article' => 'Dc universe online', 'id_usuari' => NULL],
            ['article' => 'Dungeon fighter online', 'id_usuari' => NULL],
            ['article' => 'Eternal return', 'id_usuari' => NULL],
            ['article' => 'Euro truck simulator', 'id_usuari' => NULL],
            ['article' => 'Fallout', 'id_usuari' => NULL],
            ['article' => 'Fallout shelter', 'id_usuari' => NULL],
            ['article' => 'Hacknet', 'id_usuari' => NULL],
            ['article' => 'Helltaker', 'id_usuari' => NULL],
            ['article' => 'Himno', 'id_usuari' => NULL],
            ['article' => 'Iron snout', 'id_usuari' => NULL],
            ['article' => 'Lethal league', 'id_usuari' => NULL],
            ['article' => 'Sifu', 'id_usuari' => NULL],
            ['article' => 'Left 4 dead 2', 'id_usuari' => NULL],
            ['article' => 'L.A noire', 'id_usuari' => NULL],
            ['article' => 'Battlefield 3', 'id_usuari' => NULL],
            ['article' => 'Naraka bladepoint', 'id_usuari' => NULL],
            ['article' => 'Omega strikers', 'id_usuari' => NULL],
            ['article' => 'Multiversus', 'id_usuari' => NULL],
            ['article' => 'prova', 'id_usuari' => 1],
            ['article' => 'prova2', 'id_usuari' => 1],
            ['article' => 'prova2', 'id_usuari' => 1],
            ['article' => 'prova3', 'id_usuari' => 1],
            ['article' => 'prova3', 'id_usuari' => 1],
            ['article' => 'prova3', 'id_usuari' => 1],
            ['article' => 'prova3', 'id_usuari' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
