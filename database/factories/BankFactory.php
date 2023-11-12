<?php



namespace Database\Factories;



use App\Models\Bank;
use App\Models\Factory as Fac;



use Illuminate\Database\Eloquent\Factories\Factory;



class BankFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Bank::class;



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
            'phone_no' => $this->faker->phoneNumber, 
            'account_no' => $this->faker->phoneNumber, 
            'swift_code' => $this->faker->phoneNumber, 
           /*  'additional_info' => $this->faker->address,  */
            'bank_type' => 1, 

        ];

    }

}