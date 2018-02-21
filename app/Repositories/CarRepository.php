<?php
/**
 * Created by Olimar Ferraz
 * Email: olimarferraz@univicosa.com.br
 * Date: 21/02/2018 - 14:37
 */

namespace App\Repositories;


use App\Model\Car;
use Illuminate\Database\Eloquent\Collection;

class CarRepository
{
    /**
     * @var Car
     */
    protected $car;

    /**
     * CarRepository constructor.
     *
     * @param Car $car
     */
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * @return array
     */
    public function listAll(): array
    {
        return $this->all()->toArray();
    }

    /**
     * @return array
     */
    private function all(): Collection
    {
        return $this->car->all();
    }
}