<?php
/**
 * Created by Olimar Ferraz
 * Email: olimarferraz@univicosa.com.br
 * Date: 21/02/2018 - 15:21
 */

namespace App\Repositories;


use App\Model\Spaceship;
use Illuminate\Database\Eloquent\Collection;

class SpaceshipRepository
{
    /**
     * @var Spaceship
     */
    protected $spaceship;

    /**
     * SpaceshipRepository constructor.
     *
     * @param Spaceship $spaceship
     */
    public function __construct(Spaceship $spaceship)
    {
        $this->spaceship = $spaceship;
    }

    /**
     * @return string
     */
    protected function listAll(): string
    {
        return $this->all()->toArray();
    }

    /**
     * @return Collection
     */
    private function all(): Collection
    {
        return $this->spaceship->all();
    }
}