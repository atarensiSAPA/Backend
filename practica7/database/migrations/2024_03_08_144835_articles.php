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
            $table->timestamps();

            $table->foreign('id_usuari')->references('id')->on('users');
        });
        DB::table('articles')->insert([
            ['article' => 'Csgo', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Csgo2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Valorant', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'League of legends', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Overwatch', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'World of Warcraft', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'The simpsons hit and run', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Team fight tactics', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Team fortress 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon verde', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon amarillo', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon diamante', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon esmeralda', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon platino', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon negro', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokemon blanco', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Pokmeong go', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Brawlhalla', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'osu!', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Tetris', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Ajedrez', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Monopoly', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Buscaminas', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dota 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Smite', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Mario kart', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Super smash bros', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Super smash bros ultimate', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Mario galaxy', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Mario maker', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Sonic', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'pac-man', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Sea of thieves', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Black desert', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Lost ark', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Cookie clicker', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Realm of the mad god', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Assetto corsa', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Monster hunter rise', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Monster hunter world', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Batman arkham', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Ark survival evolved', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Baloons TD battles', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Trove', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Elsword', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Nostale', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Albion online', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => '7 days to die', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dead cells', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Hollow knight', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Deceit', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Destiny 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => "Don't starve together", 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Grand theft auto: san andres', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Grand theft auto V', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Grand theft auto: vice city', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Grand theft auto III', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Grand theft auto IV', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Gran turismo', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Half-life', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Limbo', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Paladins', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Payday 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Payday 3', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Terraria', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Minecraft', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Roblox', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Uno', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Unturned', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'War thunder', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Aimlab', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dark souls', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Demon souls', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'The witcher III', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dead red redemption 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Bloodborne', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Sekiro', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Elden ring', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Apex legends', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Among us', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Beyond two souls', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Bioshock', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Call of Duty', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Black ops 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Cube world', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => "No man's sky", 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Starfield', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'God of war ragnarok', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dead by daylight', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Defiance', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dc universe online', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Dungeon fighter online', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Eternal return', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Euro truck simulator', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Fallout', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Fallout shelter', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Hacknet', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Helltaker', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Himno', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Iron snout', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Lethal league', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Sifu', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Left 4 dead 2', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'L.A noire', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Battlefield 3', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Naraka bladepoint', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Omega strikers', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['article' => 'Multiversus', 'id_usuari' => NULL, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                if (Schema::hasColumn('articles', 'id_usuari')) {
                    $table->dropForeign('articles_id_usuari_foreign');
                }
            });
    
            Schema::dropIfExists('articles');
        }
    }
};
