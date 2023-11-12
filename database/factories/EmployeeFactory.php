<?php



namespace Database\Factories;



use App\Models\Bank;
use App\Models\Employee;
use App\Models\Factory as Fac;



use Illuminate\Database\Eloquent\Factories\Factory;



class EmployeeFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Employee::class;



    /**

     * Define the model's default state.

     *

     * @return array

     */

    public function definition()
    {

        return [

            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email, 
            'date_of_birth' => $this->faker->date, 
            'address' => $this->faker->address, 
           /*  'country' => $this->faker->country,  */
            
            'phone' => $this->faker->phoneNumber, 
           

        ];

    }

}