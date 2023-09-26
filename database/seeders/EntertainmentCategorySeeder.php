<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntertainmentCategory;

class EntertainmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntertainmentCategory::insert([
            ['name'=>'Bands (jazz, rock, pop, classical, cover bands, etc.)','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Solo instrumentalists (piano, guitar, violin, saxophone, etc.)','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Vocalists (solo singers, acapella groups, choirs)','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'DJs or electronic music artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Ethnic music performers (Latin, African, Indian, etc.)','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Tribute bands or tribute artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Stand-up comedians','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Improv groups','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Magicians','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Hypnotists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mentalists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Jugglers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Circus performers (aerialists, stilt walkers, fire dancers)','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Caricature artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Face painters','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Live painters or artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Speed painters','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Sand artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mime artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Contortionists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Living statues','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Illusionists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Stilt walkers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Sword swallowers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Balloon artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Human statues','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Caricature artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Bubble performers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Photo booths with props','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Virtual reality experiences','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Interactive games or activities','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Temporary tattoo artists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Tarot card readers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Palm readers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mind readers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Virtual game shows','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Celebrity speakers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Sports stars','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Influencers or social media personalities','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Actors or actresses','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Musicians or bands','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Reality TV personalities','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Laser shows','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Projection mapping displays','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'LED dance performances','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Robot performances','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Holographic displays','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Drone light shows','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Clowns or entertainers for children','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Face painting','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Balloon twisting','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Puppet shows','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Interactive storytelling','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mascot characters','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
