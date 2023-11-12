<?php



namespace Database\Factories;



use App\Models\Factory as Fac;



use Illuminate\Database\Eloquent\Factories\Factory;



class FactoryFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Fac::class;



    /**

     * Define the model's default state.

     *

     * @return array

     */

    public function definition()
    {

        return [

            'name' => $this->faker->company,
            'address' => $this->faker->address, 
           /*  'country' => $this->faker->country,  */
            'email' => $this->faker->email, 
            'phone_number' => $this->faker->phoneNumber, 
            /* 'company_name' => $this->faker->company, */ 
            'additional_info' => $this->faker->address, 

        ];

    }

}