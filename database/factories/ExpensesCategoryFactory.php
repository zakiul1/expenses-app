<?php



namespace Database\Factories;


use App\Models\ExpensesCategory;
use Illuminate\Database\Eloquent\Factories\Factory;



class ExpensesCategoryFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = ExpensesCategory::class;



    /**

     * Define the model's default state.

     *

     * @return array

     */

    public function definition()
    {

        return [

            'name' => $this->faker->word,

        ];

    }

}