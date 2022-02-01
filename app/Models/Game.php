<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function firered()
    {
        $attempt = Attempt::create();
        $attempt->encounters()->createMany([
            ['label' => 'Starter'],
            ['label' => 'Pallet Town'],
            ['label' => 'Route 1'],
            ['label' => 'Viridian City'],
            ['label' => 'Route 22'],
            ['label' => 'Route 2'],
            ['label' => 'Viridian Forest'],
            ['label' => 'Route 3'],
            ['label' => 'Route 4'],
            ['label' => 'Mt. Moon'],
            ['label' => 'Cerulean City'],
            ['label' => 'Route 24'],
            ['label' => 'Route 25'],
            ['label' => 'Route 5'],
            ['label' => 'Route 6'],
            ['label' => 'Vermillion City'],
            ['label' => 'Route 11'],
            ['label' => 'Diglett\'s Cave'],
            ['label' => 'Route 9'],
            ['label' => 'Route 10'],
            ['label' => 'Rock Tunnel'],
            ['label' => 'Pokemon Tower'],
            ['label' => 'Route 12'],
            ['label' => 'Route 8'],
            ['label' => 'Route 7'],
            ['label' => 'Celadon City'],
            ['label' => 'Saffron City'],
            ['label' => 'Route 16'],
            ['label' => 'Route 17'],
            ['label' => 'Route 18'],
            ['label' => 'Fuschia City'],
            ['label' => 'Safari Zone'],
            ['label' => 'Route 15'],
            ['label' => 'Route 14'],
            ['label' => 'Route 13'],
            ['label' => 'Power Plant'],
            ['label' => 'Route 19'],
            ['label' => 'Route 20'],
            ['label' => 'Seafoam Islands'],
            ['label' => 'Cinnabar Island'],
            ['label' => 'Pokemon Mansion'],
            ['label' => 'One Island'],
            ['label' => 'Two Island'],
            ['label' => 'Three Island'],
            ['label' => 'Route 21'],
            ['label' => 'Route 23'],
            ['label' => 'Victory Road'],
            ['label' => 'Four Island'],
            ['label' => 'Five Island'],
            ['label' => 'Six Island'],
            ['label' => 'Seven Island'],
            ['label' => 'Cerulean Cave'],
        ]);
    }
}
