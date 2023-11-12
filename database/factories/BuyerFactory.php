<?php



namespace Database\Factories;



use App\Models\Buyer;



use Illuminate\Database\Eloquent\Factories\Factory;



class BuyerFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Buyer::class;



    /**

     * Define the model's default state.

     *

     * @return array

     */

    public function definition()
    {

        return [

            'name' => $this->faker->word,
            'address' => $this->faker->address, 
            'country' => $this->faker->country, 
            'email' => $this->faker->email, 
            'phone_number' => $this->faker->phoneNumber, 
            'company_name' => $this->faker->company, 
            'additional_info' => $this->faker->address, 

        ];

    }

}