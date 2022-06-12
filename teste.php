<?Php

namespace App;

class Main
{
    private string $test;

    public function __construct()
    {
        echo "Hello Main";
    }
    /**
     * Just a teste
     *
     * @param  string $name
     * @return void
     */
    public function teste(string $name): void
    {
    }

    /**
     * Get the value of test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set the value of test
     *
     * @return  self
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }
}
(new main())->teste("Nomeeee");
